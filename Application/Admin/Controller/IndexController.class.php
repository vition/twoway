<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//默认执行方法
    public function index(){
		if(session("isLogin")){
			$this->success('成功登录', 'base',1);
		}else{
			$this->display("login");
		}
    }
	//判断登录方法
	public function login(){
		if(session("isLogin")){
			$this->success('已登录', 'base',1);
		}else{
			if($this->checklogin(I("username"),I("userpasswd"))){
				session("isLogin",True);
				$this->success('成功登录', 'base',1);
				//$this->display("base");
			}else{
				$this->error('请重新登录', 'index',1);
				//$this->display("login");
			}
		}
		
	}
	//检验提交用户名登录方法
	static function checklogin($username,$userpasswd){
		$Model=M("tw_user");
		$loginData=array("user_name"=>$username,"user_psw"=>strtoupper(sha1($userpasswd)));
		$data=$Model->where($loginData)->field("user_id")->select();
		if($data[0]["user_id"]>0){
			return True;
		}else{
			return False;
		}
	}
	//退出用户
	public function logout(){
		session("isLogin",Null);
		$this->success('退出成功', 'index');
	}
	//重定向call方法
	public function __call($method,$args){
		if(session("isLogin")){
			parent::__call($method,$args);
		}else{
			$this->success('请先登录', 'index');
		}
		
	}
	//获取全局配置
	public function get_glob_config(){
		$Model=M("tw_config");
		$config=$Model->field("config_key,config_value")->select();
		return ($this->key_value($config));
	}
	//获取数据库转数组
	public function key_value($array){
		$tempArray=array();
		foreach ($array as $item ){
			$tempArray[$item['config_key']]=$item['config_value'];
		}
		return $tempArray;
	}
	//基本配置
	public function base(){
		$this->assign('config',$this->get_glob_config());
		$this->display("base");
	}
	//高级配置
	public function advconfig(){
		$globConfig=$this->get_glob_config();
		
		$strArray=array("web_start","web_open_up","web_open_reg","web_comment","web_com_review");
		$adv=$this->change2check($globConfig,$strArray);

		$this->assign("advconfig",$adv);
		$this->display("advconfig");
	}
	//转换高级配置选项
	public function change2check($conArr,$strArr){
		$adv=array();
		foreach($strArr as $str){
			if($conArr[$str]=="true"){
				$adv[$str]=array("checked","");
			}else{
				$adv[$str]=array("","checked");
			}
		}
		return $adv;
	}
	//新建文章
	public function newposts(){
		$this->assign("class",$this->get_pclass());
		$this->display("newposts");
	}
	//获取分类
	public function get_pclass(){
		$twClass=M("tw_class");
		$data=$twClass->select();
		return($data);
	}
	//文章管理
	public function postsman(){
		$posts=M("tw_posts");
		$lists=$posts->where("tw_posts.posts_class=tw_class.class_id")->table("tw_posts")->join("tw_class")->field("posts_id,class_name,posts_title,posts_content,posts_cover,posts_author,posts_create_time,posts_edit_time,posts_state,posts_tags")->limit(0,10)->select();
		$this->assign("list",$lists);
		$this->display("postsman");
	}
	//分类管理
	public function classman(){
		$this->assign("class",$this->get_pclass());
		$this->display("classman");
	}
	//用户管理
	public function userman(){
		$user=M("tw_user");
		$data=$user->where("tw_user.user_group=tw_group.group_id")->table("tw_user")->join("tw_group")->select();
		
		$this->assign("list",$data);
		$this->display("userman");
	}
	//获取分组
	public function get_group(){
		$twGroup=M("tw_group");
		$data=$twGroup->select();
		return($data);
	}
	//分组管理
	public function groupman(){
		$this->assign("list",$this->get_group());
		$this->display("groupman");
	}
}


