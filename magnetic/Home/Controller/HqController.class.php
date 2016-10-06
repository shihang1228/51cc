<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class HqController extends BaseController {

	public function hq(){
        $this->header();
		$this->display();
	}
}