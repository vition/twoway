<?php
namespace Common;
class Tree {
	//原始数据
	private $treeDataOriginal;
	//id索引的数据
	private $treeDataId;
	//pid索引的数据
	private $treeDataPid;
	
	
	
	public function __construct($data){
		$this->treeDataOriginal=$data;
		foreach($this->treeDataOriginal as $val){
			$this->treeDataId[$val['id']]=$val;
			$this->treeDataPid[$val['pid']][$val['id']]=$val;
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
	



}	
