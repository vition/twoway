<?php
namespace Admin\Common;
class Treem {
	//原始数据
	private $treeDataOriginal;
	//id索引的数据
	private $treeDataId;
	//pid索引的数据
	private $treeDataPid;
	
	
	
	public function __construct($data){
		$this->treeDataOriginal=$data;
		foreach($this->treeDataOriginal as $val1){
			foreach ($val1 as $key => $val2) {
				$this->treeDataId[$val2['id']]=$val2;
				// $this->treeDataPid[$val2['pid']][$val2['id']]=$val;
			}
			
		}
		return $this->treeDataOriginal;
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
