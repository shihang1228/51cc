<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class FinanceController extends BaseController {

	public function finance(){
		$this->display();
	}
}