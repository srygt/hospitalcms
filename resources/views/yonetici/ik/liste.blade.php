
@extends('yonetici.layout.master')

@section('parentPageTitle', 'İnsan Kaynakları Başvuruları İşlemleri ')
@section('title', 'İnsan Kaynakları Başvuruları Listesi')
@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Anasayfa</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">İnsan Kaynakları Başvuruları</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                    @if ($errors->any() || session()->has('message'))
                    <div class="col-sm-12" id="messages">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message')}}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                @endif                  
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> İnsan Kaynakları Başvuruları Listesi</h4>                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="text-info"><i class="fa fa-list"></i> <strong>Birim Bazlı Bekleyen Başvurular</strong></h6>
                                <table class="table table-bordered">
                                    @foreach($bekleyen as  $b)
                                        @foreach($bekleyena as $ba)
                                            @if($ba->bolumid==$b->bolumid)
                                                    <tr>
                                                        <th class="bg-info text-white pt-3 pb-0 pl-2 pr-2">{{ $b->bolumadi }}</th>
                                                        <td>{{ $ba->adet }}</td>
                                                    </tr>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </table>                                
                            </div>
                            <div class="col-md-4">
                                <h6 class="text-success"><i class="fa fa-list"></i> <strong>Birim Bazlı Onaylanan Başvurular</strong></h6>
                                <table class="table table-bordered">
                                    @foreach($onaylanan as $b)
                                        <tr>
                                            <th class="bg-success">{{ $b->bolumadi }}</th>
                                            <td>{{ $b->adet }}</td>
                                        </tr>
                                    @endforeach
                                </table>                                
                            </div>
                            <div class="col-md-4">
                                <h6 class="text-danger"><i class="fa fa-list"></i> <strong>Birim Bazlı İptal Edilen Başvurular</strong></h6>
                                <table class="table table-bordered">
                                    @foreach($retedilen as $b)
                                        <tr>
                                            <th class="bg-danger">{{ $b->bolumadi }}</th>
                                            <td>{{ $b->adet }}</td>
                                        </tr>
                                    @endforeach
                                </table>                                
                            </div>
                        </div>
                        <table id="matgistable" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
                                    <th>Şehir</th>
                                    <th>Cinsiyeti</th>
                                    <th>Telefon</th>
                                    <th>Email</th>
                                    <th>Adres</th>
                                    <th>Durumu</th>
                                    <th>Detay</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<!-- Datatable -->
<link href="{{ asset('yonetici/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('yonetici/js/sweetalert/sweetalert.css') }}">
<script src="{{ asset('yonetici/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('yonetici/js/plugins-init/datatables.init.js') }}"></script>    
<script src="{{ asset('yonetici/js/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $(document).delegate( '.matgis-delete', "click",function (event) {
        deleteItem(
            $(this).parents('tr'),
            "{{ route('yonetici.ik.destroy', ':id') }}".replace(':id', $(this).data('id'))
        );
    });
    $(document).ready(function() {
        let table =  $('#matgistable').DataTable( {
            lengthMenu: [[25, 100, -1], [25, 100, "Tümü"]],
            processing: true,
            serverSide: true,
            ajax: {
                type:'POST',
                headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                url: '{{route('yonetici.ik.data')}}',
                data: function (d) {
                    d.startDate = $('#datepicker_from').val();
                    d.endDate = $('#datepicker_to').val();
                }
            },
            columns: [
                { data: 'adi', name: 'adi'},
                { data: 'soyadi', name: 'soyadi'},
                { data: 'sehir', name: 'sehir'},
                { data: 'cinsiyet', name: 'cinsiyet'},
                { data: 'telefon', name: 'telefon'},
                { data: 'email', name: 'email'},
                { data: 'adres', name: 'adres'},
                { data: 'durumu', name: 'durumu'},
                { data: 'detay', name: 'detay', orderable: false, searchable: false },
                { data: 'duzenle', name: 'duzenle', orderable: false, searchable: false },
                { data: 'sil', name: 'sil', orderable: false, searchable: false }

            ]
        });
        jQuery.fn.DataTable.ext.type.search.string = function(data) {
            var testd = !data ?
                '' :
                typeof data === 'string' ?
                    data
                        .replace(/i/g, 'İ')
                        .replace(/ı/g, 'I') :
                    data;
            return testd;
        };
    });
</script>  

@stop	
	