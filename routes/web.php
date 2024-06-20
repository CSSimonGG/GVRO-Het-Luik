<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/gerechten', function () {
    return view('home');
});

Route::get('/winkelwagen', function () {
    return view('winkelwagen');
});

Route::get('/betaald', function () {
    return view('betaald');
});

Route::get('/review', function () {
    return view('home');
});
