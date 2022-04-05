<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Slider;

class CreateSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Slider::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');            
            $table->string(Slider::COLUMN_BASLIK)->required()->comment('Başlık Alanı');
            $table->string(Slider::COLUMN_URL)->required()->comment('Url Alanı');
            $table->string(Slider::COLUMN_RESIM)->nullable()->comment('Resim Alanı');
            $table->longText(Slider::COLUMN_ACIKLAMA)->nullable()->comment('Açıklama Alanı');
            $table->char(Slider::COLUMN_DILID,2)->nullable();
            $table->integer(Slider::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('slider');
    }
}
