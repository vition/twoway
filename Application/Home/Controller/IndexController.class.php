<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$pages=M("tw_pages");
    	$data=$pages->select();

        //取项目t图片
        $project=M("tw_posts");
        $data=$project->where("posts_class=1")->limit('0,8')->order('posts_edit_time DESC')->select();
        $this->assign("project",$data);
    	$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	foreach($data as $value){
    		$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	}
		$this->display("./index");
    }
}