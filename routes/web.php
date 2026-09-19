<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfilController;

Route::get('/profil', [ProfilController::class, 'index']);