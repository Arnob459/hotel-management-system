<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteFacilityProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Admin

Route::name('admin.')->group(function() {

    Route::middleware(['admin.guest'])->group(function () {
        //Your routes here
        Route::get('/login', [Auth\LoginController ::class, 'showLoginForm'])->name('login');
        Route::post('/login', [Auth\LoginController ::class, 'login'])->name('signin');
    });
    Route::middleware(['admin'])->group(function () {
        //Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    //Profile
        Route::get('/profile', [AdminController::class, 'Profile'])->name('profile');
        Route::post('/profile',[AdminController::class,'profileUpdate'])->name('profile.update');

        //password
        Route::get('/change/password',[AdminController::class,'passwordChange'])->name('password');
        Route::post('password',[AdminController::class,'passwordUpdate'])->name('password.update');

        //About
        Route::get('home/about', [SettingExtraController::class, 'about'])->name('about');
        Route::post('home/about', [SettingExtraController::class, 'aboutUpdate'])->name('about.update');

        //Facility
        Route::get('home/facility', [FacilityController::class, 'Facility'])->name('facility');
        Route::get('home/facility/create', [FacilityController::class, 'facilityCreate'])->name('facility.create');
        Route::post('home/facility/create', [FacilityController::class, 'facilityStore'])->name('facility.store');
        Route::get('home/facility/edit/{id}', [FacilityController::class, 'facilityEdit'])->name('facility.edit');
        Route::post('home/facility/edit/{id}', [FacilityController::class, 'facilityUpdate'])->name('facility.update');
        Route::delete('/facility/destroy/{id}', [FacilityController::class, 'destroy'])->name('facility.destroy');

        //Offer
        Route::get('home/offer', [OfferController::class, 'Offer'])->name('offer');
        Route::get('home/offer/create', [OfferController::class, 'offerCreate'])->name('offer.create');
        Route::post('home/offer/create', [OfferController::class, 'offerStore'])->name('offer.store');
        Route::get('home/offer/edit/{id}', [OfferController::class, 'offerEdit'])->name('offer.edit');
        Route::post('home/offer/edit/{id}', [OfferController::class, 'offerUpdate'])->name('offer.update');
        Route::delete('/offer/destroy/{id}', [OfferController::class, 'destroy'])->name('offer.destroy');
        //Blog
        Route::get('home/blog', [BlogController::class, 'Blog'])->name('blog');
        Route::get('home/blog/create', [BlogController::class, 'blogCreate'])->name('blog.create');
        Route::post('home/blog/create', [BlogController::class, 'blogStore'])->name('blog.store');
        Route::get('home/blog/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit');
        Route::post('home/blog/edit/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
        Route::delete('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
        //Room
        Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
        Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
        Route::get('rooms/edit/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
        Route::post('rooms/edit/{id}', [RoomController::class, 'update'])->name('rooms.update');

        Route::get('rooms/photos/{id}', [RoomController::class, 'photos'])->name('rooms.photos');
        Route::post('rooms/photos/{id}', [RoomController::class, 'photosUpdate'])->name('rooms.photos.update');
        Route::delete('/rooms/photos/destroy/{id}', [RoomController::class, 'photosDestroy'])->name('rooms.photos.destroy');

        //Gallery
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
        Route::get('gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::post('gallery/edit/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');


        //logout
        Route::get('/logout', [Auth\LoginController ::class, 'logout'])->name('logout');
    });

});


