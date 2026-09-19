<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfilController;

Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);