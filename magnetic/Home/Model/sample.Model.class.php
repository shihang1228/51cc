<?php
namespace Home\Model;
use Think\Model;

class Model extends BaseModel{
	public $tbname = '';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function isNameExists($arg_name){
		$ret = $this->field('id')->where('name=\''.$arg_name.'\'')->find();
		if(is_array($ret)) return array('result'=>true,'pk'=>$ret['id']);
		else return array('result'=>false,'msg'=>$this->getDbError(),'pk'=>0);
	}
}