<?php
namespace Home\Model;
use Think\Model;

//成交信息
class OrderTurnoverModel extends BaseModel{
	public $tbname = 'order_turnover';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
}