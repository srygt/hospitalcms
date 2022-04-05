<?php

use Illuminate\Database\Seeder;

class DoktorIlgiAlanlariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['alanadi' => 'Kornea','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Glokom ve Üvea Hastalıkları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Kornea ve Konjonktiva Hastalıkları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Kuru Göz','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Allerjik Göz Hastalıkları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Nefroloji','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Yüksek Riskli Gebelikler','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Manyetik Rezonans Görüntüleme','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Bilgisayarlı Tomografi Görüntüleme','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Girişimsel Radyoloji','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Otolog ve Allojeneik Kök Hücre Nakli','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Akut ve Kronik Lösemiler','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Multiple Myeloma','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Lenfomalar (Hodgkin ve Non-Hodgkin hastalığı)','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Hematopoetik ve Mezankimal Kök Hücre Farklılaştırılması, Tedavileri','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Kemoterapötik İlaç Direnç Mekanizmaları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Hücre- Doku Kültürü, Sitotoksisite ve Hücre Ölümü','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Uluslararası Akreditasyon','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Hastane Enfeksiyonları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Seyahat Sağlığı ve Aşılama','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Döküntülü Hastalıklar','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Afet Tıbbı','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Acil Tıp','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Bronşial Astım','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Kronik Obstruktif Akciğer Hastalığı (KOAH)','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Akciğer Kanseri','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Pulmoner Emboli','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Yoğun Bakım ve Geriatri','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Akut ve Kronik Ağrı Tedavisi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Beyin Cerrahisi Anestezisi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Çocuk Cerrahisi Anestezisi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Göğüs Cerrahisi Anestezisi,','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Rejyonal Anestezi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Yoğun Bakım ve Reanimasyon','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Girişimsel Kardiyoloji','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Aritmi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Elektrofizyoloji','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Cihaz İmplantasyonu','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Kalite Kontrol Sistemleri','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Retina Hastalıkları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Diabetik Retinopati','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Maküla Dejenerasyonu','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Retinal Ven Tıkanıklıkları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Anne Çocuk Beslenmesi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Klinik Beslenme','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Toplu Beslenme Sistemleri','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Gebelik Takibi ve Doğum','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Laparoskopi, Histeroskopi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Genital Kozmetik ve Rekonstrüktif Cerrahi','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Bağışıklık Sistemi Sorunları','dilid'=>'tr','durumu'=>1],
            ['alanadi' => 'Lyme Hastalığı Tanı ve Tedavisi','dilid'=>'tr','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Doktor\DoktorIlgiAlanlari::create($d);        
        }
    }
}
