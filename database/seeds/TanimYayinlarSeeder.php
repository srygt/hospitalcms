<?php

use Illuminate\Database\Seeder;


class TanimYayinlarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query = [
            ['yayinadi' => 'Yayın Adı','dilid' => 'tr','durumu'=>1],
        ];

        foreach($query as $d){
            \App\Models\Panel\Tanim\TanimYayinlar::create($d);
        }
    }
}
