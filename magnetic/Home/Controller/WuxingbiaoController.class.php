<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class WuxingbiaoController extends BaseController {

	public function wuxingbiao(){
        $this->header();
		$this->display();
	}
}