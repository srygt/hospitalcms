<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimAnlasmaliKurumKategori;

class CreatTanimKategoriAnlasmaliKurumlar extends Migration
{
    public function up()
    {
        Schema::create('tanim_kategori_anlasmali_kurumlar', function (Blueprint $table) {
            $table->id();
            $table->string(TanimAnlasmaliKurumKategori::COLUMN_KATADI)->required()->comment('Başlık')->unique();
            $table->char(TanimAnlasmaliKurumKategori::COLUMN_DILID,2)->nullable();
            $table->integer(TanimAnlasmaliKurumKategori::COLUMN_DURUMU)->required()->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanim_kategori_anlasmali_kurumlar');
    }
}
