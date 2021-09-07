<?php

namespace App\Http\Controllers;

use App\Facture;
use App\Patient;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CaisseController extends Controller
{
    public function index(){
        $factures = Facture::all();
        return view('/Caisse',compact('factures'));
    }
    public function listeC(){
        $factures = Facture::all();
        return View('/FormulaireC/FormulaireC2',compact('factures'));
    }
    public function listeP(){
        $patients = Patient::all();
        return view('/FormulaireC/FormulaireC3',compact('patients','patients'));
    }

    public function formulaire($id){
        $patient = Patient::findOrFail($id);
        //dd($patient);
        return view('/Caisse',[
            'id'=> $id,
            'nomp'=>$patient->nomp,
            'prenomp'=>$patient->prenomp,
            'allergie'=>$patient->allergie,
            'maladiepart'=>$patient->maladiepart,
        ]);
    }
    public function traitement(Request $request){
        Facture::create([
            'nomp'=> $request->nomp,
            'prenomp'=> $request->prenomp,
            'datefac' =>$request->datefac,
            'prixbonconsul' =>$request->prixbonconsul,
            'prixcarnet' =>$request->prixcarnet,
            'prixtrait' =>$request->prixtrait,
            'prixprod' =>$request->prixprod,
            'prixtotal' =>$request->prixtotal,
            'patient_id'=>$request->patient_id,

        ]);

        return redirect()->route('listeC')->with('success', 'La facture a été établie avec succès');
    }
    public function edit(Facture $facture){
        return view('CaisseModif')->with('facture',$facture);
    }

    public function update(Request $request, Facture $facture){
        $facture->update([
            'nomp'=> $request->nomp,
            'prenomp'=> $request->prenomp,
            'datefac' =>$request->datefac,
            'prixbonconsul' =>$request->prixbonconsul,
            'prixcarnet' =>$request->prixcarnet,
            'prixtrait' =>$request->prixtrait,
            'prixprod' =>$request->prixprod,
            'prixtotal' =>$request->prixtotal,
            'patient_id'=>$request->patient_id,
        ]);
        return redirect()->route('listeC')->with('success', 'Facture Modifié avec succès');
    }
    public function destroy(Facture $facture){
        $facture->delete();
        return redirect()->route('listeC')->with('success', 'Facture supprimé avec succès');
    }
    public function facture($id){
        $facture = Facture::find($id);
        $pdf = PDF::loadView('Facture', ['facture'=>$facture]) ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
