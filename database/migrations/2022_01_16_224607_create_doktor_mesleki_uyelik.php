<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorMeslekiUyelik;

class CreateDoktorMeslekiUyelik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktor_mesleki_uyelik', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(DoktorMeslekiUyelik::COLUMN_DOKTORID)->unsigned()->index();
            $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
            $table->string(DoktorMeslekiUyelik::COLUMN_UYELIKADI)->required()->comment('Mesleki Üyelik Alanı');
            $table->char(DoktorMeslekiUyelik::COLUMN_DILID,2)->nullable();
            $table->integer(DoktorMeslekiUyelik::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_mesleki_uyelik');
    }
}
