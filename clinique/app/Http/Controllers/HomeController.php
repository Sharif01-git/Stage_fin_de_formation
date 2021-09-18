<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Ordonnance;
use App\Traitement;
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
        return view('home');
     }
    
}
