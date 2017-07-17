<?php
namespace Admin\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
        $nav = D('TwNav');
        print_r($nav->getTree());
    }
}