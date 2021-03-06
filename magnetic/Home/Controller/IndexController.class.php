<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\OrderSupplyModel;
use Home\Model\OrderPurchaseModel;
use Home\Model\VarietyModel;
use Home\Model\FriendLinksModel;
use Home\Model\SalesIntentModel;
use Home\Model\UserModel;

class IndexController extends BaseController {
	
	public function __construct(){
		parent::__construct();
		if(session('?userid')===false){
			//echo '<script>alert(\'您没有登录\')</script>';
			//跳转
		}
		else{
			$userid = I('session.userid',0);
		}
	}
	
	public function test(){
		// dump($ret);
	}
	
	//显示主页(index.html)
    public function index(){
    	$this->header();
		$siteinfo = C('WEBSITEINFO');
		$this->assign('siteinfo',$siteinfo);  //网站信息数组，配置文件中读取。
		
		//供应信息
		$order = new OrderSupplyModel();
		$rtn = $order->getSupplyList(1);  //供应/现货信息  1楼
		$this->assign('supplyF1',$rtn);
		$rtn = $order->getSupplyList(2);  //供应/现货信息  2楼
		$this->assign('supplyF2',$rtn);
		$rtn = $order->getSupplyList(3);  //供应/现货信息  3楼
		$this->assign('supplyF3',$rtn);
		//dump($rtn);
		
		//采购信息
		$order = new OrderPurchaseModel();
		$rtn = $order->getPurchaseList(1);  //采购信息		1楼
		$this->assign('purchaseF1',$rtn);
		$rtn = $order->getPurchaseList(2);  //采购信息		2楼
		$this->assign('purchaseF2',$rtn);
		$rtn = $order->getPurchaseList(3);  //采购信息		3楼
		$this->assign('purchaseF3',$rtn);
		//dump($rtn);
		
		//订单滚动
		$order = new SalesIntentModel();
		$ret = $order->getOrderIntent(1);  //订单状态        1楼
		$this->assign('intentscrollF1',$ret);
		$ret = $order->getOrderIntent(2);  //订单状态        2楼
		$this->assign('intentscrollF2',$ret);
		$ret = $order->getOrderIntent(3);  //订单状态        3楼
		$this->assign('intentscrollF3',$ret);
		// dump($ret);
		
		//友情链接
		$links = new FriendLinksModel();
		$ret = $links->getLinksList();
		$this->assign('links',$ret);
		//显示
		$this->display();
    }

    /*手机客户端*/
    public function app(){
    	$this->header();
    	$this->display();
    }
	
	
	//登录页面显示
	public function login(){
		$this->display();
	}
	
	
	//登录请求提交地址
	public function login_bgd(){
		$data = I('post.');
		$rtn = array();
		if(isset($data['phone']) && isset($data['password'])){
			$user = new UserModel();
			$rtn = $user->checkLogin($data);
			if($rtn['result']==true){  //登录成功
				$userinfo = $rtn['userinfo'];
				//设置session
				session('userid',$userinfo['userid']);      //用户id
				session('username',$userinfo['username']);  //用户名(注册时限定成英文了)
				session('nickname',$userinfo['nickname']);  //昵称(注册时间未填写,个人中心要加设定入口)
				session('phone',$userinfo['phone']);        //手机号
				//控制跳转？
				unset($rtn['userinfo']);
			}
		}
		else{
			$rtn = array('result'=>false,'msg'=>'请输入登录信息');
		}
		$this->ajaxReturn($rtn);
	}
}