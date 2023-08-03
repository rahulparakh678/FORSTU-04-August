<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
    {
        if ( Auth::check() && Auth::user()->user_type=='student' ) {// do your magic here
           return redirect(RouteServiceProvider::STUDENT);
        }
        elseif (Auth::check() && Auth::user()->user_type=='provider' ) {
            # code...
            return redirect(RouteServiceProvider::PROVIDER);
        }
        elseif (Auth::check() && Auth::user()->user_type=='sfcngo' ) {
            # code...
            return redirect(RouteServiceProvider::SFCNGO);
        }
        elseif (Auth::check() && Auth::user()->user_type=='college_society' ) {
            # code...
            return redirect(RouteServiceProvider::SFCSOCIETY);
        }
        
        else{
            return redirect(RouteServiceProvider::HOME);
            
        }

        
    }
}
