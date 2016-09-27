<?php
namespace Home\Model;
use Think\Model;

class OrderPurchaseModel extends BaseModel{
	public $tbname = 'order_purchase';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function read($arg_orderid){
		
	}
	
	public function getPurchaseList($arg_varietyid){
		$rtn = $this->procedure('call p_orderpurchase('.$arg_varietyid.')');
		if(is_array($rtn)) $rtn = $rtn[0];
		return $rtn;
	}
}