<?php
namespace Admin\Model;
use Think\Model;

class TwNavModel extends Model
{

    public function getTree()
    {

        $tree = array();

        $object = $this->select();
        
        //将所有主节点筛选出来
        foreach ($object as $key=>$value)
        {
            if ($value['nid'] == 0)
            {
                $tree[] = $value;
            }
        }

        //将所有子节点合并到对应的主节点中
        foreach ($tree as $treeKey=>$treeValue)
        {
            foreach ($object as $objectKey=>$objectValue)
            {
                if ($treeValue['id'] == $objectValue['nid'])
                {
                    $tree[$treeKey]['children'][] = $objectValue;
                }
            }
        }
        
        return $tree;

    }

}