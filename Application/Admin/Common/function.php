<?php
// +----------------------------------------------------------------------
// admin自定义函数
// +----------------------------------------------------------------------

//数字状态转文本状态
function ini_state($state){
    if($state>0){
		return "正常";
	}else{
		return "待审核";
	}
}
//获取当前控制器含域名路径函数
function get_controller(){
	if($_SERVER["HTTPS"]){
		$http="https://";
	}else{
		$http="http://";
	}
	return $http.$_SERVER["HTTP_HOST"].__CONTROLLER__;
}
