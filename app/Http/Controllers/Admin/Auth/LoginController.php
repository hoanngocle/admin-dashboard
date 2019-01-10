<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Login;
use Sentinel;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

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
    public function __construct()
    {
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
        try {
            $remember = (boolean) $request->get('remember');
            if (Sentinel::authenticate($request->all(), $remember)) {
                // update to table

                return redirect()->intended($this->redirectTo);
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
        Sentinel::logout(null, true);

        return redirect()->route('auth.login.form')->withErrors(__('auth.logout_msg'));
    }
}
