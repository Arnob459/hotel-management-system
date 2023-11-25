<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/single', [App\Http\Controllers\FrontendController::class, 'blogSingle'])->name('blog.single');
Route::get('/galary', [App\Http\Controllers\FrontendController::class, 'galary'])->name('galary');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/offer', [App\Http\Controllers\FrontendController::class, 'offer'])->name('offer');
Route::get('/rooms', [App\Http\Controllers\FrontendController::class, 'rooms'])->name('rooms');
Route::get('/booking', [App\Http\Controllers\FrontendController::class, 'booking'])->name('booking');
Route::get('/room/single', [App\Http\Controllers\FrontendController::class, 'roomSingle'])->name('room.single');
Route::get('/demo', [App\Http\Controllers\FrontendController::class, 'demo'])->name('demo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
