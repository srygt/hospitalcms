<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\SiteMenu;

class CreateSiteMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_menu', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(SiteMenu::COLUMN_HASTANEID)->unsigned()->index();
            $table->foreign('hastaneid')->references('id')->on('tanim_hastane')->onDelete('cascade');            
            $table->string(SiteMenu::COLUMN_BASLIK)->required()->comment('Başlık Alanı');
            $table->string(SiteMenu::COLUMN_URL)->required()->comment('Url Alanı');
            $table->bigInteger(SiteMenu::COLUMN_USTMENUID)->nullable()->default(0);
            $table->char(SiteMenu::COLUMN_DILID,2)->nullable();
            $table->integer(SiteMenu::COLUMN_DURUMU)->required()->default(1);
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
        Schema::dropIfExists('site_menu');
    }
}
