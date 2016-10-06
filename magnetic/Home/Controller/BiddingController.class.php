<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class BiddingController extends BaseController {

	public function bidding(){
        $this->header();
		$this->display();
	}
}