<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;
use Home\Model\VarietyModel;
use Home\Model\GradeModel;
use Home\Model\SpecificationModel;
use Home\Model\ManufacturerModel;
use Home\Model\CladdingModel;
use Home\Model\UnitModel;
use Home\Model\UserModel;
use Home\Model\OrderPurchaseModel;
use Home\Model\DetailPurchaseModel;

class PurchaseController extends BaseController {

	public function purchase(){
		// $data = array();
		// $this->assign('data',$data);
		$this->header();
		$page_num = I('get.page_num',0);  //当前页(一直是0)
        $pagesize = C('PAGESIZE');  //配置文件读取每页行数
		$tb = M();
		$ret = $tb->procedure('call p_search_purchase(0,'.$pagesize.',"'.$query.'")');  //查询记录总数,页数
        $rowcount = $ret[0][0]['rowcount'];//记录总数
		$end_page = $ret[0][0]['pagecount'];//last page
        //查询记录如果小于页面显示数量，则标记页码div 不显示。反之展示。
        $show_flag = $rowcount<$pagesize?0:1;
		$Page = new \Think\cPage($rowcount,$pagesize);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$show = str_replace("<div>",'',$show);
        $show = str_replace("</div>",'',$show);
        $first = floor($Page->firstRow);
		$ret = $tb->procedure('call p_search_purchase('.$first.','.$pagesize.',"'.$query.'")');
		//$end_page=ceil($rowcount/$pagesize);
		// dump($ret);
        if(count($ret)==1){
            $this->assign('str_null',"暂无数据");
            $this->assign('data_count',"0");
        }else{
            $this->assign('data_count',$rowcount);
        }
		//模板传值
        $this->assign('page',$show);  //页码
        $this->assign('end_page',$end_page);  //末页
        $this->assign('show_flag',$show_flag);  //?标记
        $this->assign('json_arr',$ret[1]);  //数据集
		//调模板
		$this->display();
	}
	
	//发布采购
	public function purchaseadd(){
		$this->header();
		//品种
		$tb = new VarietyModel();
		$ret = $tb->getVarietyList();
		// dump($ret);
		$this->assign('variety',$ret);
		
		//牌号(牌号应该在选择品牌后动态加载(联动)))
		$tb = new GradeModel();
		$ret = $tb->getGradeList();
		// dump($ret);
		$this->assign('grade',$ret);
		
		//厂家
		$tb = new ManufacturerModel();
		$ret = $tb->getFactoryList();
		// dump($ret);
		$this->assign('factory',$ret);
		
		//规格形状
		$tb = new SpecificationModel();
		$ret = $tb->getSpecList();
		// dump($ret);
		$this->assign('spec',$ret);
		
		//镀层
		$tb = new CladdingModel();
		$ret = $tb->getCladdingList();
		// dump($ret);
		$this->assign('cladding',$ret);
		
		//单位
		$tb = new UnitModel();
		$ret = $tb->getUnitList();
		// dump($ret);
		$this->assign('unit',$ret);
		
		//模板
		$this->display();
	}
	
	//ajax请求牌号列表
	public function getGradeListByVariety(){
		$varietyid = I('varietyid',0);
		$tb = new GradeModel();
		$ret = $tb->getGradeByVariety($varietyid);
		$this->ajaxReturn($ret);
	}
	
	//发布采购后台
	public function purchaseadd_bgd(){
		$userdata = I('post.');
		$userdata = $userdata['guige_array'];
		\Think\Log::Record(var_export($userdata,true));
		//主信息
		$tb = new UserModel();
		$ret = $tb->where('userid='.I('session.userid',0))->field('ordercode_purchase')->find();
		if(strlen($ret['ordercode_purchase'])==0){
			$ordercode = date('YmdHi').rand(1000,9999);
			$tb->save(array('ordercode_purchase'=>$ordercode,'userid'=>I('session.userid',0)));
		}
		else $ordercode = $ret['ordercode_purchase'];
		$purchase['ordercode'] = $ordercode;
		$purchase['createdby'] = I('session.userid',0);
		$purchase['companyid'] = I('session.companyid',0);
		$purchase['statusid'] = 1;  //待审核
		$purchase['instime'] = date('Y-m-d H:i:s');
		$purchase['updatetime'] = date('Y-m-d H:i:s');
		
		//开户事务
		$tb_o = new OrderPurchaseModel();
		$grade = new GradeModel();
		$i = 0;
		foreach($userdata as $data){
			$tb_o->startTrans();
			//预设返回值
			$result = array('result'=>false,'msg'=>'','pk'=>'','rowcount'=>'');
			$purchase['deliveryplace'] = $data['deliveryplace'];
			$purchase['deliverydate'] = $data['deliverydate'];
			$purchase['comments'] = '';//$data['comments'];
			
			$ret_purchase = $tb_o->add($purchase);
			if($ret_purchase['result']===true){
				//明细信息
				$detail['orderid'] = $ret_purchase['pk'];  //外键
				$detail['varietyid'] = $data['varietyid'];
				$detail['gradeid'] = $data['gradeid'];
				$ret = $grade->isNameExists($detail['gradeid']);
				if($ret['result']===true) $detail['gradeid'] = $ret['pk'];
				else{  //用户输入的，需要增加
					$ret = $grade->add(array('gradename'=>$detail['gradeid'],'varietyid'=>$detail['varietyid'],'instime'=>date('Y-m-d H:i:s'),'createdby'=>I('session.userid',0),'delstatus'=>0));
					if($ret['result']===true) $detail['gradeid'] = $ret['pk'];
					else{  //自动添加失败，操作无法继续
					}
				}
				if($ret['result']===true){
					$detail['factoryid'] = $data['factoryid'];
					$detail['specid'] = $data['specid'];  //暂时没有
					$detail['quantity'] = $data['quantity'];
					$detail['unitid'] = $data['unitid'];
					$detail['unitprice'] = $data['unitprice'];
					$detail['claddingid'] = $data['claddingid'];  //暂缺
					$detail['comments'] = '';//$data['comments'];
					$detail['instime'] = date('Y-m-d H:i:s');
					$detail['updatetime'] = date('Y-m-d H:i:s');
					$detail['length_diameter'] = $data['length_diameter'];
					$detail['width_aperture'] = $data['width_aperture'];
					$detail['height_thickness'] = $data['height_thickness'];
					$tb_d = new DetailPurchaseModel();
					$ret_detail = $tb_d->add($detail);
					if($ret_detail['result']===true){
						// $tb_o->commit();
						$result['result'] = true;  //标记为所有操作全部成功
					}
					else{
						// $tb_o->rollback();
					}
				}
			}
			else{
				// $tb_o->rollback();
			}
			if($result['result']===true){
				$tb_o->commit();
				$i++;
			}
			else $tb_o->rollback();
		}
		if($i==count($purchase)) $result = array('result'=>true,'msg'=>'您已经成功发布了'.$i.'条采购信息.','pk'=>'','rowcount'=>$i);
		else $result = array('result'=>($i==0?false:true),'msg'=>'您有'.(count($purchase)-$i).'条采购信息发布失败.','pk'=>'','rowcount'=>$i);
		//返回结果
		$this->ajaxReturn($result);
	}
	
	//我的采购
	public function mypurchase(){
		$userid = I('session.userid',0);
		$tb = new OrderPurchaseModel();
		$ret = $tb->getMyPurchase($userid);
		// dump($ret);
		$this->assign('purchaselist',$ret);
		$this->display();
	}
}