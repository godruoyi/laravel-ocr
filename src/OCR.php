<?php

namespace Godruoyi\LaravelOCR;

use Godruoyi\OCR\Application;
use Godruoyi\OCR\Contracts\Client;
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

    /**
     * Aliyun client.
     *
     * @return \Godruoyi\OCR\Contracts\Client
     */
    public static function aliyun()
    {
        return static::$app['ocr']->aliyun;
    }

    /**
     * Baidu Client.
     *
     * @return \Godruoyi\OCR\Contracts\Client
     */
    public static function baidu()
    {
        return static::$app['ocr']->baidu;
    }

    /**
     * Tencent Client.
     *
     * @return \Godruoyi\OCR\Contracts\Client
     */
    public static function tencent()
    {
        return static::$app['ocr']->tencent;
    }
}
