<?php
/**
 * 操作日志类
 */
class Logs {
    //把指定的日志表传输过去
    function __construct($table){
        $this->LogTable=M($table);
        return $this;
    }
    //新建日志,参数是一个数组
    public function insert($dataArray){
        $this->LogTable->add($dataArray);
    }
}