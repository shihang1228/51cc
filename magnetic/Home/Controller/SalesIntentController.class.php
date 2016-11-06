<?php
namespace Home\Controller;
use Home\Model\SalesIntentModel;
use Think\Controller;

class SalesIntentController extends Controller {
    public function index(){
        $this->display();
    }
	
	public function supply(){
		$data = I('post.','');
		// \Think\Log::Record('datareceive:'.var_export($data,true));
		// intentid,orderid_purchase,detailid_purchase,salesinfo,supplier,dateofsubmit,dealstatus,instime
		$orderid = $data['orderid'];
		unset($data['orderid']);
		$orderid = explode('_',$orderid);
		$data['detailid_purchase'] = $orderid[1];
		$data['orderid_purchase'] = $orderid[0];
		$content = $data['content'];
		unset($data['content']);
		$data['salesinfo'] = $content;
		$data['supplier'] = I('session.userid',0);
		$data['dateofsubmit'] = date('Y-m-d H:i:s');
		$data['dealstatus'] = 1;
		$data['instime'] = date('Y-m-d H:i:s');
		
		$tb = new SalesIntentModel();
		$ret = $tb->add($data);
		if($ret['result']===true) $msg = '提交成功';
		else $msg = '提交失败';
		$this->ajaxReturn(array('msg'=>$msg));
	}
}