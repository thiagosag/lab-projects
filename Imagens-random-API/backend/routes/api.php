<?php

use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 */

Route::post('/images', [ImageController::class, 'store']);
Route::get('/random', [ImageController::class, 'random']);
Route::get('/random/{category}/{amount?}', [ImageController::class, 'category']);
Route::get('/images/category/{category}/{amount?}', [ImageController::class, 'category']);
