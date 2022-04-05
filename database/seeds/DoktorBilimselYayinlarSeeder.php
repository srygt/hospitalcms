<?php

use Illuminate\Database\Seeder;

class DoktorBilimselYayinlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['dilid'=>'tr','yayinadi' => 'Test','aciklama'=>'Test Yayın','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Doktor\DoktorBilimselYayinlar::create($d);        
        }
    }
}
