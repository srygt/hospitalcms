<?php

use Illuminate\Database\Seeder;

class TanimIcerikKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['kategoriadi' => 'Haberler','hlink'=>'haberler','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Duyurular','hlink'=>'duyurular','hastaneid'=>'1','dilid'=>'tr','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Tanim\TanimIcerikKategori::create($d);        
        }
    }
}
