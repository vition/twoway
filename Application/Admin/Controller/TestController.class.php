<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Tree;
class TestController extends Controller {

	public function __construct(){
		$this->model=new TypeModel();
		parent::__construct();
	}


    public function index(){
    	$tree = new Tree;
        $nav = D('TwDepart');
        $res = $nav->getList();


    }
}