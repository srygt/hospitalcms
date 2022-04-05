<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\Kurslar;

class CreateIkKurslar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_kurslar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Kurslar::COLUMN_IKID)->unsigned()->index();
            $table->foreign('ikid')->references('id')->on('ik')->onDelete('cascade');
            $table->string(Kurslar::COLUMN_KURS)->nullable();
            $table->string(Kurslar::COLUMN_KURUM)->nullable();
            $table->string(Kurslar::COLUMN_BASAYI)->nullable();
            $table->string(Kurslar::COLUMN_BASYILI)->nullable();
            $table->string(Kurslar::COLUMN_BITAYI)->nullable();
            $table->string(Kurslar::COLUMN_BITYILI)->nullable();
            $table->string(Kurslar::COLUMN_TANIM)->nullable();            
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
        Schema::dropIfExists('ik_kurslar');
    }
}
