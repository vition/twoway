<?php
namespace Admin\Model;
use Think\Model;

class TwUsermModel extends Model
{
	public function getList() {
		return $this->field('id,name,password')->select();
	}


	//新增操作
	public function register($name,$password)
	{
	    $addData = array(
	        'name'=>$name,
	        'password' => $password,
	        // 'create_time'=>getTime()
	    );

	    $id = $this->add($addData);
	    return $id ? $id : 0;	    
	}

	//根据ID集合删除记录
    public function remove($ids)
    {
        return $this->delete($ids);
    }

    //根据ID获取一条记录
    public function one($id) {
    	$map['id'] = $id;
    	return $this-> field('id,name,password') -> where($map) -> find();
    }

    //根据ID修改一条记录
    public function update($id,$name,$password)
    {
        $updateData = array(
            'id'        =>  $id,
            'password'  =>  $password,
            'name'     =>  $name
        );

        return $id = $this->save($updateData);       
    }

    public function checkUser ($accounts,$password) {
        // $CheckData = array(
        //     'accounts' => $accounts,
        //     'password' => $password
        // );

        $map = array(
            'accounts'  =>  $accounts,
            'password'  =>  $password
        );

        $res = $this-> where($map)->find();
        return $res;
    }

	
}
