<?php
namespace Home\Model;
use Think\Model;

class SalesIntentModel extends BaseModel{
	public $tbname = 'order_salesintent';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
}