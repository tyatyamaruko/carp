<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/update', [UserController::class, 'index'])->name('update');
Route::post('/modify', [UserController::class, 'modify'])->name('modify');

Route::get('/search', [UserController::class, 'search'])->name('search');
Route::get('/search/{name?}', [UserController::class, 'search'])->name('search.name');

Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');