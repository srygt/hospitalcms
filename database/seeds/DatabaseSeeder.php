<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call([TanimDilSeeder::class]);
        $this->call([TanimHastaneSeeder::class]);
        $this->call([TanimHizliMenuSeeder::class]);
        $this->call([TanimYayinlarSeeder::class]);
        $this->call([TanimAnlasmaliKurumlarSeeder::class]);
        $this->call([TanimAnlasmaliKurumlarKategoriSeeder::class]);
        $this->call([TanimPolitikalarKategoriSeeder::class]);
        $this->call([TanimIcerikKategoriSeeder::class]);
        $this->call([TanimTibbiBirimlerSeeder::class]);
        $this->call([TanimUzmanlikAlaniSeeder::class]);
        $this->call([AyarlarSeeder::class]);
        $this->call([IkBolumSeeder::class]);
    }
}
