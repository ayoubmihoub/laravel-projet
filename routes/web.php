<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route d'accueil : page personnalisée avec bouton "Get Started"
Route::get('/', function () {
    return view('welcome');
});

// Route principale de ton application
Route::resource('tasks', TaskController::class);
