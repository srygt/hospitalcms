<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class Ik extends Model
{
    protected $dates    = ['created_at', 'updated_at'];
    protected $table    = 'ik';    
    protected $fillable = [
        Ik::COLUMN_BOLUMID,
        Ik::COLUMN_BASTIPID,
        Ik::COLUMN_ADI,
        Ik::COLUMN_SOYADI,
        Ik::COLUMN_SEHIR,
        Ik::COLUMN_EMAIL,
        Ik::COLUMN_TELEFON,
        Ik::COLUMN_ADRES,
        Ik::COLUMN_PKODU,
        Ik::COLUMN_GUN,
        Ik::COLUMN_AY,
        Ik::COLUMN_YIL,
        Ik::COLUMN_DYERI,
        Ik::COLUMN_EHLIYET,
        Ik::COLUMN_CINSIYET,
        Ik::COLUMN_ASKERLIK,
        Ik::COLUMN_MDURUMU,
        Ik::COLUMN_LINKEDIN,
        Ik::COLUMN_WEBSITE,
        Ik::COLUMN_PROFILI,
        Ik::COLUMN_BASARILARI,
        Ik::COLUMN_YAYINLAR,
        Ik::COLUMN_OZELBOLUM,
        Ik::COLUMN_KVKK,
        Ik::COLUMN_RESIM,
        Ik::COLUMN_DURUMU,
    ];
    const COLUMN_BOLUMID        = 'bolumid';    
    const COLUMN_BASTIPID       = 'basvurutipi';    
    const COLUMN_ADI            = 'adi';    
    const COLUMN_SOYADI         = 'soyadi';    
    const COLUMN_EMAIL          = 'email';    
    const COLUMN_TELEFON        = 'telefon';    
    const COLUMN_ADRES          = 'adres';     
    const COLUMN_PKODU          = 'postakodu';   
    const COLUMN_SEHIR          = 'sehir';     
    const COLUMN_GUN            = 'gun';     
    const COLUMN_AY             = 'ay';
    const COLUMN_YIL            = 'yil';
    const COLUMN_DYERI          = 'dogumyeri';
    const COLUMN_EHLIYET        = 'ehliyet';
    const COLUMN_CINSIYET       = 'cinsiyet';
    const COLUMN_ASKERLIK       = 'askerlik';
    const COLUMN_MDURUMU        = 'medenidurumu';
    const COLUMN_LINKEDIN       = 'linkedin';
    const COLUMN_WEBSITE        = 'website';
    const COLUMN_PROFILI        = 'profili';
    const COLUMN_BASARILARI     = 'basarilari';
    const COLUMN_YAYINLAR       = 'yayinlar';
    const COLUMN_OZELBOLUM      = 'ozelbolum';
    const COLUMN_KVKK           = 'kvkk';
    const COLUMN_RESIM          = 'resim';
    const COLUMN_DURUMU         = 'durumu';
}
