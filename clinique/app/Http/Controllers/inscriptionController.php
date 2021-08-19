<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class inscriptionController extends Controller
{
    public function formulaire()
    {
        return view('/inscription');
    }

    public function traitement()
    {
        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'telephone'=>['required'],
            'profil'=>['required'],
            'adresse'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],

        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
        ]);

             User::create([
            'name' => request('nom'),
            'prenom' => request('prenom'),
            'telephone' =>('telephone'),
            'profil' =>('profil'),
            'adresse' =>('adresse'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'profil' => request('profil'),

        ]);

        flash ('Inscription reuissi')->success();
        return redirect('/Admin');
    }
}
