<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SandwichController;

Route::get('/', [SandwichController::class, 'index']);

Route::get('/gerechten', function () {
    return redirect('/');
});

Route::get('/gerecht/{id}', [SandwichController::class, 'show']);

Route::get('/winkelwagen', function () {
    return view('winkelwagen');
});

Route::get('/betaald', function () {
    return view('betaald');
});

Route::get('/review/{id}', [ReviewController::class, 'show']);
