<?php

use App\Http\Controllers\CompanyProfile;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, '__invoke']);

// Route::get('/about', [AboutController::class, '__invoke']);

// Route::get('/{id}', [ArticleController::class, '__invoke']);

//Halaman Home
Route::get('/', [CompanyProfile::class, 'home']);

//Prefix Produk
Route::prefix('category')->group(function () {
    Route::get('/{id}', [CompanyProfile::class, 'produk']);
});

//Params News
Route::get('/news', [CompanyProfile::class, 'news']);

//Prefix Program
Route::prefix('program')->group(function () {
    Route::get('/{id}', [CompanyProfile::class, 'program']);
});

//About
Route::get('/aboutUs', [CompanyProfile::class, 'about']);

//Contact us
Route::get('/contactUs', [CompanyProfile::class, 'contact']);
