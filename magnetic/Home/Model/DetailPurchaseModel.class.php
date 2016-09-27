<?php
namespace Home\Model;
use Think\Model;

class DetailPurchaseModel extends BaseModel{
	public $tbname = 'detail_purchase';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function read($arg_orderid){
		
	}
	
	public function getSupplyList(){
		$rtn = $this->procedure('call p_ordersupply()');
		if(is_array($rtn)) $rtn = $rtn[0];
		return $rtn;
	}
}