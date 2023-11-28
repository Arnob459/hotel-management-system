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


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');
Route::get('/blog/single', [App\Http\Controllers\FrontendController::class, 'blogSingle'])->name('blog.single');
Route::get('/galary', [App\Http\Controllers\FrontendController::class, 'galary'])->name('galary');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\FrontendController::class, 'contactStore'])->name('contact.store');
Route::get('/offer', [App\Http\Controllers\FrontendController::class, 'offer'])->name('offer');
Route::get('/rooms', [App\Http\Controllers\FrontendController::class, 'rooms'])->name('rooms');
Route::get('/room/single/{id}', [App\Http\Controllers\FrontendController::class, 'roomSingle'])->name('room.single');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/profile/update', [App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('profile.update');


Route::get('/booking', [App\Http\Controllers\BookingController::class, 'booking'])->name('booking');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'bookingStore'])->name('booking.store');
Route::get('/booking/available-rooms/{checkin_date}',[App\Http\Controllers\BookingController::class, 'available_rooms']);



