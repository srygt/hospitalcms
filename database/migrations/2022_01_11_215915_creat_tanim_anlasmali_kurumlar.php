<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimAnlasmaliKurumlar;

class CreatTanimAnlasmaliKurumlar extends Migration
{
    public function up()
    {
        Schema::create('tanim_anlasmali_kurumlar', function (Blueprint $table) {
            $table->id();
            $table->string(TanimAnlasmaliKurumlar::COLUMN_KURUMADI)->required()->comment('Başlık')->unique();
            $table->char(TanimAnlasmaliKurumlar::COLUMN_DILID,2)->nullable();
            $table->bigInteger(TanimAnlasmaliKurumlar::COLUMN_KATID)->unsigned()->index();
            $table->integer(TanimAnlasmaliKurumlar::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_anlasmali_kurumlar');
    }
}
