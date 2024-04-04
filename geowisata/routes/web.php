<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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
    return view('welcome');
});
//Routing Login
Route::get('/login', [LoginController::class, 'index']);

// Routing Dashboard Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//Routing CRUD Data Wisata
//Routing Create Data Wisata
Route::get('/wisata', [WisataController::class, 'index']);
