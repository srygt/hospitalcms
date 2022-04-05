<?php

use App\Models\Ik\IkBolum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIkBolumler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ik_bolumler', function (Blueprint $table) {
            $table->id();
            $table->string(IkBolum::COLUMN_BOLUMADI)->required();          
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
        Schema::dropIfExists('ik_bolumler');
    }
}
