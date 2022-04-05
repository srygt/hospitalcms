<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimUzmanlikAlani;

class CreateTanimUzmanlikAlani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_uzmanlik_alani', function (Blueprint $table) {
            $table->id();
            $table->string(TanimUzmanlikAlani::COLUMN_ALANADI)->required()->comment('Uzmanlık Alanı')->unique();
            $table->bigInteger(TanimUzmanlikAlani::COLUMN_USTID)->required()->default(0);
            $table->char(TanimUzmanlikAlani::COLUMN_DILID,2)->nullable();
            $table->integer(TanimUzmanlikAlani::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_uzmanlik_alani');
    }
}
