<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _initialize(){
        $config=M("tw_config");
        $conData=$config->field("config_value")->where("config_key='web_name'")->find();
        $this->assign("webname",$conData['config_value']);

        $conData=$config->field("config_value")->where("config_key='web_footer'")->find();
        $this->assign("web_footer",$conData['config_value']);

        $conData=$config->field("config_value")->where("config_key='web_keys'")->find();
        $this->assign("webkeys",$conData['config_value']);

        $conData=$config->field("config_value")->where("config_key='web_description'")->find();
        $this->assign("webdescription",$conData['config_value']);

        $conData=$config->field("config_value")->where("config_key='web_start'")->find();
        if($conData['config_value']!="true"){
            $this->display("./lock");
            exit();
        }

    }
    //首页
    public function index(){
    	$pages=M("tw_pages");
    	$tdata=$pages->field("pages_content")->where("pages_title='TWOWAY'")->find();
        $this->assign("TWOWAY",$tdata);
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


    	// foreach($adata as $value){
    	// 	$this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
    	// }
		$this->display("./index");
    }
    //内容页面
    public function page(){
        $posts=M("tw_posts");
        if(IS_POST){
            $cname='plikes'.$_POST["id"];
            if(empty(cookie($cname))){
                $posts->where("posts_id={$_POST["id"]}")->setInc("posts_likes");
                $postId=$posts->field("posts_likes")->where("posts_id={$_POST["id"]}")->find();
                cookie($cname,'true',86400);
                echo json_encode(array("state"=>"success","msg"=>$postId["posts_likes"]));
            }else{
                echo json_encode(array("state"=>"error","msg"=>"您今天已点赞，明天再来吧！"));
            }
        }else{
            $param=get_param();
            if($param){
                    $posts->where("posts_id={$param[0]}")->setInc("posts_views");
                    $this->assign("postType","edit");
                    $postData=$posts->where("posts_id={$param[0]}")->find();
                    $this->assign("posts",$postData);
                    
                }

            $this->assign("about","./Public/html/".md5("关于TW页面标题").".html");
            $this->display("./page");
        }
        
    }
    //项目列表页面
    public function project(){
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=1")->order('posts_edit_time DESC')->select();
        $this->assign("project",$pdata);
        $this->display("./tw_config");
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