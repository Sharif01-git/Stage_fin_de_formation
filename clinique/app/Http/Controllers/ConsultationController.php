<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultationController extends Controller
{
    public function index(){
        $consultations = Consultation::all();
        return view('/Consultation',compact('consultations','consultations'));


    }

    public function formulaire($id){
        //$patient_id = ($id);
        $patient = Patient::findOrFail($id);

        //dd($patient);
        return view('Consultation',[
            'id'=> $id,
            'nomp'=>$patient->nomp,
            'prenomp'=>$patient->prenomp,
            'allergie'=>$patient->allergie,
            'maladiepart'=>$patient->maladiepart,
        ]);
    }
    public function traitement(Request $request){
        Consultation::create([
            'nomp'=> $request->nomp,
            'prenomp'=> $request->prenomp,
            'motifconsul' => $request->motifconsul,
            'dateconsult'=>$request->dateconsult,
            'maladiepart' =>$request->maladiepart,
            'allergie' =>$request->allergie,
            'sexe' =>$request->sexe,
            'modevie' =>$request->modevie,
            'histoire' =>$request->histoire,
            'diagnostic' =>$request->diagnostic,
            'conduite' =>$request->conduite,
            'patient_id'=>$request->patient_id,
        ]);
        return redirect()->route('listeM1')->with('success', 'Consultation enrégistré avec succès');
    }
    public function edit(Consultation $consultation){
        //$patients = Patient::findOrFail($patient);
        return view('ConsultationModif')->with('consultation',$consultation);
    }

    public function update(Request $request, Consultation $consultation){
        $consultation->update([
            'nomp'=> $request->nomp,
            'prenomp'=> $request->prenomp,
            'motifconsul' => $request->motifconsul,
            'dateconsult'=>$request->dateconsult,
            'maladiepart' =>$request->maladiepart,
            'allergie' =>$request->allergie,
            'sexe' =>$request->sexe,
            'modevie' =>$request->modevie,
            'histoire' =>$request->histoire,
            'diagnostic' =>$request->diagnostic,
            'conduite' =>$request->conduite,
            'patient_id'=>$request->patient_id,

        ]);
        return redirect()->route('listeM1')->with('success', 'Consultation Modifié avec succès');
    }





}
