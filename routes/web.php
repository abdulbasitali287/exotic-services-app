<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PhoneNumberController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard','index')->name('admin.dashboard');
    });

    Route::prefix('banner')->name('banner.')->controller(BannerController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{banner}','edit')->name('edit');
        Route::put('update/{banner}','update')->name('update');
        Route::delete('destroy/{banner}','destroy')->name('destroy');
        Route::get('search','index')->name('search');
    });

    // Route::prefix('page')->name('page.')->controller(PageController::class)->group(function(){
    //     Route::get('/','index')->name('index');
    //     Route::get('create','create')->name('create');
    //     Route::post('store','store')->name('store');
    //     Route::get('edit/{page}','edit')->name('edit');
    //     Route::put('update/{page}','update')->name('update');
    //     Route::delete('destroy/{page}','destroy')->name('destroy');
    // });

    Route::prefix('blogs')->name('blog.')->controller(BlogsController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{blog}','edit')->name('edit');
        Route::put('update/{blog}','update')->name('update');
        Route::delete('destroy/{blog}','destroy')->name('destroy');
        Route::get('search','index')->name('search');
    });

    Route::prefix('faqs')->name('faqs.')->controller(FaqsController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{faq}','edit')->name('edit');
        Route::put('update/{faq}','update')->name('update');
        Route::delete('destroy/{faq}','destroy')->name('destroy');
    });

    Route::prefix('phone-number')->name('phone-number.')->controller(PhoneNumberController::class)->group(function(){
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
    });
    Route::prefix('contact-us')->name('contact-us.')->controller(ContactUsController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::delete('destroy/{contact}','destroy')->name('destroy');
    });

    Route::prefix('services')->name('service.')->controller(ServiceController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{service}','edit')->name('edit');
        Route::put('update/{service}','update')->name('update');
        Route::delete('destroy/{service}','destroy')->name('destroy');
    });

    Route::prefix('reviews')->name('reviews.')->controller(ReviewController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
        Route::get('edit/{review}','edit')->name('edit');
        Route::put('update/{review}','update')->name('update');
        Route::delete('destroy/{review}','destroy')->name('destroy');
    });
});

Route::controller(HomeController::class)->group(function(){
    // home page
    Route::get('/','index')->name('home');
    // blogs
    Route::get('blogs','blogs');
    Route::get('blog/details/{blog}','blogDetails');
    // contact form submission
    Route::post('contact-us/store','contactStore')->name('contact-us.store');
    // services
    Route::get('service-details/{service}','serviceDetails')->name('service.details');
    Route::get('services/list','services')->name('services');
    // reviews
    Route::get('reviews','reviews')->name('reviews');
    // about-us
    Route::get('about-us','aboutUs')->name('about-us');
    // industries served
    Route::get('industries-surved','industriesServed')->name('industries-surved');
    // career
    Route::get('career','career')->name('career');
    // contact us
    Route::get('contact','contactUs')->name('contact-us');

});

// guest routes
Route::controller(AuthController::class)->middleware('guest')->name('auth.')->group(function(){
    Route::get('login','loginView')->name('loginView');
    Route::post('login','login')->name('login');
    Route::post('logout','logout')->name('logout')->withoutMiddleware('guest');
});

