<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    //登录页
    public function index()
    {
        if (session('admin'))
        {
            $this->redirect('Index/base');
        } else {
            $data = array();
            $data[]  = I('post.userpassword');
            $data[] = I('post.username');
            print_r($data);
            $this->display();
        }
    }
}