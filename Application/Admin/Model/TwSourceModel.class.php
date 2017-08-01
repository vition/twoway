<?php
namespace Admin\Model;
use Think\Model;

class TwSourceModel extends Model
{
	//新增操作
	public function addresource($url)
	{
        //原图
        $ori_url = blob2Img($url);
        $img = new \Org\Util\Img($ori_url);
        //缩小图片
        $min_url = $img->scaleImage(0.2);
        // return $min_url;
	    
        $addData = array(

	        'url'=> $ori_url,
	        'min_url' => substr($min_url, 8),
	    );

	    $id = $this->add($addData);

        if ($id) {
            //写入日志
            $param = array(
                'user' => session('admin')['username'],
                'type' => '新增资源',
                'module' => '资源管理 >> 资源上传',

            );
            tag('log',$param);
        }

	    return $id ? $id : 0;	    
	}

    public function getList() {
        return $this->select();
    }

    public function resourceDel($id) {

        $res = $this->delete($id);
        if ($res) {
            //写入日志
            $param = array(
                'user' => session('admin')['username'],
                'type' => '删除资源',
                'module' => '资源管理 >> 资源管理',

            );
            tag('log',$param);
        }
        return $res;


    }
	
}
