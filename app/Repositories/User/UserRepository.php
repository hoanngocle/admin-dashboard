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
        $nickname = 'user-default';
        if (Sentinel::check()) {
            $nickname = Sentinel::getUser()->nickname ? '' : Sentinel::getUser()->getUserLoginName();
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
        $avatar = 'user-default.jpg';
        if (Sentinel::check()) {
            $avatar = Sentinel::getUser()->avatar ?? 'user-default.jpg';
        }

        return $avatar;
    }

    /**
     * update status + log_num when login logout
     *
     * @return string
     */
    public function recordLoginLogout($isLogin = true)
    {
        $user = $this->find(Sentinel::getUser()->id);
        if ($isLogin) {
            $user->log_num      = $user->log_num + 1;
            $user->is_online    = 'Online';
        } else {
            $user->is_online    = 'Offline';
        }

        try {
            $user->save();
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
}
