<?php

use App\Models\Buku;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EBookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AdminInputController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\TambahCopyController;
use App\Http\Controllers\AdminPeminjamanController;




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
    return view('dashboard', [
        'title' => 'Home',
        'active' => 'Home'
    ]);
});

Route::get('/peminjaman',[PeminjamanController::class, 'index'])->middleware('auth');

Route::post('/peminjaman',[PeminjamanController::class, 'store'])->middleware('auth');

Route::post('/peminjaman/kembali',[PeminjamanController::class, 'kembali']);

Route::get('/buku', [BukuController::class, 'index'])->middleware('auth');

Route::get('book/{Buku:slug}',[BukuController::class, 'show']);

Route::get('/donasi', [PengajuanController::class, 'index'])->middleware('auth');

Route::post('/donasi', [PengajuanController::class, 'store']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => "Kategori",
        'categories' => Category::all(),
        'active' => 'Categories'
    ]);
})->middleware('auth');;

Route::get('/signin', [LoginController::class, 'index'])->name('signin')->middleware('guest');

Route::post('/signin', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/signup', [RegisterController::class, 'store']);


Route::resource('/tambahcopy', TambahCopyController::class);

Route::resource('/input', AdminInputController::class);

Route::resource('/daftarpeminjaman', AdminPeminjamanController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user', [App\Http\Controllers\UserController::class, 'dataUser'])->name('user_-_data');