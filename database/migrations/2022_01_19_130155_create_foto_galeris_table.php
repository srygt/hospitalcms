<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\FotoGaleri;

class CreateFotoGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_galeris', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(FotoGaleri::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');
            $table->char(FotoGaleri::COLUMN_DILID,2)->nullable();
            $table->string(FotoGaleri::COLUMN_GALERIADI)->required()->comment('Galeri Adı');
            $table->string(FotoGaleri::COLUMN_URL)->required()->comment('Url');
            $table->string(FotoGaleri::COLUMN_RESIM)->required();
            $table->longText(FotoGaleri::COLUMN_ACIKLAMA)->nullable();
            $table->integer(FotoGaleri::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('foto_galeris');
    }
}
