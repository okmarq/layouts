<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('aside-layout', AsideLayout::class);
        Blade::component('content-layout', ContentLayout::class);
        Blade::component('footer-layout', FooterLayout::class);
        Blade::component('header-layout', HeaderLayout::class);
    }
}
