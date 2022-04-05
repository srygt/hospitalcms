
@extends('yonetici.layout.master')

@section('parentPageTitle', 'Başvuru Formu')
@section('title', 'Başvuru Formu')
@section('content')
<style type="text/css">
    table { page-break-inside:auto }
    tr    { page-break-inside:avoid; page-break-after:auto }
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
</style>
<script>
    function CallPrint(strid){
        var prtContent = document.getElementById(strid);
        var WinPrint   = window.open(",",'left=0,top=0,toolbar=0,scrollbars=0,status=0,height=1');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
    }
</script>
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Anasayfa</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Başvuru Formu</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row" id="yazdirmaalani">
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
                    <h4 class="card-title"><i class="fa fa-user"></i> {{ $ik->adi }} {{ $ik->soyadi }}</h4>                    
                    <a href="javascript:CallPrint('yazdirmaalani')"><i class="fa fa-print"></i></a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6"><h5><strong>Kişisel Bilgiler</strong></h5></div>
                        <div class="col-6"><h5><strong>İletişim Bilgileri</strong></h5></div>
                        <div class="col-6">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Adı Soyadı</th>
                                        <td>{{ $ik->adi }} {{ $ik->soyadi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Cinsiyeti</th>
                                        <td>{{ $ik->cinsiyet }}</td>
                                    </tr>
                                    <tr>
                                        <th>Doğum Tarihi</th>
                                        <td>{{ $ik->gun }} / {{ $ik->ay }} / {{ $ik->yil}}</td>
                                    </tr>
                                    <tr>
                                        <th>Doğum Yeri</th>
                                        <td>{{ $ik->dogumyeri }}</td>
                                    </tr>
                                    <tr>
                                        <th>Medeni Durumu</th>
                                        <td>{{ $ik->medenidurumu }}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-6">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Telefon</th>
                                        <td>{{ $ik->telefon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $ik->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Adres</th>
                                        <td>{{ $ik->adres }}</td>
                                    </tr>
                                    <tr>
                                        <th>LinkEdin</th>
                                        <td>{{ $ik->linkedin }}</td>
                                    </tr>
                                    <tr>
                                        <th>Web Sitesi</th>
                                        <td>{{ $ik->website }}</td>
                                    </tr>
                                </thead>
                            </table>                            
                        </div>
                        <div class="col-6">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Profil Bilgisi</th>
                                        <td>{{ $ik->profili }}</td>
                                    </tr>
                                    <tr>
                                        <th>Başarıları</th>
                                        <td>{{ $ik->basarilari }}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-6">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Yayınlar</th>
                                        <td>{{ $ik->yayinlar }}</td>
                                    </tr>
                                    <tr>
                                        <th>Özel Bölüm</th>
                                        <td>{{ $ik->ozelbolum }}</td>
                                    </tr>
                                </thead>
                            </table>                            
                        </div> 
                        @if ($en->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> Eğitim ve Nitelikler</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Ödül ve Dereceler</th>
                                        <th>Şehir</th>
                                        <th>Okulu</th>
                                        <th>Başlangıç Ayı</th>
                                        <th>Başlangıç Yılı</th>
                                        <th>Bitiş Ayı</th>
                                        <th>Bitiş Yılı</th>
                                        <th>Açıklama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($en as $e)
                                    <tr>
                                        <td>{{ $e->derece }}</td>
                                        <td>{{ $e->sehir }}</td>
                                        <td>{{ $e->okul }}</td>
                                        <td>{{ $e->baslangicayi }}</td>
                                        <td>{{ $e->baslangicyili }}</td>
                                        <td>{{ $e->bitisayi }}</td>
                                        <td>{{ $e->bitisyili }}</td>
                                        <td>{{ $e->tanim }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>   
                        @endif 
                        @if ($ia->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> İlgi Alanları</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>İlgi Alanı</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ia as $e)
                                    <tr>
                                        <td>{{ $e->ilgialani }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>   
                        @endif 
                        @if ($isd->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> İş Deneyimi</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>İş Ünvanı</th>
                                        <th>Şehir</th>
                                        <th>İşveren</th>
                                        <th>Başlangıç Ayı</th>
                                        <th>Başlangıç Yılı</th>
                                        <th>Bitiş Ayı</th>
                                        <th>Bitiş Yılı</th>
                                        <th>Açıklama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($isd as $e)
                                    <tr>
                                        <td>{{ $e->isunvani }}</td>
                                        <td>{{ $e->sehir }}</td>
                                        <td>{{ $e->isveren }}</td>
                                        <td>{{ $e->baslangicayi }}</td>
                                        <td>{{ $e->baslangicyili }}</td>
                                        <td>{{ $e->bitisayi }}</td>
                                        <td>{{ $e->bitisyili }}</td>
                                        <td>{{ $e->tanim }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>          
                        @endif 
                        @if ($bec->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> Beceriler</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Konu</th>
                                        <th>Seviye</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bec as $e)
                                    <tr>
                                        <td>{{ $e->beceri }}</td>
                                        <td>{{ $e->seviye }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>     
                        @endif 
                        @if ($kur->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> Kurslar</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Kurs Adı</th>
                                        <th>Kurum</th>
                                        <th>Başlangıç Ayı</th>
                                        <th>Başlangıç Yılı</th>
                                        <th>Bitiş Ayı</th>
                                        <th>Bitiş Yılı</th>
                                        <th>Açıklama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kur as $e)
                                    <tr>
                                        <td>{{ $e->kurs }}</td>
                                        <td>{{ $e->kurum }}</td>
                                        <td>{{ $e->baslangicayi }}</td>
                                        <td>{{ $e->baslangicyili }}</td>
                                        <td>{{ $e->bitisayi }}</td>
                                        <td>{{ $e->bitisyili }}</td>
                                        <td>{{ $e->tanim }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>  
                        @endif 
                        @if ($dil->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> Diller</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Dil</th>
                                        <th>Seviye</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dil as $e)
                                    <tr>
                                        <td>{{ $e->dil }}</td>
                                        <td>{{ $e->seviye }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>   
                        @endif 
                        @if ($ref->isNotEmpty())
                        <div class="col-12"><h5><strong><i class="fa fa-list"></i> Referanslar</strong></h5></div>
                        <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Şirket/Kurum</th>
                                        <th>Kişi</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ref as $e)
                                    <tr>
                                        <td>{{ $e->sirket }}</td>
                                        <td>{{ $e->kisi }}</td>
                                        <td>{{ $e->telefon }}</td>
                                        <td>{{ $e->email }}</td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>  
                        @endif                                               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
	