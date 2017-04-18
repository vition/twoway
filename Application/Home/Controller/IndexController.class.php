<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
		$this->display("./index");
    }
}