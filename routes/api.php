<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

// ...

Route::prefix('zaba/54506')->group(function () {
    Route::get('/people', [PeopleController::class, 'index']);
    Route::get('/people/{id}', [PeopleController::class, 'show']);
    Route::post('/people', [PeopleController::class, 'store']);
    Route::put('/people/{id}', [PeopleController::class, 'update']);
    Route::delete('/people/{id}', [PeopleController::class, 'destroy']);
    // Inne trasy...
});