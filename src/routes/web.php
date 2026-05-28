<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecommendController;
use App\Http\Controllers\PostController;
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
Route::get('/home', [HomeController::class, 'home']);
Route::get('/recommend/{id}',[RecommendController::class,'recommend'])->name('recommend');
Route::post(
    '/recommend/{id}',
    [RecommendController::class, 'store']
)->name('favorite.store');
Route::get('/post', [PostController::class, 'post']);
Route::post('/send',
    [PostController::class, 'send']
)->name('send');
Route::get('/list', [HomeController::class, 'list']);