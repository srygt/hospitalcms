<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\FotoGaleriResim;

class CreateFotoGaleriResimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_galeri_resims', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(FotoGaleriResim::COLUMN_GALERIID)->unsigned()->index();
            $table->foreign('galeriid')->references('id')->on('foto_galeris')->onDelete('cascade');
            $table->string(FotoGaleriResim::COLUMN_IMAGES)->required();
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
        Schema::dropIfExists('foto_galeri_resims');
    }
}
