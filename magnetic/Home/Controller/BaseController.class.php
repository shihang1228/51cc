<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;
use Home\Model\GradeModel;

class BaseController extends Controller {
    public function header(){
        $data['userid'] = I('session.userid',0);
        $data['username'] = I('session.username','');
        $data['nickname'] = I('session.nickname','');
        $data['phone'] = I('session.phone','');
        $this->assign('userdata',$data);
    }

    /*品牌级联*/
    public function gradelist(){
        $varietyid = I("post.varietyid");
        $gradeMode = new GradeModel();
        $gradelist = $gradeMode->getGradeByVariety($varietyid);
        $this->ajaxReturn($gradelist);
    }

}
