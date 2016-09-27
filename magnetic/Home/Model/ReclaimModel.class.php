<?php
namespace Home\Model;
use Think\Model;

class ReclaimModel extends BaseModel{
	public $tbname = 'order_reclaim';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function isNameExists($arg_name){
		static $lists = array();
		if(!isset($lists[$arg_name])){
			$ret = $this->field('reclaimid')->where('reclaimname=\''.$arg_name.'\'')->find();
			if($ret!==false) $lists[$arg_name] = $ret['reclaimid'];
		}
		if(isset($lists[$arg_name])) return array('result'=>true,'pk'=>$lists[$arg_name]);
		else return array('result'=>false,'msg'=>'未找到','pk'=>0);
	}
}