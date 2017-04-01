<?php
namespace Home\Controller;
use Think\Controller;
class TempController extends Controller {
   public function index(){
	   $this->display("temp/index");
   }
}