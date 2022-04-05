<?php

use Illuminate\Database\Seeder;

class TanimHastaRehberiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['baslik' => 'Anlaşmalı Kurumlar','rlink'=>'anlasmali-kurumlar','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Ziyaretçi Politikası','rlink'=>'politika/ziyaretci-politikasi','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Şikayet Politikası','rlink'=>'politika/sikayet-politikasi','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Refakatçi Politikası','rlink'=>'politika/refakatci-politikasi','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Hasta Hakları Bildirgesi','rlink'=>'politika/hasta-haklari-bildirgesi','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Hasta Hakları','rlink'=>'politika/hasta-haklari','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Hasta Sorumluluklari','rlink'=>'politika/hasta-sorumluluklari','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['baslik' => 'Hekim Hakları','rlink'=>'politika/hekim-haklari','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Tanim\TanimHastaRehberi::create($d);        
        }
    }
}
