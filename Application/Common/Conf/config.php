<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'  => 'mysql',// 数据库类型 
	'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'twoway',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'APP_GROUP_LIST'		=>	'Home,Admin,Sh',
    'DEFAULT_GROUP'			=>	'Home',
    'APP_SUB_DOMAIN_DEPLOY' =>	1,
    'APP_SUB_DOMAIN_RULES'=>array(   
        'sh'=>array('Sh')  // sh域名指向Sh分组
    )
);
// return array(
// 	//'配置项'=>'配置值'
// 	//URL访问模式
//     // 'URL_MODEL'             =>  2,
//     //允许访问的模块列表
//     // 'MODULE_ALLOW_LIST'     =>  array('Home','Admin','Common'),
// );