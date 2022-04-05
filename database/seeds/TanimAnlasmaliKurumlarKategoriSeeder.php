<?php

use Illuminate\Database\Seeder;

class TanimAnlasmaliKurumlarKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['kategoriadi' => 'Özel Sigortalar','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Kamu Sigortaları','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Kurumlar','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Banka Sandık ve Vakıflar','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Şirketler','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Dernek ve Odalar','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Okullar','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Belediyeler','dilid'=>'tr','durumu'=>1],
            ['kategoriadi' => 'Spor Merkezleri ve Kulüpleri','dilid'=>'tr','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Tanim\TanimAnlasmaliKurumKategori::create($d);        
        }
    }
}
