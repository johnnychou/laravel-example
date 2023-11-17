<?php

use App\Http\Controllers\resourceCtl;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'mainPage']);

Route::get('/home', [UserController::class, 'homePage']);

Route::get('/test', [UserController::class, 'test']);

Route::resource('srcs', resourceCtl::class);



