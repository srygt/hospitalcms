<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorEgitim;

class CreateDoktorEgitim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('doktor_egitim', function (Blueprint $table) {
                $table->id();
                $table->bigInteger(DoktorEgitim::COLUMN_DOKTORID)->unsigned()->index();
                $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
                $table->string(DoktorEgitim::COLUMN_EGITIMADI)->required()->comment('Eğitim Alanı');
                $table->string(DoktorEgitim::COLUMN_EGITIMYILI)->required()->comment('Ödül Derece Alanı');
                $table->string(DoktorEgitim::COLUMN_UNVERSITE)->nullable();
                $table->string(DoktorEgitim::COLUMN_SEHIR)->nullable();
                $table->char(DoktorEgitim::COLUMN_DILID,2)->nullable();
                $table->integer(DoktorEgitim::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_egitim');
    }
}
