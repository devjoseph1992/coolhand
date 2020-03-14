<?php

namespace App;

use illuminate\Notifications\Notifiable;
use illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $fillable = [
        'name','email','password',
    ],
    protected $hidden = [
        'password','remember_token',
    ],
}
