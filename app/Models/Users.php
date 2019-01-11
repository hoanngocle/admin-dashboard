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

    /**
     * return username of user
     *
     * @return string
     */
    public function getUsername()
    {
        $nickname = Sentinel::getUser()->nickname;
        if ($nickname == '') {
            $nickname = Sentinel::getUser()->getUserLoginName();
        }

        return $nickname;
    }

    /**
     * return username of user
     *
     * @return string
     */
    public function getAvatar()
    {
        $avatar = Sentinel::getUser()->avatar;
        if ($avatar == '') {
            $avatar = 'user-default.jpg';
        }

        return $avatar;
    }
}
