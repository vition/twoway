<?php
namespace Admin\Controller;
use Think\Controller;
class UsermController extends Controller {

	public function index() {

		// $post = D('TwPost');
		// print_r($post->getList()) ;

		$this->display();
	}

	public function checklogin () {
		if (IS_AJAX)
        {
            $User = D('TwUserm');
            echo $User->checkUser(I('post.username'), I('post.password'));
        } else {
            $this->error('非法操作！');
        }
	}

}