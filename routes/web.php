<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersImportController;

Route::get('/', [UsersImportController::class, 'show']);
Route::post('/', [UsersImportController::class, 'store']);
