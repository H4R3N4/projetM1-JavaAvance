<?php

use App\Http\Controllers\AppartementController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::apiResource('appartements', AppartementController::class);