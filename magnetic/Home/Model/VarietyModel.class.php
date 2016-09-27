<?php
namespace Home\Model;
use Think\Model;

class VarietyModel extends BaseModel{
	public $tbname = 'mm_variety';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	/*品种列表,返回数组*/
	public function getVarietyList(){
		$ret = $this->field('varietyid,varietyname')->where('delstatus=0')->select();
		if(!is_array($ret)) $ret = array();
		return $ret;
	}
	
	/*品种,牌号组合*/
	public function getVarietyGrade(){
		$sqlstr = 'select v.varietyid,v.varietyname,group_concat(concat(cast(g.gradeid as char),\'__\',g.gradename)) as grade ';
		$sqlstr .= 'from tb_mm_variety v inner join tb_mm_grade g on v.varietyid=g.varietyid ';
		$sqlstr .= 'group by v.varietyid ';
		$ret = $this->query($sqlstr);
		$variety = array();
		if(is_array($ret)){
			foreach($ret as $row){
				$tmp = $row['grade'];
				$tmp = explode(',',$tmp);
				$data = array();
				foreach($tmp as $k=>$v){
					$grade = explode('__',$v);
					$data[] = array('gradeid'=>$grade[0],'gradename'=>$grade[1]);
				}
				$variety[] = array('varietyid'=>$row['varietyid'],'varietyname'=>$row['varietyname'],'grade'=>$data);
			}
		}
		return $variety;
	}
	
	//检查名称是否存在
	public function isNameExists($arg_name){
		static $lists = array();
		if(!isset($lists[$arg_name])){
			$ret = $this->field('varietyid')->where('varietyname=\''.$arg_name.'\'')->find();
			if($ret!==false) $lists[$arg_name] = $ret['varietyid'];
		}
		if(isset($lists[$arg_name])) return array('result'=>true,'pk'=>$lists[$arg_name]);
		else return array('result'=>false,'msg'=>'未找到','pk'=>0);
	}
}