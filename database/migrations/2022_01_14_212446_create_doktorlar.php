<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\Doktorlar;

class CreateDoktorlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktorlar', function (Blueprint $table) {
            $table->id();
            $table->string(Doktorlar::COLUMN_DLINK,200)->required()->comment('Doktor Linki');
            $table->string(Doktorlar::COLUMN_DOKTORUNVANI,140)->nullable()->comment('Doktor Ünvanı');
            $table->string(Doktorlar::COLUMN_DOKTORADI,140)->required()->comment('Doktor Adı Soyadı');
            $table->string(Doktorlar::COLUMN_DOGUMYERI,30)->nullable();
            $table->date(Doktorlar::COLUMN_DOGUMTARIHI)->nullable();
            $table->string(Doktorlar::COLUMN_CINSIYETI,5)->nullable();
            $table->string(Doktorlar::COLUMN_TELNO,20)->nullable();
            $table->string(Doktorlar::COLUMN_EMAIL,75)->nullable();
            $table->string(Doktorlar::COLUMN_WEBSITE,100)->nullable();
            $table->longText(Doktorlar::COLUMN_OZGECMIS)->nullable();
            $table->string(Doktorlar::COLUMN_RESIM)->nullable();
            $table->bigInteger(Doktorlar::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');
            $table->bigInteger(Doktorlar::COLUMN_ALANI)->unsigned()->index();
            $table->string(Doktorlar::COLUMN_FACEBOOK,155)->nullable();
            $table->string(Doktorlar::COLUMN_INSTAGRAM,40)->nullable();
            $table->string(Doktorlar::COLUMN_TWITTER,40)->nullable();
            $table->string(Doktorlar::COLUMN_LINKEDIN,40)->nullable();
            $table->string(Doktorlar::COLUMN_PUAN,11)->nullable();
            $table->integer(Doktorlar::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktorlar');
    }
}
