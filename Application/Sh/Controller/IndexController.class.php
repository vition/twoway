<?php

/**
 * @Author: vition
 * @Date:   2017-10-09 15:01:49
 * @Last Modified by:   vition
 * @Last Modified time: 2017-10-09 15:17:15
 */
namespace Sh\Controller;
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
    public function index(){
        $project=M("tw_posts");
        $pdata=$project->where("posts_class=4")->order('posts_edit_time DESC')->select();
        $this->assign("project",$pdata);
        $this->display("./project");    	
    }
}