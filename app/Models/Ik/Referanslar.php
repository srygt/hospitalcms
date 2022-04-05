<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class Referanslar extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_referanslar';

    protected $fillable = [
        Referanslar::COLUMN_ID,
        Referanslar::COLUMN_IKID,
        Referanslar::COLUMN_SIRKETADI,
        Referanslar::COLUMN_ILETISIMKISI,
        Referanslar::COLUMN_TELEFON,
        Referanslar::COLUMN_EMAIL,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_SIRKETADI      = 'sirket';    
    const COLUMN_ILETISIMKISI   = 'kisi';    
    const COLUMN_TELEFON        = 'telefon';   
    const COLUMN_EMAIL          = 'email';   
}
