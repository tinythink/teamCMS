<?php
/**
 * 页面配置信息
 */
return [
    //分页数量
    'pagesize'=> 15,
    // 导航栏入口列表
    'column' => [
        [
            'name' => 'Gitlab',
            'url' => 'http://172.28.1.116:9999'
        ],
//        [
//            'name' => '吐槽论坛',
//            'url' => 'http://172.28.10.23'
//        ]
    ],
    'menu' => [
        /*[
            'id' => 1,
            'name' => '概况预览',
            'url' => 'dashboard',
            'submenu' => [
                [
                    'id' => 2,
                    'name' => '数据分析',
                    'url' => 'data/1',
                ],
                [
                    'id' => 3,
                    'name' => '数据报告',
                    'url' => 'data/2',
                ],
                [
                    'id' => 4,
                    'name' => '数据导出',
                    'url' => 'data/3',
                ]
            ]
        ],*/
        [
            'id' => 11,
            'name' => '业务相关',
            'url' => '',
            'submenu' => [
                [
                    'id' => 5,
                    'name' => 'H5页面管理',
                    'url' => 'pages',
                    'submenu' => [

                    ]
                ],
                [
                    'id' => 6,
                    'name' => '开源作品配置',
                    'url' => 'open',
                    'submenu' => [

                    ]
                ],
//                [
//                    'id' => 7,
//                    'name' => '账户审核',
//                    'url' => 'account',
//                    'submenu' => [
//
//                    ]
//                ],
//                [
//                    'id' => 8,
//                    'name' => '访问分析',
//                    'url' => 'website',
//                    'submenu' => [
//
//                    ]
//                ]
            ]
        ]
    ],
    'avatar' => 'uploads/avatar/default/avatar02.png'
];