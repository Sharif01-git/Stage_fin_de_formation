<?php

namespace App\Http\Controllers;

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

    }

    public function chart(){
        $chart = LarapexChart::setType('line')
                                    ->setTitle('Nombre d\'utilisateur total par mois')
                                    ->setSubtitle('De janvier à Décembre')
                                    ->setXAxis([
                                        'Jan', 'Feb', 'Mar'
                                    ])
                                    ->setDataset([
                                            [
                                            'name'  =>  'Utilisateurs actifs',
                                            'data'  =>  [250, 700, 1200]
                                            ]
                                            ]);
                                    return view('Stat',compact('chart'));

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
