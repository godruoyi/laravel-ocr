<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Ocr config
    |--------------------------------------------------------------------------
    |
    | 目前支持的OCR服务商有 aliyun、baidu、tencent，具体配置如下
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

        'aliyun' => [
            'appcode' => 'appcode',
        ]
    ]
];
