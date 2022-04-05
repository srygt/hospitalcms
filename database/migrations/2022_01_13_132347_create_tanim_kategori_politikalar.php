<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimPolitikalarKategori;

class CreateTanimKategoriPolitikalar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_kategori_politikalar', function (Blueprint $table) {
            $table->id();
            $table->string(TanimPolitikalarKategori::COLUMN_KATADI)->required()->comment('Başlık')->unique();
            $table->string(TanimPolitikalarKategori::COLUMN_URL)->required()->comment('Url')->unique();
            $table->char(TanimPolitikalarKategori::COLUMN_DILID,2)->nullable();
            $table->integer(TanimPolitikalarKategori::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_kategori_politikalar');
    }
}
