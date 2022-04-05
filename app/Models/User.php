<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable, HasRoles;
    
    //İlişkimizi oluşturuyoruz.
    public function role() {
        return $this->belongsTo('App\Role');
    }

    //Oluşturacağımız middlewarede kullanacağımız metodumuz.
    public function hasRole($role) {
        return true ? $this->role->name == $role : false;
    }

    /**
     * @var string $table
     */
    protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'status',
        ''
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @var bool $timestamps
     */
    public $timestamps = false;
}
