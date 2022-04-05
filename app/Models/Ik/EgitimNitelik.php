<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class EgitimNitelik extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_egitim_ve_nitelikler';
    protected $fillable = [
        EgitimNitelik::COLUMN_ID,
        EgitimNitelik::COLUMN_IKID,
        EgitimNitelik::COLUMN_DERECE,
        EgitimNitelik::COLUMN_SEHIR,
        EgitimNitelik::COLUMN_OKUL,
        EgitimNitelik::COLUMN_BASAYI,
        EgitimNitelik::COLUMN_BASYILI,
        EgitimNitelik::COLUMN_BITAYI,
        EgitimNitelik::COLUMN_BITYILI,
        EgitimNitelik::COLUMN_TANIM,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_DERECE         = 'derece';    
    const COLUMN_SEHIR          = 'sehir';    
    const COLUMN_OKUL           = 'okul';    
    const COLUMN_BASAYI         = 'baslangicayi';     
    const COLUMN_BASYILI        = 'baslangicyili';   
    const COLUMN_BITAYI         = 'bitisayi';     
    const COLUMN_BITYILI        = 'bitisyili';     
    const COLUMN_TANIM          = 'tanim';   // Dil ID

}
