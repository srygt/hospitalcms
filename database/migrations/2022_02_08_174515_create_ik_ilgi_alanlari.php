<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ik\IlgiAlanlari;

class CreateIkIlgiAlanlari extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_ilgi_alanlari', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(IlgiAlanlari::COLUMN_IKID)->unsigned()->index();
            $table->foreign('ikid')->references('id')->on('ik')->onDelete('cascade');
            $table->string(IlgiAlanlari::COLUMN_ILGIALANI)->nullable();
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
        Schema::dropIfExists('ik_ilgi_alanlari');
    }
}
