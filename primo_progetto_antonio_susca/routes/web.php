<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/Articoli', function () {
    return view('Articoli');
});

Route::get('/ChiSono', function () {
    return view('ChiSono', ['Descrizione'=> ' Ciao sono Antonio, classe 91. Amante del design e della musica. Sono Graphic Designer, SMM, Dj e collezionista di vinili.']);
});