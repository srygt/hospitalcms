<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorOdulDerece;

class CreateDoktorOldulDerece extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktor_oldul_derece', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(DoktorOdulDerece::COLUMN_DOKTORID)->unsigned()->index();
            $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
            $table->string(DoktorOdulDerece::COLUMN_ODULADI)->required()->comment('Ödül Derece Alanı');
            $table->char(DoktorOdulDerece::COLUMN_DILID,2)->nullable();
            $table->integer(DoktorOdulDerece::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_oldul_derece');
    }
}
