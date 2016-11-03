<?php
namespace Home\Model;
use Think\Model;

//成交信息
class FriendLinksModel extends BaseModel{
	public $tbname = 'friendlinks';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function getLinksList(){
		$rtn = $this->where('candisplay=1 and length(linktitle)>0')->field('linktitle,weburl')->select();
		return $rtn;
	}
}