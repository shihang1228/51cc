<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;
use Home\Model\VarietyModel;
use Home\Model\GradeModel;
use Home\Model\UnitModel;
use Home\Model\CladdingModel;
use Home\Model\ManufacturerModel;

class SysController extends Controller {
	
	/*模板:分类列表*/
	public function categorylist(){
		$this->display();
	}
	
	/*模板:分类增加*/
	public function categoryadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function categoryadd_bgd(){
		
	}
	
	/*后台:删除*/
	public function category_delete(){
		
	}
	
	/*模板:品种列表*/
	public function varietylist(){
		$tb = new VarietyModel();
		$ret = $tb->getVarietyList();
		$this->assign('variety',$ret);
		$this->display();
	}
	
	/*模板:品种增加*/
	public function varietyadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function varietyadd_bgd(){
		$data = I('post.');
		$tb = new VarietyModel();
		if(!isset($data['varietyid'])){
			$data['instime'] = date('Y-m-d H:i:s');  //操作时刻
			$data['createdby'] = I('session.userid',0);  //创建者
			$data['delstatus'] = 0;  //正常状态
			$ret = $tb->add($data);
		}
		else{
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除(暂标记为不再使用)*/
	public function variety_delete(){
		$varietyid = I('varietyid');
		$ret = array('result'=>false,'msg'=>'参数无效','pk'=>'','rowcount'=>'0');
		if(strlen($varietyid)>0){
			$data['varietyid'] = $varietyid;
			$data['delstatus'] = 1;
			$tb = new VarietyModel();
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*模板:牌号列表*/
	public function gradelist(){
		$tb = new GradeModel();
		$ret = $tb->getGradeList();
		$this->assign('grade',$ret);
		$this->display();
	}
	
	/*模板:牌号增加*/
	public function gradeadd(){
		$tb = new VarietyModel();
		$ret = $tb->getVarietyList();
		$this->assign('variety',$ret);
		$this->display();
	}
	
	/*后台:增加修改*/
	public function gradeadd_bgd(){
		$data = I('post.');
		$tb = new GradeModel();
		if(!isset($data['gradeid'])){
			$data['instime'] = date('Y-m-d H:i:s');  //操作时刻;
			$data['createdby'] = I('session.userid',0);  //创建者
			$data['delstatus'] = 0;  //正常状态
			$ret = $tb->add($data);
		}
		else{
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function grade_delete(){
		$gradeid = I('gradeid');
		$ret = array('result'=>false,'msg'=>'参数无效','pk'=>'','rowcount'=>'0');
		if(strlen($gradeid)>0){
			$data['gradeid'] = $gradeid;
			$data['delstatus'] = 1;
			$tb = new GradeModel();
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*模板:规格列表*/
	public function specificationlist(){
		$tb = new SpecificationModel();
		$ret = $tb->getSpecList();
		$this->assign('specfication',$ret);
		$this->display();
	}
	
	/*模板:规格增加*/
	public function specificationadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function specificationadd_bgd(){
		$data = I('post.');
		$tb = new SpecificationModel();
		if(!isset($data['specid'])){
			$data['instime'] = date('Y-m-d H:i:s');  //操作时刻;
			$data['createdby'] = I('session.userid',0);  //创建者
			$data['delstatus'] = 0;  //正常状态
			$tb->add($data);
		}
		else{
			$tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function specification_delete(){
		$specid = I('specid');
		$ret = array('result'=>false,'msg'=>'参数无效','pk'=>'','rowcount'=>'0');
		if(strlen($specid)>0){
			$data['specid'] = $specid;
			$data['delstatus'] = 1;
			$tb = new SpecificationModel();
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*模板:单位列表*/
	public function unitlist(){
		$tb = new UnitModel();
		$ret = $tb->getUnitList();
		$this->assign('unit',$ret);
		$this->display();
	}
	
	/*模板:单位增加*/
	public function unitadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function unitadd_bgd(){
		//raw 0:(半)成品  1:原料
		$data = I('post.');
		$tb = new UnitModel();
		if(!isset($data['unitid'])){
			$data['instime'] = date('Y-m-d H:i:s');
			$data['createdby'] = I('session.userid',0);
			$data['delstatus'] = 0;
			$ret = $tb->add($data);
		}
		else{
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function unit_delete(){
		$unitid = I('unitid');
		$ret = array('result'=>false,'msg'=>'参数无效','pk'=>'','rowcount'=>'0');
		if(strlen($unitid)>0){
			$data['unitid'] = $unitid;
			$data['delstatus'] = 1;
			$tb = new UnitModel();
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*模板:镀层列表*/
	public function claddinglist(){
		$tb = new CladdingModel();
		$ret = $tb->getCladdingList();
		$this->assign('cladding',$ret);
		$this->display();
	}
	
	/*模板:镀层增加*/
	public function claddingadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function claddingadd_bgd(){
		$data = I('post.');
		$tb = new CladdingModel();
		if(!isset($data['claddingid'])){
			$data['instime'] = date('Y-m-d H:i:s');
			$data['createdby'] = I('session.userid',0);
			$data['delstatus'] = 0;
			$ret = $tb->add($data);
		}
		else{
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function cladding_delete(){
		$claddingid = I('claddingid');
		$ret = array('result'=>false,'msg'=>'参数无效','pk'=>'','rowcount'=>'0');
		if(strlen($claddingid)>0){
			$data['claddingid'] = $claddingid;
			$data['delstatus'] = 1;
			$tb = new CladdingModel();
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*模板:厂家列表*/
	public function manufacturerlist(){
		$tb = new ManufacturerModel();
		$ret = $tb->getFactoryList();
		$this->assign('factory',$ret);
		$this->display();
	}
	
	/*模板:厂家增加*/
	public function manufactureradd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function manufactureradd_bgd(){
		$data = I('post.');
		$tb = new ManufacturerModel();
		if(!isset($data['factoryid'])){
			$data['instime'] = date('Y-m-d H:i:s');
			$data['createdby'] = I('session.userid',0);
			$data['delstatus'] = 0;
			$ret = $tb->add($data);
		}
		else{
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function manufacturer_delete(){
		$factoryid = I('factoryid');
		$ret = array('result'=>false,'msg'=>'参数无效','pk'=>'','rowcount'=>'0');
		if(strlen($factoryid)>0){
			$data['factoryid'] = $factoryid;
			$data['delstatus'] = 1;
			$tb = new ManufacturerModel();
			$ret = $tb->save($data);
		}
		if($ret['result']===true){
			//记录用户操作
		}
		$this->ajaxReturn($ret);
	}
	
	/*模板:回收料列表*/
	public function reclaimlist(){
		$this->display();
	}
	
	/*模板:回收料增加*/
	public function reclaimadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function reclaimadd_bgd(){
		$ret = array('result'=>false,'msg'=>'此功能正在开发中.','pk'=>'','rowcount'=>'0');
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function reclaim_delete(){
		$ret = array('result'=>false,'msg'=>'此功能正在开发中.','pk'=>'','rowcount'=>'0');
		$this->ajaxReturn($ret);
	}
	
	/*模板:单据状态列表*/
	public function orderstatusrlist(){
		$this->display();
	}
	
	/*模板:单据状态增加*/
	public function orderstatusradd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function orderstatusradd_bgd(){
		$ret = array('result'=>false,'msg'=>'此功能正在开发中.','pk'=>'','rowcount'=>'0');
		$this->ajaxReturn($ret);
	}
	
	/*后台:删除*/
	public function orderstatusr_delete(){
		$ret = array('result'=>false,'msg'=>'此功能正在开发中.','pk'=>'','rowcount'=>'0');
		$this->ajaxReturn($ret);
	}
}