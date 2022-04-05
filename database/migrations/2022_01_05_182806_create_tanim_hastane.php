<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\TanimHastane;

class CreateTanimHastane extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_hastane', function (Blueprint $table) {
            $table->id();
            $table->string(TanimHastane::COLUMN_ADI)->required()->comment('Hastane Adı')->unique();
            $table->string(TanimHastane::COLUMN_LOGO)->nullable()->comment('Logo');
            $table->string(TanimHastane::COLUMN_ADRES)->nullable()->comment('Adres');
            $table->string(TanimHastane::COLUMN_WEB)->nullable()->comment('Web');
            $table->string(TanimHastane::COLUMN_EMAIL)->nullable()->comment('Email');
            $table->string(TanimHastane::COLUMN_ACIKLAMA)->nullable()->comment('Açıklama');
            $table->string(TanimHastane::COLUMN_SEHIR)->nullable()->comment('Şehir');
            $table->string(TanimHastane::COLUMN_DURUMU)->nullable()->comment('Durumu');
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
        Schema::dropIfExists('tanim_hastane');
    }
}
