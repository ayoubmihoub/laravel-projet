<?php
use App\Http\Controllers\TaskController;

Route::get('/', fn() => redirect('/tasks'));
Route::resource('tasks', TaskController::class);


