<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\TanimDil;

class CreateTanimDil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_dil', function (Blueprint $table) {
            $table->id();
            $table->string(TanimDil::COLUMN_DILADI)->required()->comment('Dil Adı')->unique();
            $table->string(TanimDil::COLUMN_SEMBOL)->required()->comment('Sembol')->unique();
            $table->string(TanimDil::COLUMN_DURUMU)->nullable()->comment('Durumu');
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
        Schema::dropIfExists('tanim_dil');
    }
}
