<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
	//默认执行方法
    public function index(){
		if(session("isLogin")){
			$this->display("index");
		}else{
			$this->display("login");
		}
       
    }
	//判断登录方法
	public function login(){
		if($this->checklogin(I("username"),I("userpasswd"))){
			session("isLogin",True);
			$this->display("index");
		}else{
			$this->display("login");
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
		$this->display("login");
	}
	//重定向call方法
	public function __call($method,$args){
		if(session("isLogin")){
			parent::__call($method,$args);
		}else{
			//$this->display("login");
			$this->success('新增成功', 'index');
		}
		
	}
}