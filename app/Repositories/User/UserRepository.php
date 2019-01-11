<?php
/**
 * Created by PhpStorm.
 * User: hoanc
 * Date: 1/11/2019
 * Time: 2:34 PM
 */

namespace App\Repositories\User;

use Sentinel;
use App\Models\Users;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * @return model
     */
    public function model()
    {
        return Users::class;
    }

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
