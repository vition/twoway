<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//全局配置项
	protected $globConfig;
	//默认执行方法
    public function index(){	
		if(session("isLogin")){
			//$this->display("base");
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
	public function get_glob_config($cover=false){
		if($cover==True || empty($this->globConfig)){
			$Model=M("tw_config");
			$config=$Model->field("config_key,config_value")->select();
			$this->globConfig=$config;
		}
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
		$this->get_glob_config();
		$config=$this->key_value($this->globConfig);
		//dump($config);
		$this->assign('config',$this->key_value($this->globConfig));
		$this->display("base");
	}
	//高级配置
	public function advconfig(){
		
	}
}