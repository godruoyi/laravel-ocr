<?php

namespace Godruoyi\LaravelOCR;

use Godruoyi\OCR\Application;
use Illuminate\Support\Facades\Facade;

class OCR extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return Application::class;
    }
}
