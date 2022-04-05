<?php

use Illuminate\Database\Seeder;

class TanimPolitikalarKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['kategoriadi' => 'Politikalar','pklink'=>'politikalar','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Sözleşmeler','pklink'=>'sozlesmeler','dilid'=>'tr','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Tanim\TanimPolitikalarKategori::create($d);        
        }
    }
}
