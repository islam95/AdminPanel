<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'isActive',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function isAdmin()
    {
        if ($this->role->name == 'Administrator' && $this->isActive == 1){
            return true;
        }
        return false;
    }

}
