<?php

use Illuminate\Database\Seeder;

class TanimAnlasmaliKurumlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                        $query = [
                            ['kurumadi' => 'Büyükşehir Belediyesi','katid' => 1,'dilid'=>'tr','durumu'=>1],
                        ];
                
                        foreach($query as $d){
                            \App\Models\Panel\Tanim\TanimAnlasmaliKurumlar::create($d);        
                        }
    }
}
