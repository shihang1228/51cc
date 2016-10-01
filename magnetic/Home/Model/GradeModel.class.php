<?php
namespace Home\Model;
use Think\Model;

class GradeModel extends BaseModel{
	public $tbname = 'mm_grade';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	/*牌号列表,返回数组*/
	public function getGradeList(){
		$sqlstr = 'select g.varietyid,v.varietyname,g.gradeid,g.gradename ';
		$sqlstr .= 'from tb_mm_grade g ';
		$sqlstr .= 'inner join tb_mm_variety v on g.varietyid=v.varietyid ';
		$sqlstr .= 'where g.delstatus=0 order by g.gradeid';
		$ret = $this->query($sqlstr);
		if(!is_array($ret)) $ret = array();
		return $ret;
	}
	
	/*指定品种的牌号*/
	public function getGradeByVariety($arg_varietyid){
		$sqlstr = 'select gradeid,gradename ';
		$sqlstr .= 'from tb_mm_grade g ';
		$sqlstr .= 'where g.varietyid='.$arg_varietyid.' and g.delstatus=0 order by g.gradeid';
		$ret = $this->query($sqlstr);
		if(!is_array($ret)) $ret = array();
		return $ret;
	}
	
	/*名称是否存在*/
	public function isNameExists($arg_name){
		static $lists = array();
		if(!isset($lists[$arg_name])){
			$ret = $this->field('gradeid')->where('gradename=\''.$arg_name.'\'')->find();
			if($ret!==false) $lists[$arg_name] = $ret['gradeid'];
		}
		if(isset($lists[$arg_name])) return array('result'=>true,'pk'=>$lists[$arg_name]);
		else return array('result'=>false,'msg'=>'未找到','pk'=>0);
	}
}