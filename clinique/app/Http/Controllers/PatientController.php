<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Ordonnance;
use App\Patient;
use App\Rendezvous;
use App\Traitement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use telesign\sdk\messaging\MessagingClient;
use Carbon\Carbon;


class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view('/FormulaireI/FormulaireI3',compact('patients','patients'));
    }
    public function liste(){
        $patients = Patient::all();
        return view('/FormulaireM/FormulaireM5',compact('patients','patients'));
    }
    public function listeM(){
        $patients = Patient::all();
        return view('/FormulaireM/liste',compact('patients','patients'));
    }
    public function listeRM(){
        $rendezvous = Rendezvous::all();
        return view('ListeRM',compact('rendezvous'));
    }
    public function listeRI(){
        $rendezvou = Rendezvous::all();
        return view('ListeRI',compact('rendezvou'));
    }


    public function voir()
    {
        $listerends = Rendezvous::all();
       $trait = Traitement::all();
       $consult = Consultation::all();
       $ord = Ordonnance::all();
        return view('Medecin',compact('trait','consult','ord','listerends'));

     }
    public function formulaire(){
        return view('/Patient');
    }
    public function traitement(Request $request){
        Patient::create([
            'nomp' => $request->nomp,
            'prenomp' =>$request->prenomp,
            'age' =>$request->age,
            'sexe' =>$request->sexe,
            'profession' =>$request->profession,
            'tel' =>$request->tel ,
            'nationalite' =>$request->nationalite,
            'maladiepart' =>$request->maladiepart,
            'adressep' =>$request->adressep,
            'allergie' =>$request->allergie,
            'infirmire_id' =>$request,
            'Email'=>$request->Email,
            'temperature'=>$request->temperature,
            'poids'=>$request->poids,
            'tension'=>$request->tension,
            'pouls'=>$request->pouls,
            'taille'=>$request->taille,
            'groupage'=>$request->groupage,

        ]);
        return redirect()->route('Patientlist.index')->with('success', 'Patient enrégistré avec succès');
    }

    public function edit(Patient $patient){
        return view('ModifPa')->with('patient',$patient);
    }

    public function update(Request $request, Patient $patient){
        $patient->update([
            'nomp' => $request->nomp,
            'prenomp' =>$request->prenomp,
            'age' =>$request->age,
            'sexe' =>$request->sexe,
            'profession' =>$request->profession,
            'tel' =>$request->tel,
            'nationalite' =>$request->nationalite,
            'maladiepart' =>$request->maladiepart,
            'adressep' =>$request->adressep,
            'allergie' =>$request->allergie,
            'infirmire_id' =>$request,
            'Email'=>$request->Email,
            'temperature'=>$request->temperature,
            'poids'=>$request->poids,
            'tension'=>$request->tension,
            'pouls'=>$request->pouls,
            'taille'=>$request->taille,
            'groupage'=>$request->groupage,
        ]);
        return redirect()->route('Patientlist.index')->with('success', 'Patient Modifié avec succès');
    }

    public function destroy(Patient $patient){
        $patient->delete();
        return redirect()->route('Patientlist.index')->with('success', 'Patient supprimé avec succès');
    }

    public function rendezvousM($id){
        $patient = Patient::findOrFail($id);

        return view('RendezvousM',[
            'id'=> $id,
            'nomp'=>$patient->nomp,
            'prenomp'=>$patient->prenomp,
            'age'=>$patient->age,
            'sexe' =>$patient->sexe,
            'profession' =>$patient->profession,
            'tel' =>$patient->tel,
            'nationalite' =>$patient->nationalite,
            'adressep' =>$patient->adressep,
            'Email'=>$patient->Email,
            'message'=>$patient->message,
        ]);

    }
    public function traitementr(Request $request){
        Rendezvous::create([
        'nomd'=>$request->nomd,
        'prenomd'=>$request->prenomd,
        'aged'=>$request->aged,
        'professiond'=>$request->professiond,
        'nationalited'=>$request->nationalited,
        'adresse'=>$request->adresse,
        'phone_number'=>$request->phone_number,
        'emaild'=>$request->emaild,
        'sexed'=>$request->sexed,
        'heured'=>$request->heured,
        'dater'=>$request->dater,
        'motifr'=>$request->motifr,

        ]);
        return redirect()->route('listeRM')->with('success', 'Rendez-vous enrégistré avec succès');
    }

    public function rendezvousi(){
        return view('Rendezvous');
    }
    public function traitementir(Request $request){

        Rendezvous::create([
        'nomd'=>$request->nomd,
        'prenomd'=>$request->prenomd,
        'aged'=>$request->aged,
        'professiond'=>$request->professiond,
        'nationalited'=>$request->nationalited,
        'adresse'=>$request->adresse,
        'phone_number' =>$request->phone_number,
        'emaild'=>$request->emaild,
        'sexed'=>$request->sexed,
        'heured'=>$request->heured,
        'dater'=>$request->dater,
        'motifr'=>$request->motifr,
        'message'=>$request->message,

        $customer_id = "1AD41D03-6D72-4A26-9DD2-6A43D541FA1F",
        $api_key = "Mtqcdf6IY0O4CSK4yz0/CgJV9lbaIPtbkl1tZE4d9EFLYieBgwWyKGF323zEHq4loU1lr5Tkat49H3ytvcx58w==",
        $phone_number = "22893072173",
        $message = "Bonjour M. ".$request->nomd." ".$request->prenomd.", vous avez rendez-vous le ".$request->dater." à ".$request->heured." pour un(e) ".$request->motifr." avec le docteur PANA, Merci.",
        $message_type = "ARN",
        $messaging = new MessagingClient($customer_id, $api_key),
        $response = $messaging->message($phone_number, $message, $message_type),

        ]);
        return redirect()->route('listeRI')->with('success', 'Rendez-vous enrégistré avec succès, Message envoyé également avec succès');
    }

    public function editrend(Rendezvous $rendezvou){
        return view('ModifRend')->with('rendezvou',$rendezvou);
    }

    public function updaterend(Request $request, Rendezvous $rendezvou){
        $rendezvou->update([
        'nomd'=>$request->nomd,
        'prenomd'=>$request->prenomd,
        'aged'=>$request->aged,
        'professiond'=>$request->professiond,
        'nationalited'=>$request->nationalited,
        'adresse'=>$request->adresse,
        'phone_number'=>$request->phone_number,
        'emaild'=>$request->emaild,
        'sexed'=>$request->sexed,
        'heured'=>$request->heured,
        'dater'=>$request->dater,
        'motifr'=>$request->motifr,
        ]);
        return redirect()->route('listeRI')->with('success', 'Rendez-vous Modifié avec succès');
    }
    public function editrendM(Rendezvous $rendezvous){
        //$patients = Patient::findOrFail($patient);
        return view('ModifRenM')->with('rendezvous',$rendezvous);
    }

    public function updaterendM(Request $request, Rendezvous $rendezvous){
        $rendezvous->update([
        'nomd'=>$request->nomd,
        'prenomd'=>$request->prenomd,
        'aged'=>$request->aged,
        'professiond'=>$request->professiond,
        'nationalited'=>$request->nationalited,
        'adresse'=>$request->adresse,
        'contact'=>$request->contact,
        'emaild'=>$request->emaild,
        'sexed'=>$request->sexed,
        'heured'=>$request->heured,
        'dater'=>$request->dater,
        'motifr'=>$request->motifr,
        ]);
        return redirect()->route('listeRM')->with('success', 'Rendez-vous Modifié avec succès');
    }
    public function detailsPa($id){
        $detailspa =Patient::findOrFail($id);
        $pdf = PDF::loadView('FormulaireI/DetailsPa', ['patient'=>$detailspa]) ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function detailsRend($id){
        $detailsRend = Rendezvous::findOrFail($id);
       return view('DetailsR',compact('detailsRend'));

    }
    public function detailsRendM($id){
        $detailsRendM = Rendezvous::findOrFail($id);
        return view('DetailsRM',compact('detailsRendM'));

    }

    public function doss($id){
       // $id = request('id');
       // $patient_id = $id;
        $patient =Patient::findOrFail($id);
        $consultation = Consultation::findOrFail($id);
        $traitement = Traitement::findOrFail($id);
       /* $patient_consult_trait = DB::table('patients')
        ->join('consultations', 'patients.id', '=', 'consultations.id')
        ->join('traitements','patients.id', '=', 'traitements.id')
        ->select('patients.nomp','patients.prenomp','patients.age','patients.sexe','patients.profession','patients.tel','patients.nationalite','patients.maladiepart'
        ,'patients.adressep','patients.allergie','patients.Email','patients.temperature','patients.poids','patients.tension','patients.pouls','patients.taille','patients.groupage','consultations.motifconsul'
        ,'consultations.dateconsult','consultations.modevie','consultations.diagnostic','consultations.conduite','traitements.libelletrait','traitements.date_trait','traitements.auteur')
        ->where('patients.id', '=' ,$patient_id)
        ->get();*/
        //dd( $patient_consult_trait);
        $pdf = PDF::loadView('Dossier', ['patient'=>$patient,'consultation'=>$consultation,'traitement'=>$traitement]) ->setPaper('a4', 'landscape');
        return $pdf->stream();
       // return view('Dossier',compact('patient','consultation','traitement'));
}

}
