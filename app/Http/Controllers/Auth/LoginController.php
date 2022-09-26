<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;


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

    protected function credentials(Request $request)
    {
        return ['email' => $request->email, 'password' => $request->password];   
    }

    /**
     * fucntion for redirect user on the basis of their roles 
    */
    protected function redirectTo()
    {
        if (auth()->user()->user_type == config('role.ROLES.ADMIN.ROLE')) {
            return route('admin.dashboard');
        } elseif (auth()->user()->user_type == config('role.ROLES.SUBADMIN.ROLE')) {
            return route('profile');
        } elseif (auth()->user()->user_type == config('role.ROLES.CUSTOMER.ROLE')) {
            return route('profile');
        } else{
            return route('profile');
        }
    }




}
