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


Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/signup', [UserController::class, 'create'])->middleware('guest');
Route::post('/signup', [UserController::class, 'store']);

Route::get('/verify', [UserController::class, 'verifyPage']);
Route::post('/verify', [UserController::class, 'verify']);

Route::get('/forget', [UserController::class, 'edit']);
Route::post('/forget', [UserController::class, 'sendResetMail']);

Route::get('/forget/send', [UserController::class, 'resetPage'])->name('forget.reset');
Route::post('/forget/send', [UserController::class, 'update'])->name('forget.update');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/voucherBalance', [IndexController::class, 'checkBalance']);
Route::post('/checkVoucher', [IndexController::class, 'isVoucherAvailable']);
Route::post('/checked', [IndexController::class, 'updateVoucher']);
