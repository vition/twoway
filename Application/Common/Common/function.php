<?php
// +----------------------------------------------------------------------
// admin自定义函数
// +----------------------------------------------------------------------
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
