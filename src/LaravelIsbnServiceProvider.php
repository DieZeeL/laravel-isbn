<?php

namespace Diezeel\LaravelIsbn;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelIsbnServiceProvider extends ServiceProvider
{
    private const CONFIG_PATH = __DIR__ . '/../config/laravel-isbn.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('laravel-isbn.php'),
        ], 'config');

        Blade::directive('isbn', function ($expression) {
            return "<?php echo (Diezeel\LaravelIsbn\Isbn::of($expression))->format(); ?>";
        });
        Blade::directive('isbn10', function ($expression) {
            return "<?php echo (Diezeel\LaravelIsbn\Isbn::of($expression))->to10()->format(); ?>";
        });
        Blade::directive('isbn13', function ($expression) {
            return "<?php echo (Diezeel\LaravelIsbn\Isbn::of($expression))->to13()->format(); ?>";
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'laravel-isbn'
        );

//        $this->app->bind('isbn', function () {
//            return new Isbn();
//        });
    }
}
