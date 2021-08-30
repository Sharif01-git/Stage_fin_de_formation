<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

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
        return redirect()->route('Patientlist.index')->with('success', 'Patient enrégistré avec succès');
    }

    public function edit(Patient $patient){
        //$patients = Patient::findOrFail($patient);
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

}
