<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimHastaRehberi;

class CreateTanimHastaRehberi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_hasta_rehberi', function (Blueprint $table) {
            $table->id();
            $table->string(TanimHastaRehberi::COLUMN_BASLIK)->required()->comment('Başlık');
            $table->char(TanimHastaRehberi::COLUMN_DILID,2)->nullable();
            $table->bigInteger(TanimHastaRehberi::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');
            $table->string(TanimHastaRehberi::COLUMN_URL)->nullable();
            $table->integer(TanimHastaRehberi::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_hasta_rehberi');
    }
}
