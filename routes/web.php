<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    'AgenceImmobiliereCascade',
    function () {
        return view('pages.accueil');
    }
)->name('Agence Cascade');

Route::get(
    'AgenceImmobiliereCascade/liste',
    function () {

        return view('pages.listeBiens');
    }
)->name('listeBiens');