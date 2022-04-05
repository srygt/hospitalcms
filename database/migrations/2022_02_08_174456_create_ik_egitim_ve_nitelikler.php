<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\EgitimNitelik;

class CreateIkEgitimVeNitelikler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_egitim_ve_nitelikler', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(EgitimNitelik::COLUMN_IKID)->unsigned()->index();
            $table->foreign('ikid')->references('id')->on('ik')->onDelete('cascade');
            $table->string(EgitimNitelik::COLUMN_DERECE)->nullable();
            $table->string(EgitimNitelik::COLUMN_SEHIR)->nullable();
            $table->string(EgitimNitelik::COLUMN_OKUL)->nullable();
            $table->string(EgitimNitelik::COLUMN_BASAYI)->nullable();
            $table->string(EgitimNitelik::COLUMN_BASYILI)->nullable();
            $table->string(EgitimNitelik::COLUMN_BITAYI)->nullable();
            $table->string(EgitimNitelik::COLUMN_BITYILI)->nullable();
            $table->string(EgitimNitelik::COLUMN_TANIM)->nullable();
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
        Schema::dropIfExists('ik_egitim_ve_nitelikler');
    }
}
