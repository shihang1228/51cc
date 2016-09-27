<?php
namespace Home\Model;
use Think\Model;

class ManufacturerModel extends BaseModel{
	public $tbname = 'manufacturer';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function getFactoryList(){
		$ret = $this->field('factoryid,factoryname')->where('delstatus=0')->select();
		if(!isset($ret)) $ret = array();
		return $ret;
	}
	
	public function isNameExists($arg_name){
		static $lists = array();
		if(!isset($lists[$arg_name])){
			$ret = $this->field('factoryid')->where('factoryname=\''.$arg_name.'\'')->find();
			if($ret!==false) $lists[$arg_name] = $ret['factoryid'];
		}
		if(isset($lists[$arg_name])) return array('result'=>true,'pk'=>$lists[$arg_name]);
		else return array('result'=>false,'msg'=>'未找到','pk'=>0);
	}
}