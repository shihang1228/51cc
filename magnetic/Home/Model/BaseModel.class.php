<?php
namespace Home\Model;
use Think\Model;

class BaseModel extends Model{
	
	/*直接调用父类的构造函数,有特殊需要时,在下面修改.*/
	public function __construct($name='',$tablePrefix='',$connection=''){
		parent::__construct($name,$tablePrefix,$connection);
	}
	
	public function add($data='',$options=array(),$replace=false){
		/*此处可做一些特殊处理,如记录用户提交的数据.*/
		$rtn = parent::add($data,$options,$replace);
		$result = array();
		if($rtn===false){
			$result = array('result'=>false,'msg'=>$this->getDbError(),'pk'=>'','rowcount'=>'');
		}
		else{
			$result = array('result'=>true,'msg'=>'','pk'=>$rtn,'rowcount'=>'');
		}
		return $result;
	}
	
	public function save($data='',$options=array()){
		/*此处可做一些特殊处理,如记录用户提交的数据.*/
		$rtn = parent::save($data,$options);
		$result = array();
		if($rtn===false) $result = array('result'=>false,'msg'=>$this->getDbError());
		else $result = array('result'=>true,'msg'=>'','pk'=>$rtn,'rowcount'=>$rtn);
		return $result;
	}
	
	public function delete($options=array()){
		/*此处可做一些特殊处理,如记录用户提交的数据.*/
		$rtn = parent::delete($options);
		$result = array();
		if($rtn===false) $result = array('result'=>false,'msg'=>$this->getDbError());
		else $result = array('result'=>true,'msg'=>'','pk'=>$rtn,'rowcount'=>$rtn);
		return $result;
	}
}