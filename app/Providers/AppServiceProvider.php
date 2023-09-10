<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\FileViewFinder;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('view.finder', function ($app) {
            $paths = [base_path('resources/views/themeOne')]; // Your subfolder path

            return new FileViewFinder($app['files'], $paths);
        });

        require_once app_path('helper.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__. '/../../resources/views/themeOne', 'themeOne');
    }
}
