<?php
// 系统首页
class IndexAction extends Action {
    //展示首页
    public function Index(){
   		//获取focus链接
   		$Focus	=	M("focus_img");
   		$where	= 	array("status"=>"1");
   		//读取焦点图
   		$this->info  =	$Focus->where($where)->select();
   		//显示模板
   		$this->display();
    }

    //申请页
    public function Appl(){
      //显示模板
      $this->display();
    }

    //大屏幕展示
    public function Show(){
      //显示模板
      $this->display();
    }
}