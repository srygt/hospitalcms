<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class Kurslar extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_kurslar';
    protected $fillable = [
        Kurslar::COLUMN_ID,
        Kurslar::COLUMN_IKID,
        Kurslar::COLUMN_KURS,
        Kurslar::COLUMN_KURUM,
        Kurslar::COLUMN_BASAYI,
        Kurslar::COLUMN_BASYILI,
        Kurslar::COLUMN_BITAYI,
        Kurslar::COLUMN_BITYILI,
        Kurslar::COLUMN_TANIM,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_KURS           = 'kurs';    
    const COLUMN_KURUM          = 'kurum';    
    const COLUMN_BASAYI         = 'baslangicayi';     
    const COLUMN_BASYILI        = 'baslangicyili';   
    const COLUMN_BITAYI         = 'bitisayi';     
    const COLUMN_BITYILI        = 'bitisyili';     
    const COLUMN_TANIM          = 'tanim';
}
