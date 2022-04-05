<?php

namespace App\Models\Ik;

use Illuminate\Database\Eloquent\Model;

class IkBolum extends Model
{
    protected $dates    = ['created_at', 'updated_at'];
    protected $table    = 'ik_bolumler';    
    protected $fillable = [
        IkBolum::COLUMN_ID,
        IkBolum::COLUMN_BOLUMADI,
    ];
    const COLUMN_ID             = 'id';    
    const COLUMN_BOLUMADI       = 'bolumadi';      
}
