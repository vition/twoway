<?php
namespace Admin\Controller;
use Think\Controller;
class PostController extends Controller {

	public function index() {

		// $post = D('TwPost');
		// print_r($post->getList()) ;
		$this->display();
	}

}