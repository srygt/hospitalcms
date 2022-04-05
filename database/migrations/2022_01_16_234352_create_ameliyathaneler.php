<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Ameliyathaneler;

class CreateAmeliyathaneler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ameliyathaneler', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(Ameliyathaneler::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');            
            $table->string(Ameliyathaneler::COLUMN_AMELIYATHANEADI)->required()->comment('Ameliyathane Alanı');
            $table->string(Ameliyathaneler::COLUMN_URL)->required()->comment('Url');
            $table->string(Ameliyathaneler::COLUMN_RESIM)->nullable()->comment('Resim Alanı');
            $table->string(Ameliyathaneler::COLUMN_VIDEO)->nullable()->comment('Video Alanı');
            $table->longText(Ameliyathaneler::COLUMN_ACIKLAMA)->nullable()->comment('Açıklama Alanı');
            $table->char(Ameliyathaneler::COLUMN_DILID,2)->nullable();
            $table->integer(Ameliyathaneler::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('ameliyathaneler');
    }
}
