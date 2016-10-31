<?php
namespace Home\Model;
use Think\Model;

class ImportModel extends BaseModel{
	public $tbname = 'import';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
}