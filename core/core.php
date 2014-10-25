<?php

defined('APP_ROOT') or define('APP_ROOT','../');   // 应用根目录
defined('RUNTIME_PATH') or define('RUNTIME_PATH',   APP_ROOT.'~runtime/');   // 系统运行时目录
defined('COMMON_PATH')  or define('COMMON_PATH',    APP_ROOT.'common/'); // 应用公共目录
defined('CONF_PATH')    or define('CONF_PATH',      APP_ROOT.'config/'); // 应用配置目录
defined('PUBLIC_PATH')    or define('PUBLIC_PATH',  'public'); // 应用配置目录
// 引入ThinkPHP入口文件

require 'rickeryu/ThinkPHP.php';
