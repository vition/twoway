<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	// //判断登录
	// function islogin(){
	// 	if(session("isLogin")){

	// 	}
	// }
	
	
	//获取导航条
	public function getNav() {
		echo 11;
	} 
	
	//默认执行方法
    public function index(){
		if(session("isLogin")){
			$this->redirect('base');
			//$this->success('成功登录', get_controller().'/base',1);
		}else{

			$this->display("login");
		}
    }
	//判断登录方法
	public function login(){
		if(session("isLogin")){
			//$this->success('已登录', 'base',1);
			$this->redirect('base');

		}else{
			if($this->checklogin(I("username"),I("userpasswd"))){
				// session("isLogin",True);
				// session("username",I("username"));
				$data=array("log_user"=>I("username"),"log_brief"=>"登录","log_content"=>I("username")."成功登录后台","log_date"=>date("Y-m-d H:i:s",time()));

				$user=M("tw_user");
				$user->where("user_name='".I("username")."'")->setInc("user_login");
				// $this->logs()->insert($data);
				//$this->success('成功登录', 'base',1);
				$this->redirect('base');
				//$this->display("base");
			}else{
				$data=array("log_user"=>I("username"),"log_brief"=>"登录","log_content"=>I("username")."尝试登录后台，但是登录失败","log_date"=>date("Y-m-d H:i:s",time()));
				// $this->logs()->insert($data);
				$this->error('请重新登录', 'index',1);
				//$this->display("login");
			}
		}
		
	}
	//检验提交用户名登录方法
	static function checklogin($username,$userpasswd){
		$Model=M("tw_user");
		$loginData=array("user_name"=>$username,"user_psw"=>strtoupper(sha1($userpasswd)));
		$data=$Model->where($loginData)->field("user_id,user_name,user_access")->select();
		if($data[0]["user_id"]>0){
			session("isLogin",True);
			session('admin', array(
                'access'        =>  $data[0]["user_access"],
                'username'  =>  $data[0]["user_name"],
            ));
			//写入日志
			$param = array(
				'user' => session('admin')['username'],
				'type' => '登录系统',
				'module' => '人事管理 >> 登录账号',

			);
			tag('log',$param);
			

			return True;
		}else{
			return False;
		}
	}
	//退出用户
	protected function logout(){
		session("isLogin",Null);
		session('admin', null);
		$this->success('退出成功', 'index');
	}
	//重定向call方法
	public function __call($method,$args){
		if(session("isLogin")){
			//parent::__call($method,$args);
			//把登陆者的所有信息传输过去
			

			//这样子做了一层保护，未登录的无法使用protected里的方法
			if (method_exists($this,$method)){
				$this->assign('user',$this->get_user(session("username")));
				call_user_func($this->$method(), $args);
			}else{
				$this->error("该页面尚未开放完成");
			}
			
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
			// print_r($_SESSION);
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
		echo $data["posts_cover"];
		// print_r($_POST);
		// print_r($this->get_pclass());
		$this->assign("active",ACTION_NAME);
		if(!empty($_POST)){
			//新增或者修改数据

			$data=array();
			$posts=M("tw_posts");
			
			$data["posts_author"]=session('admin')['username'];
			foreach($_POST["data"] as $key=>$val){
				$data[$key]=$val;
			}
			$data["posts_class"]=$this->class_str2int($_POST["data"]["posts_class"]);  //转换分类
			if($_POST["cover-data"]!=""){
				// die(print_r($_POST));
				$data["posts_cover"] = blob2Img($_POST["cover-data"]);
				
				$img = new \Org\Util\Img($data["posts_cover"]);
				

				$data["posts_cover"] = $img->fixSizeImage(676,460);
				 //$data["posts_cover"] = blob2Img($_POST["cover-data"]);//转换图片数据
				// $data["posts_cover"] = $_POST["cover-data"];

			}
			
			if($_POST["post-type"]=="new"){//新建文章

				$findPosts=$posts->field("posts_id")->where("posts_title='{$_POST["data"]["posts_title"]}'")->find();
				if($findPosts["posts_id"]>0){
					echo "文章已存在或者标题重复了";
				}else{
					$data["posts_create_time"]=date("Y-m-d H:i:s",time());	
					$data["posts_edit_time"]=date("Y-m-d H:i:s",time());
					// die(print_r($_POST));	
					$res = $posts->add($data);//添加数据
					if ($res) {
						//写入日志
			            $param = array(
			                'user' => session('admin')['username'],
			                'type' => '新建文章',
			                'module' => '文章管理 >> 新建文章',

			            );
			            tag('log',$param);
					}
				}
			
			
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
				print_r($_POST["data"]);
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
	//新建用户
	protected function newuser(){
		$user=M("tw_user");
		if(!empty($_POST)){
			if($_POST["type"]=="new"){//新建用户
				$_POST["data"]["user_psw"]=strtoupper(sha1($_POST["type"]["user_psw"]));
				$_POST["data"]["user_register"]=date("Y-m-d H:i:s",time());
				$_POST["data"]["user_last"]=date("Y-m-d H:i:s",time());
				$_POST["data"]["user_login"]=0;
				$_POST["data"]["user_state"]=$_POST["data"]["user_state"]=="on"?'1':'0';
				$_POST["data"]["user_avatar"]="Temp/dist/img/avatar.png";
				$user->add($_POST["data"]);	
			}else{//其他皆为修改

			}
		}else{
			$param=get_param();
			if($param){
				$this->assign("postType","edit");
				$userData=$user->where("user_id={$param[0]}")->find();
				// dump($pagesData);
				$userData["user_state"]=$userData["user_state"]==1?"checked":"nochecked";

				$this->assign("userinfo",$userData);
			}
			$group=M("tw_group");
			$groupData=$group->select();
			$this->assign("groups",$groupData);
			$this->display("newuser");
		}
		
	}
	//用户管理
	protected function userman(){
		$user=M("tw_user");
		$data=$user->where("tw_user.user_group=tw_group.group_id")->table("tw_user")->join("tw_group")->select();
		
		$this->assign("list",$data);
		$this->assign('webTitle',$this->get_web_title());
		// $this->display("userman");
	}
	//获取分组
	protected function get_group(){
		$twGroup=M("tw_group");
		$data=$twGroup->select();
		return($data);
	}
	//分组管理
	protected function groupman(){
		if(!empty($_POST)){
			$groupMan=M("tw_group");
			if(isset($_POST["group_id"])){
				print_r($_POST["data"]);
				$groupMan->where("group_id='{$_POST["group_id"]}'")->save($_POST["data"]);
			}else if(isset($_POST["del_id"])){
				$groupMan->where("group_id='{$_POST["del_id"]}'")->delete();
			}else{
				$groupMan->add($_POST["data"]);
			}
		}else{
			$this->assign("grouplist",$this->get_group());
			$this->assign("active",ACTION_NAME);
			$this->display("groupman");
		}
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
			$pages=M("tw_pages");
			//print_r($_POST);
			foreach($_POST["data"] as $key=>$val){
				$data[$key]=$val;
			}

			if($_POST["cover-data"]!=""){
				$data["pages_cover"]=blob2Img($_POST["cover-data"]);//转换图片数据
			}
			$data["pages_date"]=date("Y-m-d H:i:s");
			if($_POST["pages-type"]=="new"){//新建文章
				$findPages=$pages->field("pages_id")->where("pages_title='{$_POST["data"]["pages_title"]}'")->find();
				if($findPages["pages_id"]>0){
					echo "页面已存在或者标题重复了";
				}else{
					create_html($_POST["data"]["pages_title"],$_POST["data"]["pages_content"]);
					$pages->add($data);//添加数据
				}
				
			
			}else{//修改文章
				//print_r($param);
				create_html($_POST["data"]["pages_title"],$_POST["data"]["pages_content"]);
				$pages->where("pages_id={$_POST['pages_id']}")->save($data);//修改数据
				//echo $posts->getLastSql();
			}	
		}else{
			$param=get_param();
			if($param){
				$this->assign("pagesType","edit");
				$pages=M("tw_pages");
				$pagesData=$pages->where("pages_id={$param[0]}")->find();
				// dump($pagesData);
				$this->assign("pages",$pagesData);
			}
			//初始化空白
			$this->assign('webTitle',$this->get_web_title());
			$this->display("newpage");
		}
		
	}
	//页面管理
	protected function pagesman(){
		$pages=M("tw_pages");
		$lists=$pages->order('pages_date DESC')->select();
		$this->assign("pagesList",$lists);
		$this->display("pagesman");
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
	//模板修改类
	protected function template(){
		if (!empty($_POST)) {
			if($_POST["type"]=="gethtml"){
				echo file_get_contents(APP_PATH."/Home/View/".$_POST["htmlfile"]);
			}elseif($_POST["type"]=="uphtml"){

				//delete(APP_PATH."/Home/View/".$_POST["htmlfile"]);
				$htmlFile=fopen(APP_PATH."/Home/View/".$_POST["htmlfile"], "w");
				fread($htmlFile, filesize(APP_PATH."/Home/View/".$_POST["htmlfile"]));
				fwrite($htmlFile, $_POST["html"]);
				fclose($htmlFile);
				//echo file_put_contents(APP_PATH."/Home/View/".$_POST["htmlfile"], $_POST["html"]);

				// $htmlFile=fopen(APP_PATH."/Home/View/".$_POST["htmlfile"][0], "w");
				// $old=md5(fread($htmlFile, filesize(APP_PATH."/Home/View/".$_POST["htmlfile"][0])));
				// $state=fwrite($htmlFile, $_POST["html"]);
				// fclose($htmlFile);
				// 換個方式寫
				$old=md5(file_get_contents(APP_PATH."/Home/View/".$_POST["htmlfile"][0]));
				file_put_contents(APP_PATH."/Home/View/".$_POST["htmlfile"][0], $_POST["html"]);
				$new=md5(file_get_contents(APP_PATH."/Home/View/".$_POST["htmlfile"][0]));
				if($old==$new) echo "更新失敗";else echo "更新成功";

			}
		}else{
			$htmlFiles=scandir(APP_PATH."/Home/View");
			$htmls=array();
			for($i=0;$i<count($htmlFiles);$i++){
				preg_match("/[\S]*\.html$/", $htmlFiles[$i],$machts);
				if(!empty($machts)){
					array_push($htmls,$machts[0]);
				}
			}
			$this->assign("templates",$htmls);
			$this->display("template");
		}
	}
	//这里放回一个日志类
	// protected function logs(){
	// 	import('Vendor.Logs.Logs');
	// 	return new \Logs("tw_log");
	// }

	

	//获取员工列表
	protected function account_getList() {
		$post = D('TwUserm');
		$res = $post->getList();
		$this->assign('res',$res);
		$this->display('Userm/index');
	}

	public function addUserm() {
		if (IS_AJAX)
        {
            $Userm = D('TwUserm');
            echo $Userm->register(I('post.user'),I('post.password'));
        } else {
            $this->error('非法操作！');
        }
	}

	public function remove() {
		if (IS_AJAX)
        {
            $Userm = D('TwUserm');
            echo $Userm->remove(I('post.ids'));
        } else {
            $this->error('非法操作！');
        }
	}

	public function one() {
		if (IS_AJAX)
        {
            $Userm = D('TwUserm');
            $this->ajaxReturn( $Userm->one(I('post.id')));
        } else {
            $this->error('非法操作！');
        }
	}

	//根据ID修改一条记录
    public function update()
    {
        if (IS_AJAX)
        {
            $Client = D('TwUserm');
            echo $Client->update(I('post.id'), I('post.name'), I('post.password'));
        } else {
            $this->error('非法操作！');
        }
    }

	//获取档案列表
	protected function staff_getlist() {

		$post = D('TwStaff');
		$res = $post->getlist();
		$tree = new \Org\Util\Tree($res);
		$res = $tree->getAll();
		$this->assign('res',$res);
		$this->display('Staff/index');
	}

	//获取档案列表
	protected function depart_getlist() {

		$post = D('TwStaff');
		$res = $post->getlist();
		$tree = new \Org\Util\Tree($res);
		$res = $tree->getAll();
		
		

		
		$this->assign('res',$res);
		$this->display('Depart/index');
	}
	
	public function findselect() {
		if (IS_AJAX)
        {
            $User = D('TwPosts');
            $this->ajaxReturn( $User->checkSelect(I('post.select')) ) ;
        } else {
            $this->error('非法操作！');
        }
	}

	public function newpostsUpdate() {
		if (IS_AJAX)
        {
            $User = D('TwPosts');
            echo $User->newpostsUpdate(I('post.id'),I('post.posts_class'),
            						   I('post.posts_cover'),I('post.posts_title'),
            						   I('post.posts_tags'),I('post.posts_content'));
        } else {
            $this->error('非法操作！');
        }
	}

	//资源加载列表
	public function resource() {
		$User = D('TwSource');          
        $res = $User->getList();
        $this->assign('list',$res);
		$this->display();
	}


	public function updatasource () {

		$this->display();
	}

	//上传资源
	public function addresource() {
		if (IS_AJAX)
        {
            $User = D('TwSource');          
            echo $User->addresource(I('post.cover-data'));
        } else {
            $this->error('非法操作！');
        }
		
	}

	//删除资源
	public function resourceDel () {
		if (IS_AJAX)
        {
            $User = D('TwSource');          
            echo $User->resourceDel(I('post.id'));
        } else {
            $this->error('非法操作！');
        }
	}

	//日志查看
	public function logsman () {
		
		$User = D('TwLog');          
        $res = $User->getlist();
        $this->assign('list',$res);
        $this->display();
	}

}


