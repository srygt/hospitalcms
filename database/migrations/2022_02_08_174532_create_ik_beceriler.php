<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\Beceriler;

class CreateIkBeceriler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_beceriler', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Beceriler::COLUMN_IKID)->unsigned()->index();
            $table->foreign('ikid')->references('id')->on('ik')->onDelete('cascade');
            $table->string(Beceriler::COLUMN_BECERI)->nullable();            
            $table->string(Beceriler::COLUMN_SEVIYE)->nullable();            
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
        Schema::dropIfExists('ik_beceriler');
    }
}
