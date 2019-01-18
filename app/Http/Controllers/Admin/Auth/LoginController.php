<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use Sentinel;

class LoginController extends Controller
{
    /**
     * @var \App\Repositories\User\UserRepository
     */
    protected $userRepository;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        \App\Repositories\User\UserRepository $userRepository
    ) {
        $this->userRepository = $userRepository;
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * content html page login
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.auth.login');
    }

    /**
     * login function
     * @param Login $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function processLogin(Login $request)
    {
        // test contribute
        try {
            $remember = (boolean) $request->get('remember');
            if (Sentinel::authenticate($request->all(), $remember)) {
                // update to table
                if ($this->userRepository->recordLoginLogout()) {
                    return redirect()->intended($this->redirectTo);
                } else {
                    $err = __('auth.login_failed');
                }
            } else {
                $err = __('auth.login_failed');
            }
        } catch (NotActivatedException $e) {
            $err = __('auth.login_not_active');
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $err = __('auth.login_throttle', ['second' => $delay]);
        }
        return redirect()->back()
            ->withInput()
            ->with('err', $err);
    }

    /**
     * Destroy all sessions for the current logged in user
     *
     */
    public function logout()
    {
        $this->userRepository->recordLoginLogout(false);
        Sentinel::logout(null, true);

        return redirect()->route('auth.login.form')->withErrors(__('auth.logout_msg'));
    }
}
