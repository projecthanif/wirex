<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/signup', [UserController::class, 'create']);
Route::post('/signup', [UserController::class, 'store']);

Route::get('/verify', [UserController::class, 'verifyPage']);
Route::post('/verify', [UserController::class, 'verify']);

Route::get('/logout', [UserController::class, 'logout']);



Route::get('/dashboard', [IndexController::class, 'index']);
