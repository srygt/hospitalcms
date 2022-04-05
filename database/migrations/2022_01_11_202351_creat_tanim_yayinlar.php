<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Tanim\TanimYayinlar;

class CreatTanimYayinlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanim_yayinlar', function (Blueprint $table) {
            $table->id();
            $table->string(TanimYayinlar::COLUMN_YAYINADI)->required()->comment('Başlık')->unique();
            $table->char(TanimYayinlar::COLUMN_DILID,2)->nullable();
            $table->integer(TanimYayinlar::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('tanim_yayinlar');
    }
}
