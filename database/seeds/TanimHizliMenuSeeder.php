<?php

use Illuminate\Database\Seeder;

class TanimHizliMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Hizli Menü
                $dil = [
                    ['baslik' => 'Ana Menü','dilid' => 'tr','hastaneid'=>1,'link'=>'test','ikon'=>'fa-home','durumu'=>1],
                ];
        
                foreach($dil as $d){
                    \App\Models\Panel\TanimHizliMenu::create($d);
        
                }
    }
}
