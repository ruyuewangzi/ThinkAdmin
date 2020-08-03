<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2020 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: https://thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 代码仓库：https://gitee.com/zoujingli/ThinkAdmin
// | github 代码仓库：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

// 模块配置文件
return [
    'name'    => 'admin',
    'author'  => 'Anyon',
    'version' => '2020.08.03.00',
    'content' => 'ThinkAdmin 系统基础模块',
    'changes' => [
        '2020.08.03.00' => [
            'content'  => '模块初始化提交',
            'database' => [
                'select version()',
            ],
        ],
    ],
];