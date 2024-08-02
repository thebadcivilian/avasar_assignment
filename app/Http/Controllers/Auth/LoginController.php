<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {

        $user = auth()->user();
        if ($user == null) {
            Auth::logout();
            return redirect('/');
        } else {
            if ($user->hasRole('admin')) {
                return '/admin/dashboard';
            }
            if ($user->hasRole('agent')) {
                return '/myaccount';
            } else {
                return '/login';
            }
        }
    }

    public function logout(Request $request)
    {
        $user = auth()->user();
        Auth::logout();
        if ($user != null && $user->hasRole('admin')) {
            return redirect('/login');
        } else {
            return redirect('/login');
        }

    }
}
