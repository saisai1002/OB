<?php
/**
 * Created by PhpStorm.
 * User: lss
 * Date: 2018/7/11
 * Time: 上午10:12
 */
//1.定义项目路径，也就是我们开发项目的根目录
define('APP_PATH','./application/');



//开启调试模式，项目开发过程中可以看见详细的错误信息
define('APP_DEBUG',true);




//2.引入thinkPHP的核心入口文件
include_once('ThinkPHP/ThinkPHP.php');
