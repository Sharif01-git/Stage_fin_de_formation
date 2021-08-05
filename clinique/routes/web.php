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

Route::get('/Page_connexionA', function () {
    return view('Page_connexionA');
});

Route::get('/Page_connexionU', function () {
    return view('Page_connexionU');
});

Route::get('/Infirmière', function () {
    return view('Infirmière');
});

Route::get('/Medecin', function () {
    return view('Medecin');
});

Route::get('/Pharmacien', function () {
    return view('Pharmacien');
});

Route::get('/Admin', function () {
    return view('Admin');
});

//Route pour infirmière
Route::get('/FormulaireI/FormulaireI1', function () {
    return view('formulaireI/FormulaireI1');
});

Route::get('/FormulaireI/FormulaireI2', function () {
    return view('formulaireI/FormulaireI2');
});

Route::get('/FormulaireI/FormulaireI3', function () {
    return view('formulaireI/FormulaireI3');
});

Route::get('/FormulaireI/FormulaireI4', function () {
    return view('formulaireI/FormulaireI4');
});

//Route pour Medecin
Route::get('/FormulaireM/FormulaireM1', function () {
    return view('formulaireM/FormulaireM1');
});

Route::get('/FormulaireM/FormulaireM2', function () {
    return view('/FormulaireM/FormulaireM2');
});

Route::get('/FormulaireM/FormulaireM3', function () {
    return view('/FormulaireM/FormulaireM3');
});

Route::get('/FormulaireM/FormulaireM4', function () {
    return view('/FormulaireM/FormulaireM4');
});

//Route pour Pharmacien
Route::get('/FormulaireP/FormulaireP1', function () {
    return view('formulaireP/FormulaireP1');
});

Route::get('/FormulaireP/FormulaireP2', function () {
    return view('formulaireP/FormulaireP2');
});

//Route pour Administrateur
Route::get('/FormulaireA/FormulaireA1', function () {
    return view('formulaireA/FormulaireA1');
});

Route::get('/FormulaireA/FormulaireA2', function () {
    return view('formulaireA/FormulaireA2');
});


