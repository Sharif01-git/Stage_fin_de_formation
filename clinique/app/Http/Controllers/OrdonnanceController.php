<?php

namespace App\Http\Controllers;

use App\Ordonnance;
use App\Patient;
use App\Produit;
use Barryvdh\DomPDF\Facade as PDF;
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
    public function traitement(Request $request, Produit $produits){
        $produits = Produit::find('nomprod');
      /*  foreach($request->get('nomprod') as $produits)
        {
        $request=new Produit;
        $request->produits=$request->get('produits');
        $request->nomprod=$produits;
        $request->save();
    }*/
        Ordonnance::create([
            'nomp' => $request->nomp,
            'prenomp' =>$request->prenomp,
            'age' =>$request->age,
            'sexe' =>$request->sexe,
            'produits' =>$request->produits,
            'patient_id'=>$request->patient_id,

        ]);
        return redirect()->route('listeM1',compact('produits'))->with('success', 'Ordonnance prescrit avec succès');
    }

    public function edit(Ordonnance $ordonnance){
        //$patients = Patient::findOrFail($patient);
        return view('OrdonnanceModif')->with('ordonnance',$ordonnance);
    }

    public function update(Request $request, Ordonnance $ordonnance){
        $ordonnance->update([
            'nomp' => $request->nomp,
            'prenomp' =>$request->prenomp,
            'age' =>$request->age,
            'sexe' =>$request->sexe,
            'produits' =>$request->produits,
            'patient_id'=>$request->patient_id,

        ]);
        return redirect()->route('listeM1')->with('success', 'Ordonnance modifiée avec succès');
    }
    public function details($id){
        $ordonnance = Ordonnance::find($id);
        $pdf = PDF::loadView('DetailsOrd', ['ordonnance'=>$ordonnance]) ->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
