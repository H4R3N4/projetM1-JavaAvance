<?php
use App\Http\Controllers\AppartementController;
use Illuminate\Support\Facades\Route;

Route::get('appartements', action:  [AppartementController::class, 'index']);
Route::post('appartements', action:  [AppartementController::class, 'store']);
Route::delete('appartement/{id}', action: [AppartementController::class, 'destroy']);
Route::put('appartement/{id}', action: [AppartementController::class, 'update']);
Route::get('/statistiques', [AppartementController::class, 'statistiquesLoyers']);
