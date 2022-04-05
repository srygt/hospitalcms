<?php

use Illuminate\Database\Seeder;

class TanimDilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Diller
                $dil = [
                    ['diladi' => 'Türkçe','sembol' => 'tr','durumu'=>1],
                    ['diladi' => 'İngilizce','sembol' => 'en','durumu'=>1],
                    ['diladi' => 'Arapça','sembol' => 'ar','durumu'=>1],
                    ['diladi' => 'Kurdî','sembol' => 'ku','durumu'=>1],
                    ['diladi' => 'Zazakî','sembol' => 'za','durumu'=>1],
                ];
        
                foreach($dil as $d){
                    \App\Models\Panel\TanimDil::create($d);        
                }
    }
}
