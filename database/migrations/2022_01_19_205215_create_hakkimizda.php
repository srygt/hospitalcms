<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Hakkimizda;

class CreateHakkimizda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hakkimizda', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Hakkimizda::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');            
            $table->string(Hakkimizda::COLUMN_BASLIK)->required()->comment('Başlık Alanı');
            $table->string(Hakkimizda::COLUMN_URL)->required()->comment('Url Alanı');
            $table->string(Hakkimizda::COLUMN_RESIM)->nullable()->comment('Resim Alanı');
            $table->string(Hakkimizda::COLUMN_VIDEO)->nullable()->comment('Video Alanı');
            $table->longText(Hakkimizda::COLUMN_ACIKLAMA)->nullable()->comment('Açıklama Alanı');
            $table->char(Hakkimizda::COLUMN_DILID,2)->nullable();
            $table->integer(Hakkimizda::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('hakkimizda');
    }
}
