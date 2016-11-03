<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\OrderSupplyModel;
use Home\Model\OrderPurchaseModel;
use Home\Model\VarietyModel;

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
		$tb = new VarietyModel();
		$ret = $tb->getVarietyGrade();
	}
	
	//显示主页(index.html)
    public function index(){
    	$this->header();
		$siteinfo = C('WEBSITEINFO');
		$this->assign('siteinfo',$siteinfo);  //网站信息数组，配置文件中读取。
		
		$order = new OrderSupplyModel();
		$rtn = $order->getSupplyList(1);  //供应/现货信息
		$this->assign('supplyF1',$rtn);
		$rtn = $order->getSupplyList(2);  //供应/现货信息
		$this->assign('supplyF2',$rtn);
		$rtn = $order->getSupplyList(3);  //供应/现货信息
		$this->assign('supplyF3',$rtn);
		//dump($rtn);
		$order = new OrderPurchaseModel();
		$rtn = $order->getPurchaseList(1);  //采购信息
		$this->assign('purchaseF1',$rtn);
		$rtn = $order->getPurchaseList(2);  //采购信息
		$this->assign('purchaseF2',$rtn);
		$rtn = $order->getPurchaseList(3);  //采购信息
		$this->assign('purchaseF3',$rtn);
		//dump($rtn);
		$this->display();
    }

    /*手机客户端*/
    public function app(){
    	$this->header();
    	$this->display();
    }
	
}