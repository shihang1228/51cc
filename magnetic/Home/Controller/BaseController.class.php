<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class BaseController extends Controller {
    public function header(){
        $data['userid'] = I('session.userid',0);
        $data['username'] = I('session.username','');
        $data['nickname'] = I('session.nickname','');
        $data['phone'] = I('session.phone','');
        $this->assign('userdata',$data);
    }

}
