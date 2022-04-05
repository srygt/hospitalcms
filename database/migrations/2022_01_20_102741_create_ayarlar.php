<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Panel\Ayarlar;

class CreateAyarlar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayarlar', function (Blueprint $table) {
            $table->id();
            $table->string(Ayarlar::COLUMN_SITEADI)->required()->comment('Site Adı');
            $table->string(Ayarlar::COLUMN_KEYWORD)->nullable();
            $table->string(Ayarlar::COLUMN_DESC)->nullable()->comment('Description');
            $table->string(Ayarlar::COLUMN_ADRES)->nullable();
            $table->string(Ayarlar::COLUMN_ADRES2)->nullable();
            $table->string(Ayarlar::COLUMN_ADRES3)->nullable();
            $table->tinyInteger(Ayarlar::COLUMN_AKTIF)->required()->default(1);
            $table->string(Ayarlar::COLUMN_APIKEY)->nullable();
            $table->string(Ayarlar::COLUMN_VERIFI)->nullable();
            $table->string(Ayarlar::COLUMN_TELEFON,20)->nullable();
            $table->string(Ayarlar::COLUMN_FAX,20)->nullable();
            $table->string(Ayarlar::COLUMN_GSM,20)->nullable();
            $table->string(Ayarlar::COLUMN_WHATSAPP,20)->nullable();
            $table->string(Ayarlar::COLUMN_EMAIL,75)->nullable();
            $table->string(Ayarlar::COLUMN_WEBSITE,100)->nullable();
            $table->string(Ayarlar::COLUMN_FACEBOOK)->nullable();
            $table->string(Ayarlar::COLUMN_TWITTER)->nullable();
            $table->string(Ayarlar::COLUMN_INSTAGRAM)->nullable();
            $table->string(Ayarlar::COLUMN_YOUTUBE)->nullable();
            $table->string(Ayarlar::COLUMN_RESIM)->nullable();
            $table->string(Ayarlar::COLUMN_ERANDEVU)->nullable()->default(NULL);
            $table->string(Ayarlar::COLUMN_ETETKIKSONUC)->nullable()->default(NULL);
            $table->string(Ayarlar::COLUMN_ETETKIKGORUNTU)->nullable()->default(NULL);
            $table->string(Ayarlar::COLUMN_DRTETKIKSONUC)->nullable()->default(NULL);
            $table->string(Ayarlar::COLUMN_ISBASVURU)->nullable()->default(NULL);
            $table->string(Ayarlar::COLUMN_DOKTORBUL)->nullable()->default(NULL);
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
        Schema::dropIfExists('ayarlar');
    }
}
