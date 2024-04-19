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
        // Route::get('search','index')->name('search');
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
    Route::get('/','index')->name('home');
    // blogs
    Route::get('blogs','blogs');
    Route::get('blog/details/{blog}','blogDetails');
    Route::post('contact-us/store','contactStore')->name('contact-us.store');
    Route::get('service-details/{service}','serviceDetails')->name('service.details');
    Route::get('services/list','services')->name('services');

});


// Route::get('/', function () { return view('welcome'); })->name('home');

// home
// Route::view('/','screens.user.welcome')->name('home');
// about us
Route::view('/about-us','screens.user.frontend.about')->name('about-us');
// services
// Route::view('/repair-and-maintenance','screens.user.frontend.services.repair-and-maintenance')->name('repair-and-maintenance');
// Route::view('/rental-and-trade','screens.user.frontend.services.rental-and-trade')->name('rental-and-trade');
// Route::view('/diesel-pump-laboratory','screens.user.frontend.services.diesel-pump-laboratory')->name('diesel-pump-laboratory');
// Route::view('/steel-fabrication','screens.user.frontend.services.steel-fabrication')->name('steel-fabrication');
// Route::view('/services-list','screens.user.frontend.services.services')->name('services');
// Route::view('/repair-and-maintenance','screens.user.frontend.services.repair-and-maintenance')->name('repair-and-maintenance');
// Route::view('/diesel-pump-laboratory','screens.user.frontend.services.diesel-pump-laboratory')->name('diesel-pump-laboratory');
// Route::view('/rental-and-trade','screens.user.frontend.services.rental-and-trade')->name('rental-and-trade');
// Route::view('/steel-fabrication','screens.user.frontend.services.steel-fabrication')->name('steel-fabrication');
// INDUSTRIES SERVED
Route::view('/industries-surved','screens.user.frontend.industries-surved')->name('industries-surved');
// career
Route::view('/career','screens.user.frontend.career')->name('career');
// blogs
// Route::view('/blogs','screens.user.frontend.blogs.blogs')->name('blogs.index');
// Route::get('/blog/details/{id}',function($id){
//     return view('screens.user.frontend.blogs.blog-detail');
// });
// contact-us
Route::view('/contact','screens.user.frontend.contact-us')->name('contact-us');






Route::view('/dashboard','layouts.admin');
Route::view('/admin/brands','admin.brands.index');
Route::view('/admin/brands/create','admin.brands.create');
Route::view('/admin/brands/edit','admin.brands.edit');


// Route::view('/admin/services','admin.services.index');
// Route::view('/admin/services/create','admin.services.create');
// Route::view('/admin/services/edit','admin.services.edit');


Route::view('/master','layouts.app');
// Route::view('/services','services.service')->name('services');
Route::view('services/brake-repair','screens.user.services.brake-repair')->name('brake_repair');
Route::view('services/diagnostic','screens.user.services.diagnostic')->name('diagnostic');
Route::view('services/engine','screens.user.services.engines')->name('engine');
Route::view('services/exhaust-system','screens.user.services.exhaust-system')->name('exhaust_system');
Route::view('services/oil-change','screens.user.services.oil-change')->name('oil_change');
Route::view('services/tires-and-wheels','screens.user.services.tires-and-wheels')->name('tires_and_wheels');
// Route::view('/blogs','blogs')->name('blogs');
Route::view('/blog/detail','screens.user.blog-detail')->name('blog.detail');
// Route::view('/faqs','faq')->name('faq');
// Route::view('/reviews','reviews')->name('reviews');
Route::view('/about','screens.user.about')->name('about');
Route::view('/brand-detail','screens.user.brand_detail')->name('brand_detail');
Route::view('/brand/porsche','screens.user.brands.porsche')->name('brands.porsche');
Route::view('/brand/bmw','screens.user.brands.bmw')->name('brands.bmw');
Route::view('/brand/lexus','screens.user.brands.lexus')->name('brands.lexus');
Route::view('/brand/cheverolet','screens.user.brands.cheverolet')->name('brands.cheverolet');
Route::view('/brand/ford','screens.user.brands.ford')->name('brands.ford');
Route::view('/brand/rolls-royce','screens.user.brands.rolls-royce')->name('brands.RollsRoyce');

// Route::get('/',[AdminController::class, 'landingPage'])->name('home');
Route::post('/contact-us/form',[AdminController::class, 'contactSubmission'])->name('contact.submission');
Route::get('/reviews',[AdminController::class, 'getReviews'])->name('reviews');
Route::get('/faqs',[AdminController::class, 'getFaqs'])->name('faq');
Route::get('/contact-us',[AdminController::class, 'contactUs'])->name('contact_us');
Route::get('/about',[AdminController::class, 'aboutUs'])->name('about');
// Route::get('/services-detail',[AdminController::class, 'serviceDetail'])->name('services');
Route::get('/services/serving-garage',[AdminController::class, 'servingGarage'])->name('serving.garage');
Route::get('/services/body-shop',[AdminController::class, 'bodyShop'])->name('body.shop');
Route::get('/services/{id}/{url_slug}',[AdminController::class, 'servicesGet'])->name('services.get');
Route::get('/brands/{name}',[AdminController::class, 'brandsGet'])->name('brands.get');
Route::get('/brands',[AdminController::class, 'brandDetail'])->name('brands');
// Route::get('/blogs',[AdminController::class, 'blogsAll'])->name('blogs');
Route::get('/blog/{id}/{slug}',[AdminController::class, 'blogDetail'])->name('blog.get');

// Route::get('/master',[AdminController::class, 'getAllNavs']);


// guest routes
Route::controller(AuthController::class)->middleware('guest')->name('auth.')->group(function(){
    // Route::get('signup','signUp')->name('register');
    // Route::post('signup','registered')->name('registered');
    Route::get('login','loginView')->name('loginView');
    Route::post('login','login')->name('login');
    Route::post('logout','logout')->name('logout')->withoutMiddleware('guest');
});

