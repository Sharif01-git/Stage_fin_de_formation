<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Traitement;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    public function index(){
        $traitements = Traitement::all();
        return view('/Traitement',compact('traitements','traitements'));
    }

    public function formulaire($id){
        $patient = Patient::findOrFail($id);
        return view('Traitement',[
            'id'=> $id,
            'nomp'=>$patient->nomp,
            'prenomp'=>$patient->prenomp,
        ]);
        return view('/Traitement');
    }
    public function traitement(Request $request){
        Traitement::create([
            'libelletrait' => $request->libelletrait,
            'nomp'=> $request->nomp,
            'prenomp'=> $request->prenomp,
            'date_trait' =>$request->date_trait,
            'auteur' =>$request->auteur,
            'patient_id'=>$request->patient_id,


        ]);
        return view('/Medecin')->with('success', 'Traitement enrégistré avec succès');
    }
}
