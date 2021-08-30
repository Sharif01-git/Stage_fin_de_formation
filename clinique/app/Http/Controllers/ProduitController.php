<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        if(request()->categorie){
            $produits = Produit::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(6);
        }else{
            $produits = Produit::with('categories')->paginate(6);
        }


          return view('/Pharmacie')->with('produits', $produits);
    }

    public function show($slug){
        $produit = Produit::where('slug', $slug)->first();
       // $stock = $produit->stock === 0 ? 'Indisponible' : 'Disponible';

        return view('show'/*, [
            'product' => $produit,
            'stock' => $stock

        ]*/)->with('produit', $produit);
    }



}
