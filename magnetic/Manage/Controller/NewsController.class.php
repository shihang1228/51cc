<?php
namespace Manage\Controller;
use Home\Model\NewsModel;
use Home\Model\NewsCategoryModel;
use Think\Controller;

class NewsController extends Controller {
	//资讯列表页面
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
	
	//资讯发布页面
	public function addnews(){
		$tb = new NewsCategoryModel();
		$category = $tb->getList();
		$this->assign('category',$category);
		$this->display();
	}
	
	//资讯发布后台
	public function addnews_bgo(){
		$data = I('post.');
		$pic = uploadPics('./Public/NewsPic/');
		\Think\Log::Record('tu:'.var_export($pic,true));
		if(!empty($pic)){
			$pic['newspicture'] = C('WEBPC').$pic['newspicture'];
			$data = array_merge($data,$pic);
		}
		\Think\Log::Record('tu:'.var_export($data,true));
		//newsid,newstitle,newsbrief,newspubdate,newsdatasource,newspicture,newsinfomation,userid
		//,categoryid,newsorder,newsstatus,gradeid,gradename,varietyid,instime,createdby,delstatus
		$categoryid = $data['category'];
		unset($data['category']);
		$data['categoryid'] = $categoryid;
		$content = $data['newscontent'];
		unset($data['newscontent']);
		$data['newsinfomation'] = $content;
		$data['newspubdate'] = date('Y-m-d H:i:s');
		// $data['newspicture'] = ;
		$data['userid'] = I('session.userid',0);
		$data['newsorder'] = 0;
		$data['instime'] = date('Y-m-d H:i:s');
		
		\Think\Log::Record('addnews:'.var_export($data,true));
		$tb = new NewsModel();
		$ret = $tb->add($data);
		$this->ajaxReturn($ret);
	}
}