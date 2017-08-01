<?php
namespace Admin\Model;
use Think\Model;

class TwPostsModel extends Model
{
    public function checkSelect($name) {
        //根据ID获取一条记录
    	$sql = 'select * from tw_posts where posts_id ='.$name;
    	return $this->query($sql);    
    }

    public function newpostsUpdate($id,$posts_class,$posts_cover,$posts_title,$posts_tags,$posts_content) {
    	//根据ID修改一条记录
   
        $updateData = array(
            'posts_id'        =>  $id,
            'posts_class'  =>  $posts_class,
            'posts_cover'     =>  $posts_cover,
            'posts_title'     =>  $posts_title,
            'posts_tags'     =>  $posts_tags,
            'posts_content'     =>  $posts_content,
        );

        $id = $this->save($updateData);
        if ($id) {
            //写入日志
            $param = array(
                'user' => session('admin')['username'],
                'type' => '修改文章',
                'module' => '文章管理 >> 新建文章',

            );
            tag('log',$param);
        }
        return $id;       
  
    }
}
