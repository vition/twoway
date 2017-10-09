<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'  => 'mysql',// 数据库类型 
	'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'twoway',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'URL_MODEL'             =>  2,
    //允许访问的模块列表
    'MODULE_ALLOW_LIST'     =>  array('Home','Admin','Sh'),
);
// return array(
// 	//'配置项'=>'配置值'
// 	//URL访问模式
//     // 'URL_MODEL'             =>  2,
//     //允许访问的模块列表
//     // 'MODULE_ALLOW_LIST'     =>  array('Home','Admin','Common'),
// );