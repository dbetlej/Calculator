<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MoviesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(MoviesController::class)->group(function () {
    Route::get('/movies', 'index');
    Route::post('/movie', 'store');
    Route::get('/movies/{id}', 'show');
    Route::put('/movies/{id}', 'update');
    Route::delete('/movies/{id}', 'destroy');
});
