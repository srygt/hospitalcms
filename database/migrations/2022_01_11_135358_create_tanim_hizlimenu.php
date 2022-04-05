<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\TanimHizliMenu;

class CreateTanimHizlimenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_hizlimenu', function (Blueprint $table) {
            $table->id();
            $table->string(TanimHizliMenu::COLUMN_BASLIK)->required()->comment('Başlık')->unique();
            $table->char(TanimHizliMenu::COLUMN_DILID,2)->nullable();
            $table->bigInteger(TanimHizliMenu::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');
            $table->string(TanimHizliMenu::COLUMN_LINK)->nullable();
            $table->string(TanimHizliMenu::COLUMN_IKON)->nullable();
            $table->integer(TanimHizliMenu::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_hizlimenu');
    }
}
