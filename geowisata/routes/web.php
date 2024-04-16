<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;


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
    return view ('welcome');
});
//Routing Login
Route::get('/login', [LoginController::class, 'index']);
Route::get('register', [RegisterController::class, 'index']);

// Routing Dashboard Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//Routing Read Data User
Route::get('/user', [UserController::class, 'index']);

//Routing CRUD Data Wisata
//Routing Read Data Wisata
Route::get('/wisata', [WisataController::class, 'index']);

//Edit data wisata
Route::get('/wisata/{id}/edit', [WisataController::class, 'edit']);
Route::post('/wisata/{id}/update', [WisataController::class, 'update']);