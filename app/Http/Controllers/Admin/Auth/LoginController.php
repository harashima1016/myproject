



<?php

// namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

/**
 * From app/Http/Controllers/Auth/LoginController.php
 */


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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');

    }

    // http://www.84kure.com/blog/2016/06/06/laravel-5-3%E3%81%A7multi-auth%E3%82%92%E4%BD%BF%E3%81%86/

    public function showLoginForm()
    {
        return view('admin.auth.login'); //管理者ログインページのテンプレート
    }

    protected function guard()
    {
        return Auth::guard('admin'); //管理者認証のguardを指定
    }

}
