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
Route::get('/about', [App\Http\Controllers\xyz::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\xyz::class, 'blog'])->name('blog');
Route::get('/blog/single', [App\Http\Controllers\xyz::class, 'blogSingle'])->name('blog.single');
Route::get('/galary', [App\Http\Controllers\xyz::class, 'galary'])->name('galary');
Route::get('/contact', [App\Http\Controllers\xyz::class, 'contact'])->name('contact');
Route::get('/offer', [App\Http\Controllers\xyz::class, 'offer'])->name('offer');
Route::get('/rooms', [App\Http\Controllers\xyz::class, 'rooms'])->name('rooms');
Route::get('/booking', [App\Http\Controllers\xyz::class, 'booking'])->name('booking');
Route::get('/room/single', [App\Http\Controllers\xyz::class, 'roomSingle'])->name('room.single');
Route::get('/demo', [App\Http\Controllers\xyz::class, 'demo'])->name('demo');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
