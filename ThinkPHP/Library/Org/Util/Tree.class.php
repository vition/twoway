<?php
namespace Org\Util;
class Tree {
	//原始数据
	private $treeDataOriginal;
	//id索引的数据
	private $treeDataId;
	//pid索引的数据
	private $treeDataPid;
	private $posterity;
	
	
	public function __construct($data){
		$this->treeDataOriginal=$data;
		foreach($this->treeDataOriginal as $val){
			$this->treeDataId[$val['id']]=$val;
			$this->treeDataPid[$val['pid']][$val['id']]=$val;
		}
	}
	//根据id获取子栏目
	public function getChildren($id){
		if(isset($this->treeDataPid[$id])){
			return $this->treeDataPid[$id];
		}else{
			return false;
		}
	}
	
	//获取顶级栏目
	public function getTop(){
		if(isset($this->treeDataPid[0])){
			return $this->treeDataPid[0];
		}else{
			return array();
		}
	}
	
	//递归解析子栏目
	private function parsePosterity($id){
		$children=$this->getChildren($id);
		if($children){
			foreach ($children as $val){
				$val['level']=count($this->getAncestor($val['id']));
				$val['style']=implode('',array_fill(0,$val['level'],'&nbsp;|&nbsp--&nbsp'));
				$this->posterity[$val['id']]=$val;
				$this->parsePosterity($val['id']);
			}
		}
	}
	
	//获取父栏目
	public function getParent($id){
		if(isset($this->treeDataId[$id]['pid'])){
			if(isset($this->treeDataId[$this->treeDataId[$id]['pid']])){
				return $this->treeDataId[$this->treeDataId[$id]['pid']];
			}else{
				return false;
			}
		}else{
			return false;
		}
	}	
	
	//获取祖先
	public function getAncestor($id){
		$tmp=array();
		while ($parent=$this->getParent($id)){
			$id=$parent['id'];
			$tmp[$id]=$parent;
		}
		return $tmp;
	}
	
	public function getAll(){
		$this->posterity=null;
		foreach ($this->getTop() as $val){
			$val['level']=0;
			$val['style']='';
			$this->posterity[$val['id']]=$val;
			$this->parsePosterity($val['id']);
		}
		return $this->posterity;
	}

	public function getpid(){
		return $this->treeDataPid;
	}
}	
