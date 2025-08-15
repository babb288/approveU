<?php
// 事件定义文件
return [
    'bind'      => [
        'UserLogin' => 'app\admin\event\User'
    ],

    'listen'    => [
        'UserLogin'  => [
            'app\admin\listener\LogUserLogin'
        ],
    ],

    'subscribe' => [
        'app\admin\subscribe\User'
    ],
];
