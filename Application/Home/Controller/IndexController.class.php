<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$pages=M("tw_pages");
    	$data=$pages->select();

    	

    	$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	foreach($data as $value){
    		$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	}
		$this->display("./index");
    }
}