<?php
namespace Admin\Model;
use Think\Model;

class TwLogModel extends Model
{
    //新增操作
    public function register($user, $type, $module)
    {
        $addData = array(
            'user'              =>  $user,
            'type'              =>  $type,
            'module'            =>  $module,
            'create_time'       =>  getTime()
        );

        // return($addData);
        $id = $this->add($addData);

        if ($id)
        {
            return $id;
        } else {
            return 0;
        }        
    }

    //获取列表
    public function getlist() {
        return $this->select();
    }
}
