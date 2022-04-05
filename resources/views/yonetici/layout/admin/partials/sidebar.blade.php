<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="{{ Request::segment(2) === 'anasayfa' ? 'active' : null }}">
                <a href="{{route('home')}}" title="Anasayfa">
                    <i class="flaticon-381-home"></i>
                    <span class="nav-text">Anasayfa</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-user"></i>
                    <span class="nav-text">Doktorlar</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.doktorlar.liste')}}">Doktor Listesi</a>
                    </li>           
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.doktorlar.store.get')}}">Doktor Ekle</a>
                    </li> 
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.ilgialanlari.liste')}}">İlgi Alanları</a>
                    </li> 
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.bilimselyayinlar.liste')}}">Bilimsel Yayınlar</a>
                    </li>   
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.yaptigigorevler.liste')}}">Görev Yaptığı Hastaneler</a>
                    </li>                                                                                                                   
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.meslekiuyelik.liste')}}">Mesleki Üyelikler</a>
                    </li>
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.odulderece.liste')}}">Ödül ve Dereceler</a>
                    </li>     
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.kurskonferans.liste')}}">Kurslar ve Konferanslar</a>
                    </li>                                            
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.doktor.egitimler.liste')}}">Eğitim</a>
                    </li>
                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Tanımlar</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.dil.liste')}}">Diller</a>
                    </li>  
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.hastane.liste')}}">Hastaneler</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.hizlimenu.liste')}}">Hızlı Menü</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.yayinlar.liste')}}">Yayınlar</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.anlasmalikurumlar.liste')}}">Anlaşmalı Kurumlar</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.tibbibirimler.liste')}}">Tıbbi Birimler</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.icerikkategori.liste')}}">İçerik Kategorileri</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.politikalarkategori.liste')}}">Politikalar Kategori</a>
                    </li>                                        
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.anlasmalikurumkategori.liste')}}">Anlaşmalı Kurumlar Kategori</a>
                    </li>
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.uzmanlikalani.liste')}}">Uzmanlık Alanları</a>
                    </li>                    
                    <li class="{{ Request::segment(2) === 'tanim' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.hastarehberi.liste')}}">Hasta Rehberi</a>
                    </li>                    
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">İçerikler</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::segment(2) === 'icerik' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.icerikler.liste')}}">İçerikler</a>
                    </li>
                    <li class="{{ Request::segment(2) === 'icerik' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.icerikler.store.get')}}">İçerik Ekle</a>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-layer-1"></i>
                <span class="nav-text">Kurumsal</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::segment(2) === 'hakkimizda' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.hakkimizda.liste')}}">Hakkımızda</a>
                    </li>   
                    <li class="{{ Request::segment(2) === 'hakkimizda' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.fotogaleri.liste')}}">Foto Galeri</a>
                    </li>  
                    <li class="{{ Request::segment(2) === 'hakkimizda' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.tanim.politikalar.liste')}}">Politikalar</a>
                    </li>             
                    <li class="{{ Request::segment(2) === 'hakkimizda' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.sponsorluklar.liste')}}">Sponsorluklar</a>
                    </li>                                     
                </ul>
            </li>            
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-heart"></i>
                    <span class="nav-text">Ameliyathaneler</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.ameliyathaneler.liste')}}">Ameliyathaneler</a>
                    </li>                                            
                    <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.ameliyathaneler.store.get')}}">Ameliyathane Ekle</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::segment(2) === 'doktor' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
            >
                <a href="{{route('yonetici.slider.liste')}}"><i class="la la-camera"></i> <span class="nav-text">Slider</span></a>
            </li>               
            <li><a href="#" >
                <i class="flaticon-381-settings-2"></i>
                <span class="nav-text">İstek ve Şikayetler</span>
                </a>
            </li>                           
            <li><a href="{{route('yonetici.ik.liste')}}">
                <i class="la la-users"></i>
                <span class="nav-text">İnsan Kaynakları</span>
                </a>
            </li>                           
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-settings"></i>
                    <span class="nav-text">Ayarlar</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::segment(2) === 'ayarlar' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.ayarlar.liste')}}">Site Ayarları</a>
                    </li>
                    <li class="{{ Request::segment(2) === 'ayarlar' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.iletisim.liste')}}">İletişim Bilgileri</a>
                    </li>
                    <li class="{{ Request::segment(2) === 'ayarlar' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.sitemenu.liste')}}">Site Menüsü</a>
                    </li>   
                    <li class="{{ Request::segment(2) === 'ayarlar' && Request::segment(3) == 'dil' && Request::segment(4) == 'ekle' ? 'active' : null }}"
                        >
                            <a href="{{route('yonetici.kullanici.liste')}}">Kullanıcılar</a>
                    </li>                                        
                </ul>            
            </li>   
        </ul>
        <div class="copyright">
            <p class="fs-14 font-w200"><strong class="font-w400">© <?=date("Y")?> Hastane Yönetim Portali</strong> Matgis Yazılım tarafından geliştirilmiştir.</p>
        </div>
    </div>
</div>