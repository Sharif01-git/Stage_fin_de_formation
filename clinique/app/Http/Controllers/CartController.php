<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Produit;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Darryldecode\Cart\Validators\Validator;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

//use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/Panier');
    }

    public function recu(Request $request){
       /* $produit = DB::table('produits')->latest('id')->first();
        $num=$produit->id;
        $nom=$produit->nomprod;
        $produit =$produit->produits;
        $date = $produit->created_at;
        $montant =$produit->prix;
        $nom = DB::table('patients')->latest('id')->first();
        $produits = unserialize($produit);*/
       // Cart::destroy();
        $produit = Produit::find($request->produit_id);
        $pdf = PDF::loadView('Recu', ['produits'=>$produit]) ->setPaper('a4', 'landscape');
        Cart::destroy();
         return $pdf->stream();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->checkIfNotAvailable()) {
            Session::flash('error', 'Un produit dans votre panier n\'est plus disponible');

            return response()->json(['success'=>false], 400);
         }
        $duplicata = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id == $request->produit_id;
        });

        if ($duplicata->isNotEmpty()) {
            return redirect()->route('Pharmacie.index')->with('success', 'Le produit a été déjà ajouté.');
        }

        $produit = Produit::find($request->produit_id);

        Cart::add($produit->id, $produit->nomprod, 1,$produit->prix)
        ->associate('App\Produit');
        $stock = $produit->stock === 0 ? 'Indisponible' : 'Disponible';


        return redirect()->route('Pharmacie.index', ['stock'=>$stock])->with('success', 'Le produit a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator = Validator::make($request->all(), [
            'quantite' => 'required|numeric|between:1,6'
        ]);

        if ($validator->fails()) {
            Session::flash('danger','La quantité du produit ne doit pas dépasser 6');

            return response()->json(['error', 'La quantté du produit na pas été mis à jour']);
        }
        if($data['quantite']> $data['stock']){
            Session::flash('danger','La quantité de ce produit n\'est pas disponible.');

            return response()->json(['error', 'La quantité du produit n\'est pas valable']);
        }

        Cart::update($rowId, $data['quantite']);

        Session::flash('success','La quantité du produit est passée à ' . $data['quantite'] . '.');

        return response()->json(['success', 'La quantté du produit à été mis à jour']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);

        return back()->with('success', 'Le produit à été supprimé.');
    }

    public function valider(){
        return view('/Recu');
    }

    private function updateStock(){
        foreach (Cart::content() as $item) {
           $produit = Produit::find($item->model->id);

           $produit->update(['stock'=>$produit->stock - $item->quantite]);
        }
    }

    private function checkIfNotAvailable(){
        foreach (Cart::content() as $item) {
            $produit = Produit::find($item->model->id);

            if ($produit->stock < $item->quantite) {
               return true;
            }
        }

        return false;
    }

}
