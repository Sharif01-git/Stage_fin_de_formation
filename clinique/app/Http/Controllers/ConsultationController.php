<?php

namespace App\Http\Controllers;

use App\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index(){
        $consultations = Consultation::all();
        return view('/FormulaireI/FormulaireI3',compact('consultations','consultations'));
    }

    public function formulaire(){
        return view('/Consultation');
    }
    public function traitement(Request $request){
        Consultation::create([
            'motifconsul' => $request->motifconsul,
            'dateconsult'=>$request->dateconsult,
            'maladiepart' =>$request->maladiepart,
            'allergie' =>$request->allergie,
            'sexe' =>$request->sexe,
            'modevie' =>$request->modevie,
            'histoire' =>$request->histoire,
            'diagnostic' =>$request->diagnostic,
            'conduite' =>$request->conduite,
        ]);
        return view('/Medecin')->with('success', 'Consultation enrégistré avec succès');
    }
}
