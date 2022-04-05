<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorKursKonferans;

class CreateDoktorKurslarKonferanslar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktor_kurslar_konferanslar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(DoktorKursKonferans::COLUMN_DOKTORID)->unsigned()->index();
            $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
            $table->string(DoktorKursKonferans::COLUMN_KURSADI)->required()->comment('Kurslar ve Konferanslar Alanı');
            $table->char(DoktorKursKonferans::COLUMN_DILID,2)->nullable();
            $table->integer(DoktorKursKonferans::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_kurslar_konferanslar');
    }
}
