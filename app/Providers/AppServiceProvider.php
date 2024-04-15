<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // view()->share('appPages', Page::get());
        View::share('servicesData', Service::get());
        View::share('bannersData', Banner::get());
    }
}
