<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class Beceriler extends Model
{
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    protected $table    = 'ik_beceriler';
    protected $fillable = [
        Beceriler::COLUMN_ID,
        Beceriler::COLUMN_IKID,
        Beceriler::COLUMN_BECERI,
        Beceriler::COLUMN_SEVIYE,
    ];

    const COLUMN_ID             = 'id';
    const COLUMN_IKID           = 'ikid';    
    const COLUMN_BECERI         = 'beceri';    
    const COLUMN_SEVIYE         = 'seviye'; 
}
