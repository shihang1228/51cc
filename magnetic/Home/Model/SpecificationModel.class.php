<?php
namespace Home\Model;
use Think\Model;

class SpecificationModel extends BaseModel{
	public $tbname = 'mm_specification';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function getSpecList(){
		$ret = $this->field('specid,specname')->where('delstatus=0')->select();
		if(!isset($ret)) $ret = array();
		return $ret;
	}
	
	public function isNameExists($arg_name){
		static $lists = array();
		if(!isset($lists[$arg_name])){
			$ret = $this->field('specid')->where('specname=\''.$arg_name.'\'')->find();
			if($ret!==false) $lists[$arg_name] = $ret['specid'];
		}
		if(isset($lists[$arg_name])) return array('result'=>true,'pk'=>$lists[$arg_name]);
		else return array('result'=>false,'msg'=>'未找到','pk'=>0);
	}
}