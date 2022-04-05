<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class Diller extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_diller';

    protected $fillable = [
        Diller::COLUMN_ID,
        Diller::COLUMN_IKID,
        Diller::COLUMN_DIL,
        Diller::COLUMN_SEVIYE,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_DIL            = 'dil';  
    const COLUMN_SEVIYE         = 'seviye';  
}
