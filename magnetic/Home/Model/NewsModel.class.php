<?php
namespace Home\Model;
use Think\Model;

class NewsModel extends BaseModel{
	public $tbname = 'news_content';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	//读取咨询列表
	public function getList($arg_page,$arg_pageSize,$arg_search){
		$first = $arg_pageSize * ($arg_page - 1);  //对应页的记录,第一行的数值.
		$result = $this->procedure('call p_news('.$first.','.$arg_pageSize.',"'.$arg_search.'")');
		$total = $result[0][0]['rowcount'];
		if(empty($total)) $total=0;
		$result = $result[1];
		if(!is_array($result)) $result = array();
		$rtnarray = array('total'=>$total,'rows'=>$result);
		return $rtnarray;
	}
}