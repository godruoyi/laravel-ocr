<h1 align="center"> Laravel OCR </h1>

<p align="center"> The Best Image Ocr SDK For BAT.</p>

## 安装

```shell
composer require godruoyi/laravel-ocr
```

> `laravel5.5` 已支持包自动发现.

如果你使用的版本小于 `5.5`

### 添加服务提供者

```php
// config/app.php

Godruoyi\LaravelOCR\OCRServiceProvider::class,
```

### 添加别名

> 推荐使用别名方式

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

更多 SDK 的具体使用请参考： [https://github.com/godruoyi/ocr](https://github.com/godruoyi/ocr)

## License

MIT
