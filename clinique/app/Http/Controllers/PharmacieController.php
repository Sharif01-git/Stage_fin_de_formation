<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    public function index(){
        return view('/Pharmacie');
    }
}
