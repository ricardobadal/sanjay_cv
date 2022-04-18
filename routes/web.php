<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/profile', [HomeController::class, 'profile'])->name('home.profile');
Route::get('/education', [HomeController::class, 'education'])->name('home.education');
Route::get('/experience', [HomeController::class, 'experience'])->name('home.experience');
Route::get('/knowledge', [HomeController::class, 'knowledge'])->name('home.knowledge');


