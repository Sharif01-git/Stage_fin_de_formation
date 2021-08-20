<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liste(){
        $users = User::all();
        return view('/FormulaireA/FormulaireA2',compact('users','users'));
    }
    public function index()
    {

         Auth::user();
        return view('/Infirmière');
         /*if($user->profil ==('Medecin')){
             return  view('/Medecin');
         }elseif(Auth::user()->profil ==('Infirmière')){
             return view('/Infirmière');
         }elseif(Auth::user()->profil ==('Pharmacien')){
             return view('/Pharmacien');
         }
         elseif(Auth::user()->profil==('Caissier')){
             return view('/Caissier ');
         }else{
             return view('/Page_connexionU');
         }*/
     }
}
