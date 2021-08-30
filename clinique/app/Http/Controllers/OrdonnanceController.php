<?php

namespace App\Http\Controllers;

use App\Ordonnance;
use App\Patient;
use Illuminate\Http\Request;

class OrdonnanceController extends Controller
{
    public function index(){
        $ordonnances = Ordonnance::all();
        return view('/Ordonnance',compact('ordonnances','ordonnances'));
    }

    public function formulaire($id){
        $patient = Patient::findOrFail($id);
        return view('Ordonnance',[
            'id'=> $id,
            'nomp'=>$patient->nomp,
            'prenomp'=>$patient->prenomp,
            'age'=>$patient->age,
        ]);
        return view('/Ordonnance');
    }
    public function traitement(Request $request){
        Ordonnance::create([
            'nomp' => $request->nomp,
            'prenomp' =>$request->prenomp,
            'age' =>$request->age,
            'sexe' =>$request->sexe,
            'produits' =>$request->produits,
            'patient_id'=>$request->patient_id,

        ]);
        return view('/Medecin')->with('success', 'Ordonnance prescrit avec succès');
    }
}
