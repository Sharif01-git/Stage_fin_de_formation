<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(Request $request){
        if(request()->categorie){
            $produits = Produit::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(8);
        }else{
            $produits = Produit::with('categories')->paginate(6);
        }
        //$produit = Produit::find($request->produit_id);
        //$stock = $produit->stock === 0 ? 'Indisponible' : 'Disponible';

          return view('/Pharmacie')->with('produits', $produits);
    }

    public function show($slug){
        $produit = Produit::where('slug', $slug)->first();
        $stock = $produit->stock === 0 ? 'Indisponible' : 'Disponible';

        return view('show', [
            'produit' => $produit,
            'stock' => $stock

        ])->with('produit', $produit);
    }
    public function create(Request $request){

        Produit::create([
           'image'=>$request->image,
            'nomprod'=> $request->nomprod,
            'slug'=>$request->slug,
            'prix'=>$request->prix,
            'description'=>$request->description,
            'prix'=>$request->prix,
        ]);
        Categorie::create([
            'nom'=>$request->nom,
            'slug'=>$request->slug
        ]);
        return view('/Pharmacie');
    }
    public function search(){
        request()->validate([
            'q'=> 'required|min:3'
        ]);

        $q = request()->input('q');

        $produits = Produit::where('nomprod', 'like', "%$q%")
                    ->orWhere('slug', 'like', "%$q%")
                    ->paginate(12);

        return view('/Pharmacie')->with('produits', $produits);
    }



}
