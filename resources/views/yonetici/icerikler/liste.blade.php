
@extends('yonetici.layout.master')

@section('parentPageTitle', 'İçerik İşlemleri ')
@section('title', 'İçerikler Listesi')
@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Anasayfa</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">İçerikler</a></li>
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
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> İçerikler Listesi</h4>                    
                    <a href="{{route('yonetici.icerikler.store.get')}}" class="btn btn-success pull-right"><i class="fa fa-plus-square"></i> Ekle</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="matgistable" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Resim</th>
                                    <th>Başlık</th>
                                    <th>Kategori</th>
                                    <th>Hastane</th>
                                    <th>Birim</th>
                                    <th>Dil</th>
                                    <th>Doktor</th>
                                    <th>Durum</th>
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
            "{{ route('yonetici.icerikler.destroy', ':id') }}".replace(':id', $(this).data('id'))
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
                url: '{{route('yonetici.icerikler.data')}}',
                data: function (d) {
                    d.startDate = $('#datepicker_from').val();
                    d.endDate = $('#datepicker_to').val();
                }
            },
            columns: [
                { data: 'resim', name: 'resim'},
                { data: 'baslik', name: 'baslik'},
                { data: 'kategoriadi', name: 'kategoriadi'},
                { data: 'adi', name: 'adi'},
                { data: 'birimadi', name: 'birimadi'},
                { data: 'diladi', name: 'diladi'},
                { data: 'doktoradi', name: 'doktoradi'},
                { data: 'durumu', name: 'durumu'},
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
	