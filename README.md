<h1 align="center"> Laravel OCR </h1>

<p align="center"> The Best Image Ocr SDK For BAT.</p>

## 安装

```shell
composer require godruoyi/laravel-ocr
```

### 添加别名

```php
// config/app.php

'OCR' => Godruoyi\LaravelOCR\OCR::class,
```
### 发布配置文件

```shell
php artisan vendor:publish --provider="Godruoyi\LaravelOCR\OCRServiceProvider"
```

## 使用

```php
use OCR;

// 身份证识别
OCR::baidu()->idcard($filePath);
```

更多 SDK 使用请参考： 

* [使用 Wiki](https://github.com/godruoyi/ocr)

## License

MIT
