<?php

use App\Models\Data;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WisataController;
use App\Models\Category;





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

Route::get('/datawisata', [PostController::class, 'index']);
Route::get('/posts/{post::slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('/data/categories' , [
        'title' =>'Post Categories',
        'categories' => Category::all()

    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('/data/category' , [
        'title' =>$category->name,
        'posts' =>$category->posts,
        'category' => $category->name
    ]);
});


Route::get('point/json', [WisataController::class, 'wisata']);

//Routing user
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister'])->name('postregister');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

// Routing Dashboard Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register'])->name('register');

//Routing Read Data User
Route::get('/user', [UserController::class, 'index']);

//Routing CRUD Data Wisata
Route::get('/wisata/create', [WisataController::class, 'create'])->name('create.wisata');
Route::post('/wisata/store', [WisataController::class, 'store'])->name('store.wisata');
Route::post('/wisata', [WisataController::class, 'index'])->name('wisata.store');

//Routing Read Data Wisata
Route::get('/wisata', [WisataController::class, 'index']);

//Edit data wisata
Route::get('/wisata/{id}/edit', [WisataController::class, 'edit']);
Route::post('/wisata/{id}/updatewisata', [WisataController::class, 'updatewisata']);
Route::get('/wisata/{id}/delete', [WisataController::class, 'destroy']);

// delete data user
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);

//
Route::get('/petawisata', function () {
    return view ('petawisata');
});

