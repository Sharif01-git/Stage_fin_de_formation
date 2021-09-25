<?php

namespace App\Http\Controllers;

use App\Consultation;
use App\Ordonnance;
use App\Patient;
use App\Produit;
use App\Rendezvous;
use App\Traitement;
use App\User;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listerends = Rendezvous::all();
        return view('Medecin',compact('listerends'));
    }

    public function chart(){
        $janv_users= User::where('created_at','like','_____' . '01' . '%')->count();
        $fev_users= User::where('created_at','like','_____' . '02' . '%')->count();
        $mars_users= User::where('created_at','like','_____' . '03' . '%')->count();
        $avril_users= User::where('created_at','like','_____' . '04' . '%')->count();
        $mai_users= User::where('created_at','like','_____' . '06' . '%')->count();
        $juin_users= User::where('created_at','like','_____' . '06' . '%')->count();
        $jul_users= User::where('created_at','like','_____' . '07' . '%')->count();
        $aou_users= User::where('created_at','like','_____' . '08' . '%')->count();
        $sept_users= User::where('created_at','like','_____' . '09' . '%')->count();
        $oct_users= User::where('created_at','like','_____' . '10' . '%')->count();
        $nov_users= User::where('created_at','like','_____' . '11' . '%')->count();
        $dec_users= User::where('created_at','like','_____' . '12' . '%')->count();
        $chart = LarapexChart::setType('line')
                                    ->setTitle('Nombre d\'utilisateur total enrégistrés par mois')
                                    ->setSubtitle('De Juillet à Septembre')
                                    ->setXAxis([
                                        'Janv', 'Fevr', 'Mars', 'Avril', 'Mai', 'Juin', 'Juill', 'Août', 'Sept', 'Oct', 'Nov', 'Dec'
                                    ])
                                    ->setDataset([
                                            [
                                                'name'  =>  'Utilisateurs actifs',
                                                'data'  =>  [$janv_users, $fev_users, $mars_users, $avril_users, $mai_users, $juin_users,  $jul_users, $aou_users, $sept_users, $oct_users, $nov_users, $dec_users]
                                            ]
                                            ]);

        $janv_cmd= Patient::where('created_at','like','_____' . '01' . '%')->count();
        $fev_cmd= Patient::where('created_at','like','_____' . '02' . '%')->count();
        $mars_cmd= Patient::where('created_at','like','_____' . '03' . '%')->count();
        $avril_cmd= Patient::where('created_at','like','_____' . '04' . '%')->count();
        $mai_cmd= Patient::where('created_at','like','_____' . '05' . '%')->count();
        $juin_cmd= Patient::where('created_at','like','_____' . '06' . '%')->count();
        $jul_cmd= Patient::where('created_at','like','_____' . '07' . '%')->count();
        $aou_cmd= Patient::where('created_at','like','_____' . '08' . '%')->count();
        $sept_cmd= Patient::where('created_at','like','_____' . '09' . '%')->count();
        $oct_cmd= Patient::where('created_at','like','_____' . '10' . '%')->count();
        $nov_cmd= Patient::where('created_at','like','_____' . '11' . '%')->count();
        $dec_cmd= Patient::where('created_at','like','_____' . '12' . '%')->count();

        $chart1 = (new LarapexChart)::setType('bar')
        ->setTitle('Nombres de patients enrégistrés par mois')
        ->setSubtitle('De Janvier en Décembre')
        ->setXAxis([
            'Janv', 'Fevr', 'Mars', 'Avril', 'Mai', 'Juin', 'Juill', 'Août', 'Sept', 'Oct', 'Nov', 'Dec'
        ])
        ->setDataset([
            [
                'name'  =>  'Nombre de patients',
                'data'  =>  [$janv_cmd, $fev_cmd, $mars_cmd, $avril_cmd, $mai_cmd, $juin_cmd, $jul_cmd, $aou_cmd, $sept_cmd, $oct_cmd, $nov_cmd, $dec_cmd]

            ]
        ]);

        $janv_cmd= Produit::where('created_at','like','_____' . '01' . '%')->count();
        $fev_cmd= Produit::where('created_at','like','_____' . '02' . '%')->count();
        $mars_cmd= Produit::where('created_at','like','_____' . '03' . '%')->count();
        $avril_cmd= Produit::where('created_at','like','_____' . '04' . '%')->count();
        $mai_cmd= Produit::where('created_at','like','_____' . '05' . '%')->count();
        $juin_cmd= Produit::where('created_at','like','_____' . '06' . '%')->count();
        $jul_cmd= Produit::where('created_at','like','_____' . '07' . '%')->count();
        $aou_cmd= Produit::where('created_at','like','_____' . '08' . '%')->count();
        $sept_cmd= Produit::where('created_at','like','_____' . '11' . '%')->count();
        $oct_cmd= Produit::where('created_at','like','_____' . '10' . '%')->count();
        $nov_cmd= Produit::where('created_at','like','_____' . '11' . '%')->count();
        $dec_cmd= Produit::where('created_at','like','_____' . '12' . '%')->count();

        $chart2 = (new LarapexChart)::setType('bar')
        ->setTitle('Nombres de produits existants')
        ->setSubtitle('De Janvier en Décembre')
        ->setXAxis([
            'Janv', 'Fevr', 'Mars', 'Avril', 'Mai', 'Juin', 'Juill', 'Août', 'Sept', 'Oct', 'Nov', 'Dec'
        ])
        ->setDataset([
            [
                'name'  =>  'Produits',
                'data'  =>  [$janv_cmd, $fev_cmd, $mars_cmd, $avril_cmd, $mai_cmd, $juin_cmd, $jul_cmd, $aou_cmd, $sept_cmd, $oct_cmd, $nov_cmd, $dec_cmd]

            ]
        ]);
        $janv_cmd= Traitement::where('created_at','like','_____' . '01' . '%')->count();
        $fev_cmd=Traitement::where('created_at','like','_____' . '02' . '%')->count();
        $mars_cmd= Traitement::where('created_at','like','_____' . '03' . '%')->count();
        $avril_cmd= Traitement::where('created_at','like','_____' . '04' . '%')->count();
        $mai_cmd= Traitement::where('created_at','like','_____' . '05' . '%')->count();
        $juin_cmd= Traitement::where('created_at','like','_____' . '06' . '%')->count();
        $jul_cmd= Traitement::where('created_at','like','_____' . '07' . '%')->count();
        $aou_cmd= Traitement::where('created_at','like','_____' . '08' . '%')->count();
        $sept_cmd= Traitement::where('created_at','like','_____' . '11' . '%')->count();
        $oct_cmd= Traitement::where('created_at','like','_____' . '10' . '%')->count();
        $nov_cmd= Traitement::where('created_at','like','_____' . '11' . '%')->count();
        $dec_cmd= Traitement::where('created_at','like','_____' . '12' . '%')->count();

        $chart3 = (new LarapexChart)::setType('line')
        ->setTitle('Nombres de consultations faits')
        ->setSubtitle('De Janvier en Décembre')
        ->setXAxis([
            'Janv', 'Fevr', 'Mars', 'Avril', 'Mai', 'Juin', 'Juill', 'Août', 'Sept', 'Oct', 'Nov', 'Dec'
        ])
        ->setDataset([
            [
                'name'  =>  'Consultation',
                'data'  =>  [$janv_cmd, $fev_cmd, $mars_cmd, $avril_cmd, $mai_cmd, $juin_cmd, $jul_cmd, $aou_cmd, $sept_cmd, $oct_cmd, $nov_cmd, $dec_cmd]

            ]
        ]);
        return view('Stat',compact('chart','chart1','chart2','chart3'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $traitement = Traitement::all();
        $consultation = Consultation::all();
        $patients = Patient::all();
        $utilisateur = User::all();
         return view('Administrateur',compact('traitement','consultation','patients','utilisateur'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function createUser(){
        return view('Utilisateur');
    }
    public function Usertraitement(Request $request){
        User::create([
            'name' => $request->name,
            'prenom' =>$request->prenom,
            'telephone' =>$request->telephone,
            'profil' =>$request->profil,
            'adresse' =>$request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        return redirect()->route('listeA')->with('success', 'L\'utilisateur a été ajouter avec succès');
    }

    public function Useredit(User $user){
        return view('UtilisateurModif',compact('user'));
    }
    public function Userupdate(Request $request, User $user){
        $user->update([
            'name' => $request->name,
            'prenom' =>$request->prenom,
            'telephone' =>$request->telephone,
            'profil' =>$request->profil,
            'adresse' =>$request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('listeA')->with('success', 'Les informations de l\'utilisateur ont été modifié avec succès');
    }

    public function DetailsU($id){
        $users = User::findOrFail($id);
        return view('DetailsU',compact('users'));
    }
}
