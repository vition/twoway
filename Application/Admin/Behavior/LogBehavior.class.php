<?php
namespace Admin\Behavior;
use Think\Behavior;

class LogBehavior extends Behavior
{

    //行为方法，自动执行
    public function run(&$param)
    {
    	// echo $param['type'];
        $Log = D('TwLog');
        $Log->register($param['user'], $param['type'],$param['module']);
    }
}