<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorYaptigiGorevler;

class CreateDoktorYaptigiGorevler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktor_yaptigi_gorevler', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(DoktorYaptigiGorevler::COLUMN_DOKTORID)->unsigned()->index();
            $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
            $table->string(DoktorYaptigiGorevler::COLUMN_GOREVYERI)->required()->comment('Görev Yeri');
            $table->string(DoktorYaptigiGorevler::COLUMN_GOREVYILI);
            $table->string(DoktorYaptigiGorevler::COLUMN_ACIKLAMA);
            $table->integer(DoktorYaptigiGorevler::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_yaptigi_gorevler');
    }
}
