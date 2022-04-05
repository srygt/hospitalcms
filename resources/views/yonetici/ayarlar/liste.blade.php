
@extends('yonetici.layout.master')

@section('parentPageTitle', 'Ayar İşlemleri ')
@section('title', 'Ayarlar')
@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Anasayfa</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Ayarlar</a></li>
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
                    <h4 class="card-title"><i class="fa fa-arrow-right"></i> Ayarlar</h4>                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Başlık</th>
                                    <th>Durumu</th>
                                    <th>İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ayarlar as $v)
                                    <tr>
                                        <td>{{$v->siteadi }}</td>
                                        <td>@if ($v->aktif === 1)
 
                                            <span class="text-nowrap">
												<svg class="mr-2" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="4.5" cy="4.5" r="4.5" fill="#2BC155"></circle>
												</svg>
												<span class="text-success">Aktif</span>
											</span>
                                         @else
                                         <span class="text-nowrap">
                                            <svg class="mr-2" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="4.5" r="4.5" fill="#FF0000"></circle>
                                            </svg>
                                            <span class="text-danger">Pasif</span>
                                        </span>                                         
                                         @endif                                        
                                        </td>                                        
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('yonetici.ayarlar.guncelle.get', $v->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            </div>	
                                        </td>
                                    </tr>
                                @endforeach                                    
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
    $('.matgis-delete').on('click', function(){
        deleteItem(
            $(this).parents('tr'),
            "{{ route('yonetici.ayarlar.destroy', ':id') }}".replace(':id', $(this).data('id'))
        );
    });
</script>   
@stop	
	