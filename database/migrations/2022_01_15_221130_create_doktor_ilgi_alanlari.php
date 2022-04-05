<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorIlgiAlanlari;

class CreateDoktorIlgiAlanlari extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktor_ilgi_alanlari', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(DoktorIlgiAlanlari::COLUMN_DOKTORID)->unsigned()->index();
            $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
            $table->string(DoktorIlgiAlanlari::COLUMN_ALANADI)->required()->comment('İlgi Alanı');
            $table->char(DoktorIlgiAlanlari::COLUMN_DILID,2)->nullable();
            $table->integer(DoktorIlgiAlanlari::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_ilgi_alanlari');
    }
}
