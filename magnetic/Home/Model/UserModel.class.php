<?php
namespace Home\Model;
use Think\Model;

class UserModel extends BaseModel{
	public $tbname = 'user';
	// public $tablePrefix = '';
	// public $connection = '';
	
	public function __construct(){
		parent::__construct($this->tbname);
	}
	
	public function getUserInfoByPhone($arg_phone){
		$rtn = $this->where('phone = \''.$arg_phone.'\'')->select();
		return $rtn;
	}
	
	public function getUserInfoById($arg_userid){
		$sqlstr  = 'select u.userid,u.username,u.nickname,u.phone,u.telphone,u.headimage,u.logintimes';
		$sqlstr .= ',c.companyid,c.companyname,c.mainproduct,c.companytype,t.typename,c.contact,c.telphone,c.address,c.email ';
		$sqlstr .= 'from tb_user u ';
		$sqlstr .= 'left join tb_company c on c.createdby=u.userid ';
		$sqlstr .= 'left join tb_companytype t on t.typeid=c.companytype ';
		$sqlstr .= 'where u.userid='.$arg_userid;
		$rtn = $this->query($sqlstr);
		return $rtn;
	}
	
	public function checkLogin($arg_data){
		$ret = array('result'=>false,'msg'=>'错误的用户名/密码.');
		$phone = $arg_data['phone'];
		$userpwd = $arg_data['password'];
		$rtn = $this->field('userid,phone,username,nickname,logintimes')->where('phone=\''.$phone.'\' and userpwd=\''.md5($userpwd).'\'')->select();
		if(is_array($rtn)){
			if(count($rtn)==1){  //登录成功
				$rtn = $rtn[0];
				$ret = array('result'=>true,'msg'=>'登录成功','userinfo'=>$rtn);
				//$this->where('userid='.$rtn['userid'])->setInc('logintimes',1);  //登录次数加1
				$data = array('logintimes'=>$rtn['logintimes']+1,'userid'=>$rtn['userid'],'lastlogin'=>date('Y-m-d H:i:s'));
				$this->save($data);
			}
			else{  //失败
				//$ret = array('result'=>false,'msg'=>'错误的用户/密码.');
			}
		}
		else{
			//$ret = array('result'=>false,'msg'=>'错误的用户/密码.');
		}
		return $ret;
	}
}