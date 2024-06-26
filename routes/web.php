<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SandwichController;
use App\Http\Controllers\PaymentController;

Route::get('/', [SandwichController::class, 'index']);

Route::get('/gerechten', function () {
    return redirect('/');
});

Route::get('/gerecht/{id}', [SandwichController::class, 'show']);

Route::get('/winkelwagen', function () {
    return view('winkelwagen');
});

Route::get('/betalen', [PaymentController::class, 'betalen']);
Route::get('/betaald', [PaymentController::class, 'betaald']);

Route::get('/review/{id}', [ReviewController::class, 'show']);
