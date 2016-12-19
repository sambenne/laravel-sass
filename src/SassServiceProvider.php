<?php

    namespace SamBenne\LaravelSass;

    use Illuminate\Support\ServiceProvider;

    class SassServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap the application events.
         */
        public function boot()
        {
            $this->publishes([
                __DIR__.'/config/laravel-sass.php' => config_path('laravel-sass.php'),
            ]);
        }

        /**
         * Register the service provider.
         */
        public function register()
        {
            $configPath = __DIR__.'/config/laravel-sass.php';
            $this->mergeConfigFrom($configPath, 'laravel-sass');

            $this->app->bind('laravel-sass', function() {

                $options = $this->app->make('laravel-sass');
                $laravelSass = new LaravelSass($options);
                $laravelSass->setBasePath(realpath(base_path('public')));

                return $laravelSass;
            });
            $this->app->alias(LaravelSass::class, 'laravel-sass');
        }
    }