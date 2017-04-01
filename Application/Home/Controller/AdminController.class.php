<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
       $this->display("login");
    }
}