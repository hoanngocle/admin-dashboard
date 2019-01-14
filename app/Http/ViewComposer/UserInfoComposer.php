<?php
/**
 * Created by PhpStorm.
 * User: hoanc
 * Date: 1/14/2019
 * Time: 2:15 PM
 */

namespace App\Http\ViewComposer;

use Illuminate\View\View;

class UserInfoComposer
{
    protected $avatar;

    protected $nickname;

    protected $userRepository;

    public function __construct(
        \App\Repositories\User\UserRepository $userRepository
    ) {
        $this->avatar   = $userRepository->getAvatar();
        $this->nickname = $userRepository->getUsername();
    }

    public function compose(View $view)
    {
        $view->with('currentAvatar', $this->avatar);
        $view->with('currentNickname', $this->nickname);
    }
}
