<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Upload;
use Common\Tree;
class TestController extends Controller {

	// public function __construct(){
	// 	$this->model=new TypeModel();
	// 	parent::__construct();
	// }


    public function index(){
    	echo 1;
    	// $tree = new Tree;
     //    $nav = D('TwDepart');
     //    $res = $nav->getList();
    }

    public function upload() {
        $this->display();
        $Upload = new Upload();
        $Upload->rootPath = C('UPLOAD_PATH');
        $info = $Upload->upload();
        if ($info) {
            print_r($info['Filedata']);
        } else {
            echo $Upload->getError();
        }
    }
}