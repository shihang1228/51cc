<?php
namespace Home\Model;
use Think\Model;

//意向订单(洽谈)
class SalesIntentModel extends BaseModel{
	public $tbname = 'order_salesintent';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function getOrderIntent($arg_varietyid){
		$pageSize = 8;
		$rtn = $this->procedure('call p_orderdynamics('.$arg_varietyid.','.$pageSize.')');
		if(is_array($rtn)) $rtn = $rtn[0];
		return $rtn;
	}
}