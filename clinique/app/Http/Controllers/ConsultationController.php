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
        return view('/Medecin')->with('success', 'Consultation enrégistré avec succès');
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

    public function doss($id){

        $patient_id = '$patient_id';
        //$patient =Patient::findOrFail($id);
        $patient_consult_trait = DB::table('patients')
        ->join('consultations', 'patients.id', '=', 'consultations.id')
        ->join('traitements','patients.id', '=', 'traitements.id')
        ->select('patients.nomp','patients.prenomp','patients.sexe','patients.profession','patients.tel','patients.nationalite','patients.maladiepart'
        ,'patients.adressep','patients.allergie','patients.Email','patients.temperature','patients.poids','patients.tension','patients.pouls','patients.taille','patients.groupage','consultations.motifconsul'
        ,'consultations.dateconsult','consultations.modevie','consultations.diagnostic','consultations.conduite','traitements.libelletrait','traitements.date_trait','traitements.auteur')
        ->where('patients.id', '=' ,$patient_id)
        ->get();
        //$patient =Patient::findOrFail($id);
        dd( $patient_consult_trait);
       // $pdf = PDF::loadView('Dossier', ['patient'=>$patient_consult_trait]) ->setPaper('a4', 'landscape');
        //return $pdf->stream();
}



}
