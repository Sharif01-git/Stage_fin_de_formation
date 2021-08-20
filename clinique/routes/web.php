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

Route::get('/Patient', 'PatientController@formulaire');
Route::post('Patient', 'PatientController@traitement');

Route::get('ModifPa/{patient}', 'PatientController@edit');
Route::post('ModifPa/{patient}', 'PatientController@update');

Route::get('/Consultation', 'ConsultationController@formulaire');
Route::post('Consultation', 'ConsultationController@traitement');

Route::get('/Traitement', 'TraitementController@formulaire');
Route::post('Traitement', 'TraitementController@traitement');

Route::get('/Ordonnance', 'OrdonnanceController@formulaire');
Route::post('Ordonnance', 'OrdonnanceController@traitement');

Route::get('/Caisse', 'CaisseController@formulaire');
Route::post('Caisse', 'CaisseController@traitement');

Route::get('/FormulaireI/FormulaireI3','PatientController@index');
Route::get('/FormulaireA/FormulaireA2','HomeController@liste');

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

Route::get('/Pharmacien', function () {
    return view('Pharmacien');
});
Route::get('/Caissier', function () {
    return view('Caissier');
});

Route::get('/Admin', function () {
    return view('Admin');
});


//Vues pour infirmière
/*Route::get('/FormulaireI/FormulaireI4', function () {
    return view('formulaireI/FormulaireI4');
});*/

//Vues pour Medecin

Route::get('/FormulaireM/FormulaireM4', function () {
    return view('/FormulaireM/FormulaireM4');
});

Route::get('/FormulaireM/FormulaireM5', function () {
    return view('/FormulaireM/FormulaireM5');
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
