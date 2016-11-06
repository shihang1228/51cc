<?php
namespace Home\Model;
use Think\Model;

class NewsCategoryModel extends BaseModel{
	public $tbname = 'news_category';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	//读取咨询列表
	public function getList(){
		$rtnarray = $this->field('categoryid,categoryname')->select();
		if(!is_array($rtnarray)) $rtnarray = array();
		return $rtnarray;
	}
}