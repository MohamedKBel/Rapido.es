<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[PublicController::class,'index'])->name('home');

Route::get('/ads/create',[AdController::class,'create'])->name('ads.create');
Route::get('/category/{category:name}/ads',[AdController::class,'asdByCategory'])->name('category.ads');

Route::get('/ads/{ad}', [AdController::class,'show'])->name("ads.show");
