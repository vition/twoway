<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页
    public function index(){
    	$pages=M("tw_pages");
    	$adata=$pages->select();
        //banner
        $banner=M("tw_banner");
        $bdats=$banner->where("banner_state=1")->order('banner_sort,banner_id ASC')->select();
        $this->assign("banner",$bdats);
        //取项目t图片
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=1")->limit('0,8')->order('posts_edit_time DESC')->select();
        $this->assign("project",$pdata);

        //查找公司内部消息
        $cdata=$project->where("posts_class=2")->limit('0,5')->order('posts_edit_time DESC')->select();
        $this->assign("inside",$cdata);

        //查找行业新闻
        $tdata=$project->where("posts_class=3")->limit('0,5')->order('posts_edit_time DESC')->select();
        $this->assign("trade",$tdata);

    	foreach($adata as $value){
    		$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	}
		$this->display("./index");
    }
    //内容页面
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
    //项目列表页面
    public function project(){
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=1")->order('posts_edit_time DESC')->select();
        $this->assign("project",$pdata);
        $this->display("./project");
    }
    //内部新闻
    public function company(){
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=2")->order('posts_edit_time DESC')->select();
        $this->assign("news",$pdata);
        $this->display("./news");
    }
    //行业新闻
    public function trade(){
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=3")->order('posts_edit_time DESC')->select();
        $this->assign("news",$pdata);
        $this->display("./news");
    }
}