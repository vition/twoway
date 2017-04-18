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
//获取当前参数
function get_param(){
	$action=__ACTION__;
	$actionArr=explode("/",$action);
	if(!empty($actionArr[count($actionArr)-1])){
		$info=__INFO__;
		$infoArr=explode($actionArr[count($actionArr)-1]."/",$info);
		if(count($infoArr)>1){
			$paramArr=explode("/",$infoArr[1]);
			return $paramArr;
		}else{
			return false;
		} 
	}else{
		return false;
	}
}
//data转换成文件
function blob2Img($blob,$dir="./Public/upload/images/"){
	//获取到一个data:image/jpeg;base64,数据
	$head_data=explode(",",$blob);
	$headSB=explode(";",$head_data[0]);
	$headS=explode("/",$headSB[0]);
	$suffix=$headS[1];
	$base64=base64_decode($head_data[1]);
	$imgname=round(time()+microtime(),5).".".$suffix;
	$resource = fopen($dir.$imgname , 'w+');  
	fwrite($resource, $base64);  
	fclose($resource); 
	return $dir.$imgname;
}
//新建html文件
function create_html($name,$html,$url="./Public/html/"){
	$fileName=md5($name).".html";
	$file = fopen($url.$fileName , 'w+');
	fwrite($file,$html);
	fclose($file);
}
