<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class AddressController extends BaseController {
	
	/*模板:区域列表*/
	public function regionlist(){
		$this->display();
	}
	
	/*模板:区域增加*/
	public function regionadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function regionadd_bgd(){
		
	}
	
	/*后台:删除*/
	public function region_delete(){
		
	}
	
	/*模板:省份列表*/
	public function provincelist(){
		$this->display();
	}
	
	/*模板:省份增加*/
	public function provinceadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function provinceadd_bgd(){
		
	}
	
	/*后台:删除*/
	public function province_delete(){
		
	}
	
	/*模板:城市列表*/
	public function citylist(){
		$this->display();
	}
	
	/*模板:城市增加*/
	public function cityadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function cityadd_bgd(){
		
	}
	
	/*后台:删除*/
	public function city_delete(){
		
	}
	
	/*模板:区县列表*/
	public function countylist(){
		$this->display();
	}
	
	/*模板:区县增加*/
	public function countyadd(){
		$this->display();
	}
	
	/*后台:增加修改*/
	public function countyadd_bgd(){
		
	}
	
	/*后台:删除*/
	public function county_delete(){
		
	}
}