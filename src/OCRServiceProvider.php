<?php

namespace Godruoyi\LaravelOCR;

use Godruoyi\OCR\Application;
use Illuminate\Support\ServiceProvider;

class OCRServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $root = dirname(__DIR__);

        if (!file_exists(config_path('ocr.php'))) {
            $this->publishes([
                $root.'/config/ocr.php' => config_path('ocr.php'),
            ], 'config');
        }
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/ocr.php', 'ocr');

        $this->app->singleton(Application::class, function () {
            return new Application(config('ocr'));
        });

        $this->app->alias(Application::class, 'ocr');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Application::class, 'ocr'];
    }
}
