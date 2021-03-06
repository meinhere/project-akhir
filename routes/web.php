<?php

use App\Events\MessageCreated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardPlantController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardServiceController;
use App\Http\Controllers\DashboardCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index']);
Route::get('/fetch-new', [MainController::class, 'fetchNews']);
Route::get('/fetch-popular', [MainController::class, 'fetchPopulars']);
Route::get('/dashboard', [MainController::class, 'dashboard']);
Route::get('/riwayat', [MainController::class, 'riwayat']);
Route::get('/footer/{footer:slug}', [MainController::class, 'footer']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);

// Route::get('/register-petani', [AuthController::class, 'registerPetani'])->middleware('guest');

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::post('/artikel/comment', [ArtikelController::class, 'comment']);
Route::get('/artikel/{article:slug}', [ArtikelController::class, 'show']);

Route::get('/kategori/{category:slug}', [CategoryController::class, 'show']);

Route::get('/jenis-tanaman', [TanamanController::class, 'index']);
Route::get('/alat-perkebunan', [TanamanController::class, 'alat']);
Route::get('/harga-pasaran', [TanamanController::class, 'harga']);

Route::get('/services/langkah-awal', [ServiceController::class, 'langkahAwal']);
Route::get('/services/cara-pengobatan', [ServiceController::class, 'caraPengobatan']);

Route::middleware('petani')->group(function () {
  Route::get('/dashboard/articles/checkSlug', [DashboardArtikelController::class, 'checkSlug']);
  Route::resource('/dashboard/articles', DashboardArtikelController::class);
});

Route::middleware('admin')->group(function () {
  Route::resource('/dashboard/categories', DashboardCategoryController::class);
  Route::resource('/dashboard/users', DashboardUserController::class);
  Route::resource('/dashboard/services', DashboardServiceController::class);
  Route::resource('/dashboard/plants', DashboardPlantController::class);
});
