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

Route::get('/', [PostController::class, 'index']);
Route::get('/search', [PostController::class, 'search']);
// Route::get('/posts/{post::slug}', [PostController::class, 'show']);

// Route::get('/categories', function() {
//     return view('/data/categories' , [
//         'title' =>'Post Categories',
//         'categories' => Category::all()

//     ]);
// });

// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('/data/category' , [
//         'title' =>$category->name,
//         'posts' =>$category->posts,
//         'category' => $category->name
//     ]);
// });


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
Route::get('/user', [UserController::class, 'index']);

//Routing CRUD Data Wisata
Route::get('/wisata', [WisataController::class, 'index']);
// Tambah data wisata
Route::get('/wisata/create', [WisataController::class, 'create'])->name('create.wisata');
Route::post('/wisata/store', [WisataController::class, 'store'])->name('store.wisata');
//Edit data wisata
Route::get('/wisata/{id}/edit', [WisataController::class, 'edit']);
Route::post('/wisata/{id}/update', [WisataController::class, 'update']);
Route::get('/wisata/{id}/delete', [WisataController::class, 'destroy']);

// delete data user
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);

//
Route::get('/petawisata', function () {
    return view('petawisata');
});
Route::get('/hwisata', function () {
    return view('hwisata');
});


//Routing CRUD Data Kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::post('/kategori/{id}/update', [KategoriController::class, 'update']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'destroy']);
