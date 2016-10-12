<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
use Home\Model\CompanyModel;

class UserController extends BaseController {

	//显示主页(index.html)
    public function index(){
		$siteinfo = C('WEBSITEINFO');
		$this->assign('siteinfo',$siteinfo);  //网站信息数组，配置文件中读取。
		// $this->display();
		$this->show('个人中心');
    }
	//个人中心主页
	public function member(){
		$this->header();
		$this->display();
	}
	//注册页面显示
	public function register(){
		$this->display();
	}
	
	//注册信息提交地址(增加用户)
	public function register_bgd(){
		$ret = array();
		$data = I('post.');
		$phone = $data['mobile'];
		unset($data['mobile']);
		$data['phone'] = $phone;
		if(strlen($phone)!=11){
			$ret = array('result'=>false,'msg'=>'手机号无效!');
			$this->ajaxReturn($ret);
		}
		$pwd = $data['password'];  //密码
		$pwd_confirm = $data['password_two'];  //验证密码
		if(strlen($pwd)==0 || strlen($pwd_confirm)==0){
			$ret = array('result'=>false,'msg'=>'密码/验证密码不能为空!');
			$this->ajaxReturn($ret);
		}
		if($pwd!=$pwd_confirm){
			$ret = array('result'=>false,'msg'=>'两次输入的密码不一致!');
		}
		else{   //两次输入的密码一致.
			/*$verificationcode = $data['verificationcode'];  //用户提交的短信验证码
			$sendcode = session('smscode');  //系统发送的短信验证码
			if($verificationcode!=$sendcode){  //比较验证码
				$ret = array('result'=>false,'msg'=>'验证码输入错误!');
			}
			else{  //通过短信验证
				$sendtime = session('smssendtime');  //短信发送时间
				$diff = time() - $sendtime;  //时间差(秒)
				if($diff>600){
					$ret = array('result'=>false,'msg'=>'验证码超时!');
				}
				else{*/
					unset($data['password_two']);
					unset($data['password']);
					$data['userpwd'] = md5($pwd);
					$data['frozen'] = 0;
					$data['regtime'] = date('Y-m-d H:i:s');
					$user = new UserModel();
					$ret = $user->getUserInfoByPhone($phone);
					if(!empty($ret)){
						$ret = array('result'=>false,'msg'=>'手机号已注册!');
					}
					else{
						$user->startTrans();
						$ret = $user->add($data);
						\Think\Log::Record('adduser:'.var_export($data,true));
						\Think\Log::Record('adduser:'.var_export($rtn,true));
						if($ret['result']===true){
							$userid = $ret['pk'];
							$mycompany = new CompanyModel();
							$data = array('createdby'=>$userid,'instime'=>date('Y-m-d H:i:s'));
							$ret = $mycompany->add($data);
							\Think\Log::Record('注册结果：'.var_export($ret,true));
							if($ret['result']===true){
								$user->commit();
							}
							else{
								$user->rollback();
							}
						}
						else{
							$user->rollback();
						}
					}
				// }
			// }
   		}
		$this->ajaxReturn($ret);
	}
	
	//登录页面显示
	public function login(){
		$this->display();
	}
	
	//登录请求提交地址
	public function login_bgd(){
		$data = I('post.');
		$rtn = array();
		if(isset($data['phone']) && isset($data['password'])){
			$user = new UserModel();
			$rtn = $user->checkLogin($data);
			if($rtn['result']==true){  //登录成功
				$userinfo = $rtn['userinfo'];
				//设置session
				session('userid',$userinfo['userid']);      //用户id
				session('username',$userinfo['username']);  //用户名(注册时限定成英文了)
				session('nickname',$userinfo['nickname']);  //昵称(注册时间未填写,个人中心要加设定入口)
				session('phone',$userinfo['phone']);        //手机号
				//控制跳转？
				unset($rtn['userinfo']);
			}
		}
		else{
			$rtn = array('result'=>false,'msg'=>'请输入登录信息');
		}
		$this->ajaxReturn($rtn);
	}
	
	//个人信息显示页面
	public function userinfo(){
		$this->header();
		$user = new UserModel('user');
		$info = $user->getUserInfoById(I('session.userid',0));
		\Think\Log::Record('userid='.I('session.userid'));
		$this->assign('userinfo',$info[0]);
		//dump($info);
		$this->display();
	}
	
	//个人信息修改页面
	public function edit(){
		$this->header();
		$user = new UserModel('user');
		$rtn = $user->getUserInfoById(I('session.userid',0));
		// dump($rtn);
		$this->assign('userinfo',$rtn[0]);
		$this->display();
	}
	
	//个人信息修改提交地址
	public function edit_bgd(){
		$data = I('post.');
		//用户数据
		$user = array('username'=>$data['username'],'nickname'=>$data['nickname'],'userid'=>$data['userid']);
		//公司数据
		$company = array('companyid'=>$data['companyid'],'companyname'=>$data['companyname'],'address'=>$data['address'],'typename'=>$data['typename'],'mainproduct'=>$data['mainproduct'],'telphone'=>$data['telphone'],'email'=>$data['email']);
		
		$tb = new UserModel();
		$tb->startTrans();
		$rtn = $tb->save($user);  //保存用户数据
		
		$com = new CompanyModel();
		$rtn2 = $com->save($company);  //保存公司数据
		
		if($rtn['result']===true && $rtn2['result']===true){
			$tb->commit();
			$rtn = array('result'=>true,'msg'=>'保存成功','pk'=>'','rowcount'=>'');
		}
		else{
			$tb->rollback();
			$rtn = array('result'=>false,'msg'=>'保存失败','pk'=>'','rowcount'=>'');
		}
		$this->ajaxReturn($rtn);
	}
	
	//修改密码页面
	public function changepwd(){
		$this->header();
		$this->display();
	}
	
	//修改密码提交地址
	public function changePwd_bgd(){
		$data = I('post.');
		//旧密码
		$oldpassword = $data['oldpassword'];
		//$oldpassword = md5($oldpassword);
		//$data['oldpassword'] = $oldpassword;
		unset($data['oldpassword']);
		//新密码
		$password = $data['password'];
		$password = md5($password);
		$data['userpwd'] = $password;
		//确认密码
		$confirmpassword = $data['confirmpwd'];
		$confirmpassword = md5($confirmpassword);
		unset($data['confirmpwd']);
		//新密码检验
		if($password!=$confirmpassword){
			$rtn = array('result'=>false,'msg'=>'两次输入的密码不一致');
		}
		else{
			//提交修改
			$data['userid'] = I('session.userid',0);  //根据userid更新
			$user = new UserModel('user');
			$rtn = $user->checkLogin(array('phone'=>I('session.phone','1'),'password'=>$oldpassword));
			if($rtn['result']!=true) $rtn = array('result'=>false,'msg'=>'旧密码错误!');
			else $rtn = $user->save($data);
		}
		$this->ajaxReturn($rtn);
	}
	
	//用户注销登录提交地址
	public function logout(){
		session(null);  //清除会话
		$result = array('result'=>true,'msg'=>'注销成功.');
		$this->ajaxReturn($result);
	}
	
	//用户销户
	public function delete(){
		$userid = I('session.userid',0);
		$user = new UserModel('user');
		//$rtn = $user->delete($userid);
		$rtn = array('result'=>true,'msg'=>'删除成功');
		$this->ajaxReturn($rtn);
	}
}