<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\HomeController;

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

/*
|--------------------------------------------------------------------------
| FRONT ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('sayfa',[HomeController::class,'index']);
Route::get('/kategori/{category}',[homeController::class, 'category'])->name('category');
Route::get('/{category}/{slug}',[homeController::class, 'single'])->name('single');
Route::post('/mailgonder',[homeController::class,'contactpost'])->name('contactpost');