<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;

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
// Praktikum 1 //
//Route::get('welcome', function () {
//   return ('Selamat Datang');
//});

//Route::get('about', function () {
//  return ('Nama : Yusyac Miftachul Huda Fi Ali <br> Nim  : 1941720229');
//});

//Route::get('article/{id}', function ($id) {
//  return ('Halaman Artikel Web ID '.$id);
//});

// Praktikum 2 //

//Route::get('/', [PageController::class, 'welcome']);
//Route::get('/about', [PageController::class, 'about']);
//Route::get('/article/{id}', [PageController::class, 'article']);

//Route::get('/', [HomeController::class, 'welcome']);
//Route::get('about', [AboutController::class, 'about']);
//Route::get('article/{id}', [ArticleController::class, 'article']);

//Route::get('/', [HomeController::class, 'home']);
//Route::group(['prefix' => 'id'], function() {
    //Route::get('/', [ProductController::class, 'index']);
    //Route::get('/{id}', [ProductController::class,'product']);
//});

//Route::get('/news', [NewsController::class, 'index']);
//Route::get('/news/{news}', [NewsController::class, 'news']);

//Route::group(['prefix' => 'program'], function () {
    //Route::get('/', [ProgramController::class, 'index']);
    //Route::get('/{program}', [ProgramController::class, 'program']);
//});

//Route::get('/about-us', [AboutUsController::class, 'about']);



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/hello', [App\Http\Controllers\WelcomeController::class, 'hello'])->name('hello');

Route::get('/', [TemplateController::class, 'index']);
Route::get('/features', [TemplateController::class, 'features']);
Route::get('/about', [TemplateController::class, 'about']);
Route::get('/contact', [TemplateController::class, 'contact']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/suppliers', [SupplierController::class, 'index']);
Route::get('/karyawans', [KaryawanController::class, 'index']);
Route::get('/pelanggans', [PelangganController::class, 'index']);
