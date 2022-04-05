<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class IlgiAlanlari extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_ilgi_alanlari';

    protected $fillable = [
        IlgiAlanlari::COLUMN_ID,
        IlgiAlanlari::COLUMN_IKID,
        IlgiAlanlari::COLUMN_ILGIALANI,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_ILGIALANI      = 'ilgialani';    

}
