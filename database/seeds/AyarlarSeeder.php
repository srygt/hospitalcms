<?php

use Illuminate\Database\Seeder;

class AyarlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['siteadi'=>'Bower Hospital', 'keywords' => 'Bower Hospital','description'=>'Bower Hospital','adres'=>'Yenişehir Mh. Elazığ Cd. No: 2
            Yenişehir / Diyarbakır','adres2'=>'','adres3'=>'','resim'=>'logo.png','aktif'=>1,'apikey'=>'',
            'verification'=>'','telefon'=>'0412 224 21 00','fax'=>'0412 224 22 00','gsm'=>'','whatsapp'=>'0850 305 21 00',
            'email'=>'iletisim@bowerhospital.com','web'=>'www.bowerhospital.com','facebook'=>'bowerhospitall','twitter'=>'bowerhospitall','instagram'=>'bowerhospital',
            'youtube'=>'bowerhospital','erandevu'=>'','etetkiksonuc'=>'','etetkikgoruntu'=>'','drtetkiksonuc'=>'','isbasvuru'=>'','doktorbul'=>''],
        ];
        foreach($query as $d){
            \App\Models\Panel\Ayarlar::create($d);        
        } 
    }
}
