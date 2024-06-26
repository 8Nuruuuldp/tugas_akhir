<?php

//use App\Models\Data;
//use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\PetawisataController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DetailWisataController;
use App\Http\Controllers\DirectionController;

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

Route::get('/', [WisataController::class, 'welcome']);
Route::get('/search', [WisataController::class, 'search']);
Route::get('/petawisata', [WisataController::class, 'petawisata']);



Route::get('point/json', [WisataController::class, 'wisata']);

//Routing user
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Routing Dashboard Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');


//Routing Read Data User
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
//Routing Edit Data User
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->middleware('auth');
Route::post('/user/{id}/update', [UserController::class, 'update']);
// delete data user
Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->middleware('auth');

//Routing CRUD Data Wisata
Route::get('/wisata', [WisataController::class, 'index'])->middleware('auth');
// Tambah data wisata
Route::get('/wisata/create', [WisataController::class, 'create'])->name('create.wisata')->middleware('auth');
Route::post('/wisata/store', [WisataController::class, 'store'])->name('store.wisata');
//Edit data wisata
Route::get('/wisata/{id}/edit', [WisataController::class, 'edit'])->middleware('auth');
Route::post('/wisata/{id}/update', [WisataController::class, 'update']);
Route::get('/wisata/{id}/delete', [WisataController::class, 'destroy'])->middleware('auth');
Route::get('/wisata/{id}/show', [WisataController::class, 'show']);

//
Route::get('/petawisata', function () {
    return view('petawisata');
});

//Routing CRUD Data Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::get('/kategori/create', [KategoriController::class, 'create'])->middleware('auth');
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->middleware('auth');
Route::post('/kategori/{id}/update', [KategoriController::class, 'update']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'destroy'])->middleware('auth');

//Routing Menampilkan Ulasan di Admin
Route::get('/ulasan', [UlasanController::class, 'index'])->middleware('auth');
//Routing Ulasan di Halaman User
Route::get('/ulasan/{wisata_id}', [UlasanController::class, 'create'])->name('ulasan.create');
Route::post('/ulasan/store', [UlasanController::class, 'store']);

//Routing Kontak
Route::get('/kontak', [KontakController::class, 'index'])->middleware('auth');
Route::post('/kontak/store', [KontakController::class, 'store']);
Route::get('/kontak/{id}/delete', [KontakController::class, 'destroy'])->middleware('auth');

//Detail Wisata
Route::get('/detailwisata/{id}', [DetailWisataController::class, 'detailwisata'])->name('detailwisata');
//Route::post('/detailwisata/{id}', [DetailWisataController::class, 'detailwisata'])->name('detailwisata.store');

//Dapatkanarah
Route::get('/dapatkanarah/{id}', [DirectionController::class, 'dapatkanarah'])->name('dapatkanarah');
