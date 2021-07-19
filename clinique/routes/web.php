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
