<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use Illuminate\Queue\Jobs\Job;

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

Route::get('/', [AuthController::class , 'loginForm'])->name('login');
Route::post('/',[AuthController::class, 'login']);
Route::get('/register', [AuthController::class , 'registerForm']);
Route::post('/register', [AuthController::class , 'register'])->name('register');
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);

Route::middleware(['auth','verified'])->group (function(){

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AuthController::class, 'dashboard']);


});


Route::get('/sendmail', [EmailController::class, 'sendEmail']);