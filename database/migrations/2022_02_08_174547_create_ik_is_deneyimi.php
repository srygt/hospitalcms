<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\IsDeneyimi;

class CreateIkIsDeneyimi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_is_deneyimi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(IsDeneyimi::COLUMN_IKID)->unsigned()->index();
            $table->foreign('ikid')->references('id')->on('ik')->onDelete('cascade');
            $table->string(IsDeneyimi::COLUMN_ISUNVANI)->nullable();
            $table->string(IsDeneyimi::COLUMN_SEHIR)->nullable();
            $table->string(IsDeneyimi::COLUMN_ISVEREN)->nullable();
            $table->string(IsDeneyimi::COLUMN_BASAYI)->nullable();
            $table->string(IsDeneyimi::COLUMN_BASYILI)->nullable();
            $table->string(IsDeneyimi::COLUMN_BITAYI)->nullable();
            $table->string(IsDeneyimi::COLUMN_BITYILI)->nullable();
            $table->string(IsDeneyimi::COLUMN_TANIM)->nullable();
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
        Schema::dropIfExists('ik_is_deneyimi');
    }
}
