<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class IsDeneyimi extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_is_deneyimi';

    protected $fillable = [
        IsDeneyimi::COLUMN_ID,
        IsDeneyimi::COLUMN_IKID,
        IsDeneyimi::COLUMN_ISUNVANI,
        IsDeneyimi::COLUMN_SEHIR,
        IsDeneyimi::COLUMN_ISVEREN,
        IsDeneyimi::COLUMN_BASAYI,
        IsDeneyimi::COLUMN_BASYILI,
        IsDeneyimi::COLUMN_BITAYI,
        IsDeneyimi::COLUMN_BITYILI,
        IsDeneyimi::COLUMN_TANIM,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_ISUNVANI       = 'isunvani';    
    const COLUMN_SEHIR          = 'sehir';    
    const COLUMN_ISVEREN        = 'isveren';    
    const COLUMN_BASAYI         = 'baslangicayi';     
    const COLUMN_BASYILI        = 'baslangicyili';   
    const COLUMN_BITAYI         = 'bitisayi';     
    const COLUMN_BITYILI        = 'bitisyili';     
    const COLUMN_TANIM          = 'tanim';
}
