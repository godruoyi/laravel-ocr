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
     * Register any application services.
     */
    public function register()
    {
        $source = realpath(__DIR__.'/../config/ocr.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([$source => config_path('ocr.php')], 'ocr');
        }

        $this->mergeConfigFrom($source, 'ocr');

        $this->app->singleton(Application::class, function () {
            $ocrApp = new Application(config('ocr'));

            if (config('ocr.laravel_cache')) {
                $ocrApp->rebindCache(app('cache.store'));
            }

            return $ocrApp;
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
