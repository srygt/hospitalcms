<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\Ik;

class CreateIk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Ik::COLUMN_BOLUMID)->unsigned()->index();
            $table->string(Ik::COLUMN_BASTIPID)->required();
            $table->string(Ik::COLUMN_ADI,30)->nullable();
            $table->string(Ik::COLUMN_SOYADI,30)->nullable();
            $table->string(Ik::COLUMN_SEHIR,30)->nullable();
            $table->string(Ik::COLUMN_EMAIL,75)->nullable();
            $table->string(Ik::COLUMN_TELEFON,21)->nullable();
            $table->string(Ik::COLUMN_ADRES)->nullable();
            $table->string(Ik::COLUMN_PKODU,7)->nullable();
            $table->string(Ik::COLUMN_GUN,3)->nullable();
            $table->string(Ik::COLUMN_AY,10)->nullable();
            $table->string(Ik::COLUMN_YIL,4)->nullable();
            $table->string(Ik::COLUMN_DYERI,30)->nullable();
            $table->string(Ik::COLUMN_EHLIYET,20)->nullable();
            $table->string(Ik::COLUMN_CINSIYET,5)->nullable();
            $table->string(Ik::COLUMN_ASKERLIK,50)->nullable();
            $table->string(Ik::COLUMN_MDURUMU,25)->nullable();
            $table->string(Ik::COLUMN_LINKEDIN,50)->nullable();
            $table->string(Ik::COLUMN_WEBSITE,100)->nullable();
            $table->string(Ik::COLUMN_PROFILI)->nullable();
            $table->string(Ik::COLUMN_BASARILARI)->nullable();
            $table->string(Ik::COLUMN_YAYINLAR)->nullable();
            $table->string(Ik::COLUMN_OZELBOLUM)->nullable();
            $table->string(Ik::COLUMN_KVKK,1)->nullable();
            $table->string(Ik::COLUMN_RESIM,150)->nullable();
            $table->integer(Ik::COLUMN_DURUMU)->required()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ik');
    }
}
