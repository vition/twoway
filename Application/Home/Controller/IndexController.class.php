<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$pages=M("tw_pages");
    	$adata=$pages->select();

        //取项目t图片
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=1")->limit('0,8')->order('posts_edit_time DESC')->select();
        $this->assign("project",$pdata);

        $cdata=$project->where("posts_class=2")->limit('0,5')->order('posts_edit_time DESC')->select();
        $this->assign("inside",$cdata);

        $tdata=$project->where("posts_class=3")->limit('0,5')->order('posts_edit_time DESC')->select();
        $this->assign("trade",$tdata);

    	foreach($adata as $value){
    		$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	}
		$this->display("./index");
    }
    public function page(){
        $param=get_param();
        if($param){
                $this->assign("postType","edit");
                $posts=M("tw_posts");
                $postData=$posts->where("posts_id={$param[0]}")->find();
                $this->assign("posts",$postData);
            }
        $this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
        $this->display("./page");
    }
}