<?php
return [
    'name' => 'eBestMall',
    'version' => '1.0',
    'language'=>'zh-CN',
    'timeZone'=>'Asia/Shanghai',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'helper' => [
            'class' => 'common\components\Helper',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
