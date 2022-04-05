<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Icerikler;

class CreateIcerikler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icerikler', function (Blueprint $table) {
            $table->id();
            $table->string(Icerikler::COLUMN_URL,250)->required()->comment('İçerik Linki');
            $table->string(Icerikler::COLUMN_BASLIK,250)->required()->comment('Başlık');
            $table->bigInteger(Icerikler::COLUMN_KATID)->unsigned()->index();
            $table->foreign('kategoriid')->references('id')->on('tanim_kategori_icerikler')->onDelete('cascade');            
            $table->bigInteger(Icerikler::COLUMN_BIRIMID)->nullable();
            $table->date(Icerikler::COLUMN_TARIH)->nullable();
            $table->bigInteger(Icerikler::COLUMN_DOKTORID)->nullable();
            $table->longText(Icerikler::COLUMN_ACIKLAMA)->nullable();
            $table->string(Icerikler::COLUMN_RESIM)->nullable();
            $table->bigInteger(Icerikler::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');
            $table->string(Icerikler::COLUMN_VIDEO,155)->nullable();
            $table->char(Icerikler::COLUMN_DILID,2)->nullable();
            $table->string(Icerikler::COLUMN_DESC,240)->nullable();
            $table->integer(Icerikler::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('icerikler');
    }
}
