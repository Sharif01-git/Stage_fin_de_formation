<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionMController extends Controller
{
    public function formulaire(){
        return view('/Page_connexionM');
    }
    public function traitement(){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),

        ]);
        if ($resultat) {
           flash("Vous êtes  connecté.")->success();

            return redirect('/Medecin');
        } else {
            return back()->withInput()->withErrors([
                'email' => 'Vos identifiants sont incorrects.',
            ]);
            flash('identifiants incorrects')->error();
            return redirect('/Page_connexionM');
        }
    }
}
