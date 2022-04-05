<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimPolitikalar;

class CreateTanimPolitikalar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_politikalar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(TanimPolitikalar::COLUMN_KATID)->unsigned()->index();
            $table->foreign('kategoriid')->references('id')->on('tanim_kategori_politikalar')->onDelete('cascade');            
            $table->string(TanimPolitikalar::COLUMN_POLITIKAADI)->required()->comment('Politika Alanı');
            $table->string(TanimPolitikalar::COLUMN_POLITIKAURL)->required()->comment('Url');
            $table->longText(TanimPolitikalar::COLUMN_ACIKLAMA)->nullable();
            $table->bigInteger(TanimPolitikalar::COLUMN_HASTANEID)->unsigned()->index();
            $table->char(TanimPolitikalar::COLUMN_DILID,2)->nullable();
            $table->integer(TanimPolitikalar::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_politikalar');
    }
}
