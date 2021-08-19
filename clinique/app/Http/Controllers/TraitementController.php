<?php

namespace App\Http\Controllers;

use App\Traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    public function index(){
        $traitements = Traitement::all();
        return view('/FormulaireI/FormulaireI3',compact('traitements','traitements'));
    }

    public function formulaire(){
        return view('/Traitement');
    }
    public function traitement(Request $request){
        Traitement::create([
            'libelletrait' => $request->libelletrait,
            'date_trait' =>$request->date_trait,
            'auteur' =>$request->auteur,


        ]);
        return view('/Medecin')->with('success', 'Traitement enrégistré avec succès');
    }
}
