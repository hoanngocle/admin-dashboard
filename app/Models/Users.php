<?php

namespace App\Models;

use Sentinel;
use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser as CartalystUser;

class Users extends CartalystUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'username',
        'password',
        'remember'
    ];

    protected $loginNames = [
        'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
