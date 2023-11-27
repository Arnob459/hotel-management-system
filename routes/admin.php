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

        //Banner
        Route::get('home/banner', [BannerController::class, 'Banner'])->name('banner');
        Route::post('home/banner', [BannerController::class, 'bannerUpdate'])->name('banner.update');

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
        //Room Type
        Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
        Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
        Route::get('rooms/edit/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
        Route::post('rooms/edit/{id}', [RoomController::class, 'update'])->name('rooms.update');

        Route::get('rooms/photos/{id}', [RoomController::class, 'photos'])->name('rooms.photos');
        Route::post('rooms/photos/{id}', [RoomController::class, 'photosUpdate'])->name('rooms.photos.update');
        Route::delete('/rooms/photos/destroy/{id}', [RoomController::class, 'photosDestroy'])->name('rooms.photos.destroy');

        //Room Type
        Route::get('/room', [RoomController::class, 'roomIndex'])->name('room.index');
        Route::get('/room/create', [RoomController::class, 'roomCreate'])->name('room.create');
        Route::post('/room', [RoomController::class, 'roomStore'])->name('room.store');
        Route::get('room/edit/{id}', [RoomController::class, 'roomEdit'])->name('room.edit');
        Route::post('room/edit/{id}', [RoomController::class, 'roomUpdate'])->name('room.update');
        Route::delete('/room/destroy/{id}', [RoomController::class, 'roomDestroy'])->name('room.destroy');


        //Gallery
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
        Route::get('gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::post('gallery/edit/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

        //Testimonial
        Route::get('home/testimonial', [TestimonialController::class, 'Testimonial'])->name('testimonial');
        Route::get('home/testimonial/create', [TestimonialController::class, 'testimonialCreate'])->name('testimonial.create');
        Route::post('home/testimonial/create', [TestimonialController::class, 'testimonialStore'])->name('testimonial.store');
        Route::get('home/testimonial/edit/{id}', [TestimonialController::class, 'testimonialEdit'])->name('testimonial.edit');
        Route::post('home/testimonial/edit/{id}', [TestimonialController::class, 'testimonialUpdate'])->name('testimonial.update');
        Route::delete('/testimonial/destroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
        //Basic Settings

        //Basic
        Route::get('settings/basic', [BasicSettingController::class, 'basic'])->name('settings');
        Route::post('settings/basic', [BasicSettingController::class, 'basicUpdate'])->name('settings.basic');

        //logo
        Route::get('settings/logo-favicon', [BasicSettingController::class, 'logo_favicon'])->name('logo');
        Route::post('settings/logo-favicon', [BasicSettingController::class, 'logo_favicon_update'])->name('settings.logo');

        //Contact
        Route::get('settings/contact', [BasicSettingController::class, 'contact'])->name('contact');
        Route::post('settings/contact', [BasicSettingController::class, 'contactUpdate'])->name('settings.contact');

        //Breadcrumb
        Route::get('settings/breadcrumb', [BasicSettingController::class, 'breadcrumb'])->name('breadcrumb');
        Route::post('settings/breadcrumb', [BasicSettingController::class, 'breadcrumbUpdate'])->name('settings.breadcrumb');

        //Social
        Route::get('settings/social/create', [SocialController::class, 'index'])->name('social.create');
        Route::post('settings/social/create', [SocialController::class, 'store'])->name('settings.social.store');
        Route::get('settings/social/edit/{id}', [SocialController::class, 'edit'])->name('settings.social.edit');
        Route::post('settings/social/edit/{id}', [SocialController::class, 'update'])->name('settings.social.update');
        Route::delete('/social/destroy/{id}', [SocialController::class, 'destroy'])->name('settings.social.destroy');

        //Footer
        Route::get('settings/footer', [BasicSettingController::class, 'footer'])->name('footer');
        Route::post('settings/footer', [BasicSettingController::class, 'footerUpdate'])->name('settings.footer');

        //End Basic Settings

        //logout
        Route::get('/logout', [Auth\LoginController ::class, 'logout'])->name('logout');
    });

});


