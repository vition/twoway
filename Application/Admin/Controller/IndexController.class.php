<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	// //判断登录
	// function islogin(){
	// 	if(session("isLogin")){

	// 	}
	// }
	//默认执行方法
    public function index(){
		if(session("isLogin")){
			$this->success('成功登录', get_controller().'/base',1);
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
				session("username",I("username"));
				$data=array("log_user"=>I("username"),"log_brief"=>"登录","log_content"=>I("username")."成功登录后台","log_date"=>date("Y-m-d H:i:s",time()));
				$this->logs()->insert($data);
				$this->success('成功登录', 'base',1);
				//$this->display("base");
			}else{
				$data=array("log_user"=>I("username"),"log_brief"=>"登录","log_content"=>I("username")."尝试登录后台，但是登录失败","log_date"=>date("Y-m-d H:i:s",time()));
				$this->logs()->insert($data);
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
	protected function logout(){
		session("isLogin",Null);
		session("username",Null);
		$this->success('退出成功', 'index');
	}
	//重定向call方法
	public function __call($method,$args){
		if(session("isLogin")){
			//parent::__call($method,$args);
			//把登陆者的所有信息传输过去
			$this->assign('user',$this->get_user(session("username")));

			//这样子做了一层保护，未登录的无法使用protected里的方法
			call_user_func($this->$method(), $args);
		}else{
			$this->success('请先登录', 'index');
		}
		
	}
	//获取全局配置
	protected function get_glob_config(){
		$Model=M("tw_config");
		$config=$Model->field("config_key,config_value")->select();
		return ($this->key_value($config));
	}
	//获取数据库转数组
	protected function key_value($array){
		$tempArray=array();
		foreach ($array as $item ){
			$tempArray[$item['config_key']]=$item['config_value'];
		}
		return $tempArray;
	}
	//基本配置
	protected function base(){
		if(!empty($_POST)){
			$config=M("tw_config");
			foreach($_POST as $key=>$value){
				$config->config_value=$value;
				$return+=$config->where("config_key='{$key}'")->save();
			}
			if($return>0){
				echo "成功修改配置！";
			}else{
				echo "没有修改任何数据！";
			}
		}else{
			$this->assign('config',$this->get_glob_config());
			$this->assign('webTitle',$this->get_web_title());
			$this->display("base");
		}
		
		
	}
	//高级配置
	protected function advconfig(){
		if(!empty($_POST)){
			$config=M("tw_config");
			$config->config_value="{$_POST["value"]}";
			$return=$config->where("config_key='{$_POST["type"]}'")->save();
			if($return>0){
				echo "成功修改配置！";
			}else{
				echo "没有修改任何数据！";
			}
		}else{
			$globConfig=$this->get_glob_config();
			$strArray=array("web_start","web_open_up","web_open_reg","web_comment","web_com_review");
			$adv=$this->change2check($globConfig,$strArray);
			$this->assign('webTitle',$this->get_web_title());
			$this->assign("advconfig",$adv);
			$this->display("advconfig");
		}
		
	}
	//转换高级配置选项
	protected function change2check($conArr,$strArr){
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
	protected function newposts(){
		$this->assign("active",ACTION_NAME);
		if(!empty($_POST)){
			//新增或者修改数据

			$data=array();
			$posts=M("tw_posts");
			$data["posts_author"]=session("username");
			foreach($_POST["data"] as $key=>$val){
				$data[$key]=$val;
			}
			$data["posts_class"]=$this->class_str2int($_POST["data"]["posts_class"]);  //转换分类
			if($_POST["cover-data"]!=""){
				$data["posts_cover"]=blob2Img($_POST["cover-data"]);//转换图片数据
			}
			
			if($_POST["post-type"]=="new"){//新建文章
				
			$posts->add($data);//添加数据
			
			}else{//修改文章
				$data["posts_edit_time"]=date("Y-m-d H:i:s");
				//print_r($param);
				$posts->where("posts_id={$_POST['posts_id']}")->save($data);//修改数据
				echo $posts->getLastSql();
			}
			
		}else{
			//初始化空白
			$param=get_param();
			if($param){
				$this->assign("postType","edit");
				$posts=M("tw_posts");
				$postData=$posts->where("posts_id={$param[0]}")->find();
				//dump($postData);
				$this->assign("posts",$postData);
			}
			$this->assign("class",$this->get_pclass());
			$this->assign('webTitle',$this->get_web_title());
			$this->display("newposts");
		}
		
	}
	//分类文本转数字
	function class_str2int($str){
		$class=M("tw_class");
		$classData=$class->where("class_name='{$str}'")->field("class_id")->select();
		return $classData[0]["class_id"];
	}
	//获取分类
	protected function get_pclass(){
		$twClass=M("tw_class");
		$data=$twClass->select();
		return($data);
	}
	//文章管理
	protected function postsman(){
		$posts=M("tw_posts");
		$lists=$posts->where("tw_posts.posts_class=tw_class.class_id")->table("tw_posts")->join("tw_class")->field("posts_id,class_name,posts_title,posts_content,posts_cover,posts_author,posts_create_time,posts_edit_time,posts_state,posts_tags")->order('posts_create_time DESC')->select();
		$this->assign("list",$lists);
		$this->display("postsman");
	}
	//分类管理
	protected function classman(){
		if(!empty($_POST)){
			$classMan=M("tw_class");
			if(isset($_POST["class_id"])){
				$classMan->where("class_id='{$_POST["class_id"]}'")->save($_POST["data"]);
			}else if(isset($_POST["del_id"])){
				$classMan->where("class_id='{$_POST["del_id"]}'")->delete();
			}else{
				$classMan->add($_POST["data"]);
			}
		}else{
			$pClass=$this->get_pclass();
			$this->assign("class",$pClass);
			$this->assign('webTitle',$this->get_web_title());
			$this->display("classman");
		}
		
	}
	//用户管理
	protected function userman(){
		$user=M("tw_user");
		$data=$user->where("tw_user.user_group=tw_group.group_id")->table("tw_user")->join("tw_group")->select();
		
		$this->assign("list",$data);
		$this->assign('webTitle',$this->get_web_title());
		$this->display("userman");
	}
	//获取分组
	protected function get_group(){
		$twGroup=M("tw_group");
		$data=$twGroup->select();
		return($data);
	}
	//分组管理
	protected function groupman(){
		$this->assign("list",$this->get_group());
		$this->assign("active",ACTION_NAME);
		$this->display("groupman");
	}
	//获取网站名称
	protected function get_web_title(){
		$config=M("tw_config");
		$data=$config->field("config_value")->where("config_key='web_name'")->select();
		return $data[0]["config_value"];
	}
	//新建页面
	protected function newpage(){
		if(!empty($_POST)){
			//新增或者修改数据
			$data=array();
			$posts=M("tw_pages");
			//print_r($_POST);
			foreach($_POST["data"] as $key=>$val){
				$data[$key]=$val;
			}

			if($_POST["cover-data"]!=""){
				$data["pages_cover"]=blob2Img($_POST["cover-data"]);//转换图片数据
			}
			$data["pages_date"]=date("Y-m-d H:i:s");
			if($_POST["pages-type"]=="new"){//新建文章
				create_html($_POST["data"]["pages_title"],$_POST["data"]["pages_content"]);
				$posts->add($data);//添加数据
			
			}else{//修改文章
				//print_r($param);
				create_html($_POST["data"]["pages_title"],$_POST["data"]["pages_content"]);
				$posts->where("pages_id={$_POST['pages_id']}")->save($data);//修改数据
				//echo $posts->getLastSql();
			}
			
		}else{
			$param=get_param();
			if($param){
				$this->assign("pagesType","edit");
				$pages=M("tw_pages");
				$pagesData=$pages->where("pages_id={$param[0]}")->find();
				//dump($pagesData);
				$this->assign("pages",$pagesData);
			}
			//初始化空白
			$this->assign('webTitle',$this->get_web_title());
			$this->display("newpage");
		}
		
	}
	//中文转英文字母
	protected function letter(){
		if(!empty($_POST)){
			import('Vendor.ChinesePinyin.ChinesePinyin');
			$Pinyin = new \ChinesePinyin();
			echo $Pinyin->encode($_POST["str"],True);
		}
	}
	//取用户信息
	protected function get_user($name){
		$user=M("tw_user  a");
		return $user->join("tw_group  b")->field("user_name,b.group_name  user_group,user_register,user_last,user_remark,user_avatar")->where("user_name='{$name}' AND a.user_group=b.group_id")->find();
	}
	//Banner管理
	protected function banner(){
		$banner=M("tw_banner");
		if(!empty($_POST)){
			switch ($_POST["type"]) {
				case 'getinfo':
					$data=$banner->field("banner_state,banner_sort,banner_title,banner_content,banner_imgurl,banner_url,banner_id")->where("banner_id={$_POST['data']['banner_id']}")->find();
					echo json_encode($data);
					break;
				case 'insert'://插入新的
				$banner->add($_POST["data"]);
				echo $banner->getLastSql();
				break;
				case 'update'://所有修改
				$banner->where("banner_id='{$_POST['id']}'")->save($_POST["data"]);
				echo $banner->getLastSql();
				break;
				case 'delete'://删除
				$banner->where("banner_id in (".rtrim($_POST['id'],",").")")->delete();
				break;
				case 'state';
				$banner->where("banner_id in (".rtrim($_POST['id'],",").")")->save(array("banner_state"=>$_POST['state']));
				echo $banner->getLastSql();
				break;
				default:
					# code...
					break;
			}
		}else{
			$banData=$banner->select();
			// if($banData['banner_state']==1){
			// 	$banData['banner_state']='checked';
			// }else{
			// 	$banData['banner_state']='';
			// }
			$this->assign("list",$banData);
			$this->display("banner");
		}
		
	}
	//这里放回一个日志类
	protected function logs(){
		import('Vendor.Logs.Logs');
		return new \Logs("tw_log");
	}

}


