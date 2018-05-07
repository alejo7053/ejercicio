<?php

namespace Exercise;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'lastname', 'mobile', 'telephone', 'role',
        'identification'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeSearch($query, $search){
        return $query->where('name','LIKE',"%$search%")
        ->orWhere('mobile','LIKE',"%$search%")
        ->orWhere('telephone','LIKE',"%$search%")
        ->orWhere('identification','LIKE',"%$search%")
        ->orWhere('role','LIKE',"%$search%");;
    }
}
