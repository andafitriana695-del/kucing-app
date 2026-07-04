<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

Route::get('/', [CatController::class, 'home']);

Route::get('/cats', [CatController::class, 'index']);

Route::get('/cats/{id}', [CatController::class, 'detail']);