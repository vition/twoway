<?php
namespace Admin\Model;
use Think\Model;

class TwUserModel extends Model
{
    //自动验证
    protected $_validate = array(
        
        //职位被占用
        array('user_name', '', '帐号名称被占用', self::EXISTS_VALIDATE, 'unique', self::MODEL_INSERT),
       
        //确认密码是否与密码相同
        array('repassword', 'user_psw', '确认密码不正确', self::EXISTS_VALIDATE, 'confirm', self::MODEL_UPDATE),

        
    );
	
	//新增操作
	public function userRegister($name,$password,$repassword,$group)
	{

        $addData = array(
	        'user_name'    => $name,
	        'user_psw'     => $password,
            'repassword'   => $repassword,
            'user_group'   => $group,
	        'user_register'=> getTime()
	    );

        if ($this->create($addData)) {
            unset($addData['notpassword']);
            $addData['user_psw'] = sha1($password);
            $id = $this->add($addData);
            return $id ? $id : 0;
        }	    	    
	}

    //获取列表
    public function getlist() {
        return $this->field('user_id,user_name,user_group,user_register,user_last,user_login')->select();
    }
	
    public function update_password($id , $password) {
        $updateData = array(
            'user_id'        =>  $id,
            'user_psw'    =>  sha1($password)
        );

        return $this->save($updateData);
    }

	
}
