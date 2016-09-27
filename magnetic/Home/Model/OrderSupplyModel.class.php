<?php
namespace Home\Model;
use Think\Model;

class OrderSupplyModel extends BaseModel{
	public $tbname = 'order_supply';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function read($arg_orderid){
		
	}
	
	public function getSupplyList($arg_variety){
		$rtn = $this->procedure('call p_ordersupply('.$arg_variety.')');
		if(is_array($rtn)) $rtn = $rtn[0];
		return $rtn;
	}
}