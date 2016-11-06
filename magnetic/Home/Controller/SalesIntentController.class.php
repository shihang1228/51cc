<?php
namespace Manage\Controller;
use Home\Model\NewsModel;
use Think\Controller;

class SalesIntentController extends Controller {
    public function index(){
        $this->display();
    }
	
	public function supply(){
		$data = I('post.','');
		\Think\Log::Record('datareceive:'.var_export($data,true));
		$this->ajaxReturn(array('msg'=>'提交成功'));
	}
}