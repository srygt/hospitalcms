<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Doktor\DoktorBilimselYayinlar;

class CreateDoktorBilimselYayinlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktor_bilimsel_yayinlar', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(DoktorBilimselYayinlar::COLUMN_DOKTORID)->unsigned()->index();
            $table->foreign('doktorid')->references('id')->on('doktorlar')->onDelete('cascade');            
            $table->char(DoktorBilimselYayinlar::COLUMN_DILID,2)->nullable()->default('tr');
            $table->string(DoktorBilimselYayinlar::COLUMN_YAYINADI)->required()->comment('Bilimsel Yayınlar Alanı');
            $table->longText(DoktorBilimselYayinlar::COLUMN_ACIKLAMA)->nullable();
            $table->integer(DoktorBilimselYayinlar::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('doktor_bilimsel_yayinlar');
    }
}
