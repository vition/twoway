<?php
namespace Admin\Model;
use Think\Model;

class TwPostModel extends Model
{
	public function getList() {
		return $this->field('id,name')->select();
	}
}
