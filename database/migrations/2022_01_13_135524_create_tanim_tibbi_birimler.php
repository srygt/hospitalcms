<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimTibbiBirimler;

class CreateTanimTibbiBirimler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_tibbi_birimler', function (Blueprint $table) {
            $table->id();
            $table->string(TanimTibbiBirimler::COLUMN_URL)->required()->comment('URL')->unique();
            $table->longText(TanimTibbiBirimler::COLUMN_ACIKLAMA)->nullable();
            $table->string(TanimTibbiBirimler::COLUMN_RESIM)->nullable()->default(NULL);
            $table->char(TanimTibbiBirimler::COLUMN_DILID,2)->nullable();
            $table->string(TanimTibbiBirimler::COLUMN_BIRIMADI)->required()->comment('Başlık')->unique();
            $table->integer(TanimTibbiBirimler::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_tibbi_birimler');
    }
}
