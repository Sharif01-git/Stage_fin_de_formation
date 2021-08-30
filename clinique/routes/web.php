<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*-------------Routes---------------*/

Route::get('/connexionI', 'connexionIController@formulaire');
Route::post('/connexionI', 'connexionIController@traitement');

Route::get('/connexionM', 'connexionMController@formulaire');
Route::post('/connexionM', 'connexionMController@traitement');

Route::get('/connexionP', 'connexionPController@formulaire');
Route::post('/connexionP', 'connexionPController@traitement');

Route::get('/connexionC', 'connexionCController@formulaire');
Route::post('/connexionC', 'connexionCController@traitement');

Route::get('/connexionA', 'connexionAController@formulaire');
Route::post('/connexionA', 'connexionAController@traitement');


Route::get('/inscription', 'inscriptionController@formulaire');
Route::post('/inscription', 'inscriptionController@traitement');

Route::get('/Patient', 'PatientController@formulaire')->name('Patient.form');
Route::post('Patient', 'PatientController@traitement');

Route::get('ModifPa/{patient}', 'PatientController@edit')->name('ModifPa.edit');
Route::post('ModifPa/{patient}', 'PatientController@update')->name('ModifPa.update');
Route::get('patients/{patient}','PatientController@destroy' )->name('ModifPa.destroy');

Route::get('/Consultation{id}', 'ConsultationController@formulaire')->name('consultation');
Route::post('Consultation', 'ConsultationController@traitement');

Route::get('/Traitement{id}', 'TraitementController@formulaire')->name('traitement');
Route::post('Traitement', 'TraitementController@traitement');

Route::get('/Ordonnance{id}', 'OrdonnanceController@formulaire')->name('ordonnance');
Route::post('Ordonnance', 'OrdonnanceController@traitement');

Route::get('/Caisse', 'CaisseController@formulaire');
Route::post('Caisse', 'CaisseController@traitement');

Route::get('/FormulaireI/FormulaireI3','PatientController@index')->name('Patientlist.index');
Route::get('/FormulaireM/FormulaireM5','PatientController@liste');
Route::get('/FormulaireM/liste','PatientController@listeM')->name('listeM');
Route::get('/FormulaireA/FormulaireA2','HomeController@liste');

Route::get('/Pharmacie','PharmacieController@index')->name('Pharmacie.index');

//fullcalender
Route::get('fullcalendar','FullCalendarController@index');
Route::get('fullcalendar/create','FullCalendarController@create');
Route::post('fullcalendar/update','FullCalendarController@update');
Route::post('fullcalendar/delete','FullCalendarController@destroy');


/*---------Vues-----------*/

Route::get('/Infirmière', function () {
    return view('Infirmière');
});

Route::get('/Medecin', function () {
    return view('Medecin');
});

/*Route::get('/Pharmacien', function () {
    return view('Pharmacien');
});*/
Route::get('/Caissier', function () {
    return view('Caissier');
});

Route::get('/Administrateur', function () {
    return view('Administrateur');
});

Route::get('/Rendezvous', function () {
    return view('/Rendezvous');
});


//Vues pour infirmière
/*Route::get('/FormulaireI/FormulaireI4', function () {
    return view('formulaireI/FormulaireI4');
});*/

//Vues pour Medecin

Route::get('/FormulaireM/FormulaireM4', function () {
    return view('/FormulaireM/FormulaireM4');
});

//Vues pour Pharmacien
Route::get('/FormulaireP/FormulaireP1', function () {
    return view('formulaireP/FormulaireP1');
});

Route::get('/FormulaireP/FormulaireP2', function () {
    return view('formulaireP/FormulaireP2');
});

//Vues pour Caissier
Route::get('/FormulaireC/FormulaireC2', function () {
    return view('formulaireC/FormulaireC2');
});


//Vues pour administrateur
Route::get('/FormulaireA/statistique', function () {
    return view('formulaireA/statistique');
});

Route::get('/Mot_passe_oublier', function () {
    return view('Mot_passe_oublier');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Pharmacie
Route::get('/Pharmacie', 'ProduitController@index')->name('Pharmacie.index');
Route::get('/Pharmacie/{slug}', 'ProduitController@show')->name('Pharmacie.show');

Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::put('/panier/{rowId}', 'CartController@update')->name('cart.update');
Route::get('/panier', 'CartController@index' )->name('cart.index');
Route::get('/Recu', 'CartController@recu' )->name('cart.recu');
Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');

Route::get('/videpanier', function () {
    Cart::destroy();
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
