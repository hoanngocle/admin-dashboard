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

//    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.pages.auth.login');
    }

    public function username()
    {
        return 'username';
    }

    public function processLogin(Login $request)
    {
        try {
            if (Sentinel::authenticate($request->all())) {
                return redirect()->intended($this->redirectTo);
            } else {
                $err = "Tên đăng nhập hoặc mật khẩu không đúng!";
            }
        } catch (NotActivatedException $e) {
            $err = "Tài khoản của bạn chưa được kích hoạt";
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            $err = "Tài khoản của bạn bị block trong vòng {$delay} sec";
        }
        return redirect()->back()
            ->withInput()
            ->with('err', $err);
    }
}
