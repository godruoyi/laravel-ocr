<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Ocr config
    |--------------------------------------------------------------------------
    |
    | 目前支持的OCR服务商有 aliyun、baidu、tencent、tencentai 具体配置如下
    |
    */

    'ocrs' => [

        'baidu' => [
            'app_key' => 'app_key',
            'secret_key' => 'secret_key'
        ],

        'tencent' => [
            'app_id' => 'app_id',
            'secret_id' => 'secret_id',
            'secret_key' => 'secret_key',
            'bucket' => 'bucket'
        ],

        'tencentai' => [
            'app_id' => 'app_id',
            'app_key' => 'app_key',
        ],

        'aliyun' => [
            'appcode' => 'appcode',
        ]
    ]
];
