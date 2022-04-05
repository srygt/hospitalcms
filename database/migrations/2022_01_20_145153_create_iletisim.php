<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Iletisim;

class CreateIletisim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iletisim', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Iletisim::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');            
            $table->string(Iletisim::COLUMN_ADRES)->required()->comment('Başlık Alanı');
            $table->string(Iletisim::COLUMN_HARITA,255)->nullable()->comment('Adres Alanı');
            $table->string(Iletisim::COLUMN_TELEFON,20)->nullable()->comment('Telefon');
            $table->string(Iletisim::COLUMN_GSM,20)->nullable()->comment('Gsm');
            $table->string(Iletisim::COLUMN_WHATSAPP,20)->nullable()->comment('Whatsapp');
            $table->string(Iletisim::COLUMN_EMAIL,120)->nullable()->comment('Email Adresi');
            $table->longText(Iletisim::COLUMN_ACIKLAMA)->nullable()->comment('Açıklama Alanı');
            $table->char(Iletisim::COLUMN_DILID,2)->nullable();
            $table->integer(Iletisim::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('iletisim');
    }
}
