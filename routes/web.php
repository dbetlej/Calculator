<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Proxy\MoviesProxy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// User
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'create_user']);
Route::get('/login', [UserController::class, 'show']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [UserController::class, 'dashboard']);

// Movie URIs
Route::get('/add_movies', [MoviesProxy::class, 'add_movies']); // (form) create movie
Route::post('/add_movies', [MoviesProxy::class, 'save_movie']); // create movie
Route::get('/movie/{movieId}', [MoviesProxy::class, 'get_movie']); // show movie
Route::post('/movie/{movieId}', [MoviesProxy::class, 'edit_movie']); // update movie
Route::delete('/movie/{movieId}', [MoviesProxy::class, 'delete_movie']); // destroy movie
