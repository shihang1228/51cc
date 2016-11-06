<?php
namespace Manage\Controller;
use Home\Model\NewsModel;
use Think\Controller;

class NewsController extends Controller {
    public function index(){
        $this->display();
    }
	
	//首页显示咨询列表ajax请求后台
	Public function lists_bgd(){
		$page = I("post.page",1);
		$pageSize = I("post.rows",10);
		$search = I('post.searchtext','');
		$tb = new NewsModel();
		$ret = $tb->getList($page,$pageSize,$search);  //第一个参数需要传入用户id(登录者id)
		$this->ajaxReturn($ret);
	}
}