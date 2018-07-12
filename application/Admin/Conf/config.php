<?php
return array(
	//'配置项'=>'配置值'


    //设置全局的css,js，images路径
    'TMPL_PARSE_STRING' => array(
        '__ADMINCSS__' => '/public/admin/css',
        '__ADMINJS__' => '/public/admin/js',
        '__ADMINIMAGES__' => '/public/admin/images',
    ),


    'URL_MODEL'=>2,

    'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'login', // 默认操作名称
);