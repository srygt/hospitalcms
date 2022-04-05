<?php

use Illuminate\Database\Seeder;
use App\Models\Panel\TanimHastane;


class TanimHastaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Diller
       $hastane = [
        ['adi' => 'Bower Hospital','logo' => 'logo.png',
        'adres'=>'Diyarbakır',
        'web'=>'www.bowerhospital.com',
        'email'=>'email@bowerhospital.com',
        'aciklama'=>'Bower Hospital',
        'sehir'=>'Diyarbakır',
        'durumu'=>1
    ],

    ];

    foreach($hastane as $h){
        \App\Models\Panel\TanimHastane::create($h);

    }
    }
}
