<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

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
    public function redirectTo(){
       /* $medecin = User::where('profile','1')->get();
        $infirmière = User::where('profile','2')->get();
        $pharmacien = User::where('profile','3')->get();
        $caissier = User::where('profile','4')->get();*/
        if(Auth::user()->profil ==('Medecin')){
            return  redirect()->view('/Medecin');
        }elseif(Auth::user()->profil ==('Infirmière')){
            return redirect()->view('/Infirmière');
        }elseif(Auth::user()->profil ==('Pharmacien')){
            return redirect()->view('/Pharmacien');
        }
        elseif(Auth::user()->profil==('Caissier')){
            return redirect()->view('/Caissier ');
        }else{
            return redirect()->view('/Page_connexionU');
        }
    }
}
