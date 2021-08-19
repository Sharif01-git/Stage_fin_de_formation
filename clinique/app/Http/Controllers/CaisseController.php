<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;

class CaisseController extends Controller
{
    public function index(){
        $factures = Facture::all();
        return view('/FormulaireI/FormulaireI3',compact('factures','factures'));
    }

    public function formulaire(){
        return view('/Caisse');
    }
    public function traitement(Request $request){
        Facture::create([
            'libellefac' => $request->libellefac,
            'datefac' =>$request->datefac,
            'prixbonconsul' =>$request->prixbonconsul,
            'sexe' =>$request->sexe,
            'prixcarnet' =>$request->prixcarnet,
            'prixtrait' =>$request->prixtrait,
            'prixprod' =>$request->prixprod,
            'prixtotal' =>$request->prixtotal,

        ]);
        return view('/Caissier')->with('success', 'Le patient a été enrégistré avec succès');
    }
}
