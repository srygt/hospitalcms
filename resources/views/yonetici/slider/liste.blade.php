
@extends('yonetici.layout.master')

@section('parentPageTitle', 'Slider İşlemleri ')
@section('title', 'Slider Listesi')
@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Anasayfa</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Slider</a></li>
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
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Slider Listesi</h4>                    
                    <a href="{{route('yonetici.slider.store.get')}}" class="btn btn-success btn-rounded pull-right"><i class="fa fa-plus-square"></i> Ekle</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="matgistable" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Resim</th>
                                    <th>Hastane</th>
                                    <th>Dil</th>
                                    <th>Başlık</th>
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
            "{{ route('yonetici.slider.destroy', ':id') }}".replace(':id', $(this).data('id'))
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
                url: '{{route('yonetici.slider.data')}}',
                data: function (d) {
                    d.startDate = $('#datepicker_from').val();
                    d.endDate = $('#datepicker_to').val();
                }
            },
            columns: [
                { data: 'resim', name: 'resim'},
                { data: 'adi', name: 'adi'},
                { data: 'diladi', name: 'diladi'},
                { data: 'baslik', name: 'baslik'},
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
	