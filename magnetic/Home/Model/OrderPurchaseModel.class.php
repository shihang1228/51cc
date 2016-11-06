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
	
	public function getMyPurchase($arg_userid){
		$ret = $this->procedure('call p_mypurchase('.$arg_userid.')');
		if(!is_array($ret)) $ret = array();
		else $ret = $ret[0];
		return $ret;
	}
	
	public function getDetail($arg_orderid,$arg_detailid){
		$sql  = ' select o.orderid,d.detailid,v.varietyname,g.gradename,f.factoryname,d.quantity,u.unitname,d.unitprice,1 as `status`';
		$sql .= ' from tb_order_purchase o';
		$sql .= ' inner join tb_detail_purchase d on d.orderid=o.orderid';
		$sql .= ' join tb_mm_variety v on v.varietyid=d.varietyid';
		$sql .= ' join tb_mm_grade g on g.gradeid=d.gradeid';
		$sql .= ' join tb_manufacturer f on f.factoryid=d.factoryid';
		$sql .= ' join tb_mm_unit u on u.unitid=d.unitid';
		$sql .= ' where d.detailid='.$arg_detailid;
		$rtn = $this->query($sql);
		if(!is_array($rtn)) $rtn = array();
		else $rtn = $rtn[0];
		return $rtn;
	}
}