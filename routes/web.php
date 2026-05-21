<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersImportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/import', [UsersImportController::class, 'show']);
Route::post('/users/import', [UsersImportController::class, 'store']);
