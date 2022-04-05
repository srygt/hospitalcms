<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimIcerikKategori;

class CreateTanimKategoriIcerikler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_kategori_icerikler', function (Blueprint $table) {
            $table->id();
            $table->string(TanimIcerikKategori::COLUMN_KATADI)->required()->comment('Başlık')->unique();
            $table->bigInteger(TanimIcerikKategori::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');                
            $table->string(TanimIcerikKategori::COLUMN_KATURL)->required()->comment('Link')->unique();
            $table->char(TanimIcerikKategori::COLUMN_DILID,2)->nullable();
            $table->integer(TanimIcerikKategori::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_kategori_icerikler');
    }
}
