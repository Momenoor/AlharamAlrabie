<?php

namespace App\Providers;

use App\Models\Category;
use App\Observers\CategoryObserver;
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
        /*$this->app->bind('view.finder', function ($app) {
            $paths = [base_path('resources/views/themeOne')]; // Your subfolder path

            return new FileViewFinder($app['files'], $paths);
        });*/

        require_once app_path('helper.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Category::observe(CategoryObserver::class);
        $this->loadViewsFrom(__DIR__. '/../../resources/views/themeOne', 'themeOne');
    }
}
