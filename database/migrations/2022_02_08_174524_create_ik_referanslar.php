<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\Referanslar;

class CreateIkReferanslar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_referanslar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Referanslar::COLUMN_IKID)->unsigned()->index();
            $table->foreign('ikid')->references('id')->on('ik')->onDelete('cascade');
            $table->string(Referanslar::COLUMN_SIRKETADI)->nullable();            
            $table->string(Referanslar::COLUMN_ILETISIMKISI)->nullable();            
            $table->string(Referanslar::COLUMN_TELEFON)->nullable();            
            $table->string(Referanslar::COLUMN_EMAIL)->nullable();            
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
        Schema::dropIfExists('ik_referanslar');
    }
}
