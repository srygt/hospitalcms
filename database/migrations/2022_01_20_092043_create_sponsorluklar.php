<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Sponsorluklar;

class CreateSponsorluklar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorluklar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Sponsorluklar::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');            
            $table->string(Sponsorluklar::COLUMN_BASLIK)->required()->comment('Başlık Alanı');
            $table->string(Sponsorluklar::COLUMN_URL)->required()->comment('Url Alanı');
            $table->string(Sponsorluklar::COLUMN_RESIM)->nullable()->comment('Resim Alanı');
            $table->string(Sponsorluklar::COLUMN_WEB)->nullable()->comment('Web Alanı');
            $table->longText(Sponsorluklar::COLUMN_ACIKLAMA)->nullable()->comment('Açıklama Alanı');
            $table->char(Sponsorluklar::COLUMN_DILID,2)->nullable();
            $table->integer(Sponsorluklar::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('sponsorluklar');
    }
}
