<?php
namespace Admin\Controller;

class LogController extends Controller
{

    //加载数据列表
    public function getList()
    {
        if (IS_AJAX)
        {
            $Log = D('Log');
            $this->ajaxReturn($Log->getList(I('post.page'), I('post.rows'), I('post.sort'), I('post.order'),
                                               I('post.type'), I('post.dateType'), I('post.dateFrom'), I('post.dateTo')));
        } else {
            $this->error('非法操作！');
        }
    }

}