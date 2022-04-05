<?php

use Illuminate\Database\Seeder;

class TanimTibbiBirimlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['tlink'=>'acil-servis','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Acil Servis','durumu'=>1],
            ['tlink'=>'agiz-ve-dis-ve-cene-cerrahisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Ağız Diş ve Çene Cerrahisi','durumu'=>1],
            ['tlink'=>'agiz-ve-dis-sagligi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Ağız ve Diş Sağlığı','durumu'=>1],
            ['tlink'=>'agri-tedavisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Ağrı Tedavisi','durumu'=>1],
            ['tlink'=>'aile-hekimligi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Aile Hekimliği','durumu'=>1],
            ['tlink'=>'alerjik-hastaliklar','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Alerjik Hastalıklar','durumu'=>1],
            ['tlink'=>'anesteziyoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Anesteziyoloji','durumu'=>1],
            ['tlink'=>'bagimlilik-merkezi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Bağımlılık Merkezi','durumu'=>1],
            ['tlink'=>'beslenme-ve-diyet','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Beslenme ve Diyet','durumu'=>1],
            ['tlink'=>'beyin-ve-sinir-cerrahisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Beyin ve Sinir Cerrahisi','durumu'=>1],
            ['tlink'=>'bobrek-nakli-merkezi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Böbrek Nakli Merkezi','durumu'=>1],
            ['tlink'=>'cocuk-alerjisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Alerjisi','durumu'=>1],
            ['tlink'=>'cocuk-cerrahisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Cerrahisi','durumu'=>1],
            ['tlink'=>'cocuk-endokrinolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Endokrinolojisi','durumu'=>1],
            ['tlink'=>'cocuk-enfeksiyon-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Enfeksiyon Hastalıkları','durumu'=>1],
            ['tlink'=>'cocuk-gastroenterolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Gastroenterolojisi','durumu'=>1,'durumu'=>1],
            ['tlink'=>'cocuk-genetik-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Genetik Hastalıkları','durumu'=>1],
            ['tlink'=>'cocuk-gogus-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Göğüs Hastalıkları','durumu'=>1],
            ['tlink'=>'cocuk-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Hastalıkları','durumu'=>1],
            ['tlink'=>'cocuk-hematolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Hematolojisi','durumu'=>1],
            ['tlink'=>'cocuk-kardiyolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Kardiyolojisi','durumu'=>1],
            ['tlink'=>'cocuk-nefrolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Nefrolojisi','durumu'=>1],
            ['tlink'=>'cocuk-norolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Nörolojisi','durumu'=>1],
            ['tlink'=>'cocuk-norosirurjisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Nöroşirürjisi','durumu'=>1],
            ['tlink'=>'cocuk-onkolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Onkolojisi','durumu'=>1],
            ['tlink'=>'cocuk-romatolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Romatolojisi','durumu'=>1],
            ['tlink'=>'cocuk-urolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Ürolojisi','durumu'=>1],
            ['tlink'=>'cocuk-ve-ergen-ruh-sagligi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk ve Ergen Ruh Sağlığı','durumu'=>1],
            ['tlink'=>'cocuk-yogun-bakim','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Çocuk Yoğun Bakım','durumu'=>1],
            ['tlink'=>'deri-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Deri Hastalıkları','durumu'=>1],
            ['tlink'=>'el-cerrahisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'El Cerrahisi','durumu'=>1],
            ['tlink'=>'endokrinoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Endokrinoloji','durumu'=>1],
            ['tlink'=>'endoskopi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Endoskopi','durumu'=>1],
            ['tlink'=>'enfeksiyon-hastaliklari-ve-klinik-mikrobiyoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Enfeksiyon Hastalıkları ve Klinik Mikrobiyoloji','durumu'=>1],
            ['tlink'=>'estetik-plastik-ve-rekonstruktif-cerrahi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Estetik, Plastik ve Rekonstrüktif Cerrahi','durumu'=>1],
            ['tlink'=>'fizik-tedavi-ve-rehabilitasyon','aciklama'=>'Fizik Tedavi ve Rehabilitasyon','resim'=>'','dilid'=>'tr','birimadi'=>'Fizik Tedavi ve Rehabilitasyon','durumu'=>1],
            ['tlink'=>'gastroenteroloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Gastroenteroloji','durumu'=>1],
            ['tlink'=>'gastroenteroloji-ve-koloproktoloji-cerrahisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Gastroenteroloji ve Koloproktoloji Cerrahisi','durumu'=>1],
            ['tlink'=>'geleneksel-ve-tamamlayici-tip-uygulamalari-merkezi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Geleneksel ve Tamamlayıcı Tıp Uygulamaları Merkezi','durumu'=>1],
            ['tlink'=>'genel-cerrahi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Genel Cerrahi','durumu'=>1],
            ['tlink'=>'girisimsel-radyoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Girişimsel Radyoloji','durumu'=>1],
            ['tlink'=>'gogus-cerrahisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Göğüs Cerrahisi','durumu'=>1],
            ['tlink'=>'gogus-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Göğüs Hastalıkları','durumu'=>1],
            ['tlink'=>'goz-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Göz Hastalıkları','durumu'=>1],
            ['tlink'=>'hematoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Hematoloji','durumu'=>1],
            ['tlink'=>'ic-hastaliklari','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'İç Hastalıkları','durumu'=>1],
            ['tlink'=>'isyeri-hekimi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'İşyeri Hekimi','durumu'=>1],
            ['tlink'=>'jinekolojik-onkoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Jinekolojik Onkoloji','durumu'=>1],
            ['tlink'=>'kadin-hastaliklari-ve-dogum','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kadın Hastalıkları ve Doğum','durumu'=>1],
            ['tlink'=>'karaciger-nakli-merkezi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Karaciğer Nakli Merkezi','durumu'=>1],
            ['tlink'=>'kardiyoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kardiyoloji','durumu'=>1],
            ['tlink'=>'kardiyovaskuler-cerrahi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kardiyovasküler Cerrahi','durumu'=>1],
            ['tlink'=>'kat-hekimligi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kat Hekimliği','durumu'=>1],
            ['tlink'=>'kemik-iligi-nakli-merkezi-eriskin','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kemik İliği Nakli Merkezi (Erişkin)','durumu'=>1],
            ['tlink'=>'kemik-iligi-nakli-merkezi-pediyatrik','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kemik İliği Nakli Merkezi (Pediyatrik)','durumu'=>1],
            ['tlink'=>'klinik-laboratuvar','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Klinik Laboratuvar','durumu'=>1],
            ['tlink'=>'koroner-yogun-bakim','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Koroner Yoğun Bakım','durumu'=>1],
            ['tlink'=>'kulak-burun-bogaz','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Kulak Burun Boğaz','durumu'=>1],
            ['tlink'=>'nefroloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Nefroloji','durumu'=>1],
            ['tlink'=>'noroloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Nöroloji','durumu'=>1],
            ['tlink'=>'nukleer-tip','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Nükleer Tıp','durumu'=>1],
            ['tlink'=>'odyoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Odyoloji','durumu'=>1],
            ['tlink'=>'ortopedi-ve-travmatoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Ortopedi ve Travmatoloji','durumu'=>1],
            ['tlink'=>'patoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Patoloji','durumu'=>1],
            ['tlink'=>'perinatoloji-ve-yuksek-riskli-gebelikler','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Perinatoloji ve Yüksek Riskli Gebelikler','durumu'=>1],
            ['tlink'=>'psikiyatri','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Psikiyatri','durumu'=>1],
            ['tlink'=>'psikoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Psikoloji','durumu'=>1],
            ['tlink'=>'radyasyon-onkolojisi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Radyasyon Onkolojisi','durumu'=>1],
            ['tlink'=>'radyoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Radyoloji','durumu'=>1],
            ['tlink'=>'romatoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Romatoloji','durumu'=>1],
            ['tlink'=>'spor-hekimligi','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Spor Hekimliği','durumu'=>1],
            ['tlink'=>'tibbi-onkoloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Tıbbi Onkoloji','durumu'=>1],
            ['tlink'=>'tup-bebek-merkezleri','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Tüp Bebek Merkezleri','durumu'=>1],
            ['tlink'=>'uroloji','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Üroloji','durumu'=>1],
            ['tlink'=>'yenidogan-yogun-bakim','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Yenidoğan Yoğun Bakım','durumu'=>1],
            ['tlink'=>'yogun-bakim','aciklama'=>'Açıklama Alanı','resim'=>'','dilid'=>'tr','birimadi'=>'Yoğun Bakım','durumu'=>1]            
        ];

        foreach($query as $d){
            \App\Models\Panel\Tanim\TanimTibbiBirimler::create($d);        
        }
    }
}
