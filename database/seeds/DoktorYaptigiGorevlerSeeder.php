<?php

use Illuminate\Database\Seeder;

class DoktorYaptigiGorevlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['doktorid'=>1, 'gorevyeri' => 'Test Hastanesi','gorevyili'=>'2012-2014','aciklama'=>'X Görevlisi olarak çalıştı','durumu'=>1],
        ];
        foreach($query as $d){
            \App\Models\Panel\Doktor\DoktorYaptigiGorevler::create($d);        
        }        
    }
}
