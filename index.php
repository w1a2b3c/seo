<?php
/*
 * @Author        : 易航
 * @Url           : blog.bri6.cn
 * @Date          : 2020-09-29 13:18:36
 * @LastEditTime  : 2022-10-26 21:46:06
 * @Email         : 2136118039@qq.com
 * @Project       : 易航网址引导系统
 * @Description   : 一款极其优雅的易航网址引导系统
 * @Read me       : 感谢您使用易航网址引导系统，系统源码有详细的注释，支持二次开发。
 * @Remind        : 使用盗版系统会存在各种未知风险。支持正版，从我做起！
*/

use system\library\Route;
use system\theme\Method;
use system\library\System;
use system\theme\Manager;

require_once 'public/common.php';

$theme = empty($_GET['theme']) ? THEME : $_GET['theme'];

// 加载主题自定义路由
Manager::needFile('theme' . DIRECTORY_SEPARATOR . 'route', $theme);

// 注册主题路由
Route::rule('/[{mod}]', function ($param) use ($theme) {
	// 初始化主题方法并载入主题文件
	(new Method($theme))->__load($param['mod']);
}) === false ? System::response404() : true;