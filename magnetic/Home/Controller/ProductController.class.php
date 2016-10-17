<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;
use Home\Model\VarietyModel;
use Home\Model\GradeModel;
use Home\Model\ManufacturerModel;
use Home\Model\SpecificationModel;
use Home\Model\OrderSupplyModel;
use Home\Model\DetailSupplyModel;
use Home\Model\UnitModel;
use Home\Model\UserModel;
use Home\Model\CladdingModel;

class ProductController extends BaseController {

	public function product(){
		$this->header();
		$hotcity = getHotCity();
		$this->assign('hotcity',$hotcity);
		$tb = new VarietyModel();
		$ret = $tb->getVarietyGrade();
		$this->assign('variety',$ret);
		// dump($_GET);
		//查询条件示例
		$query = '';
		//品种(id)
		$gradeid = I('gradeid',0);
		if($gradeid>0) $query .= ' and g.gradeid='.$gradeid.' ';
		//城市
		$city = I('city','');
		if(strlen($city)>0) $query .= ' and o.deliveryplace=\''.$city.'\' ';
		// dump($gradeid);
		// $query  = ' and v.varietyname=\'钕铁硼(粘结)\' and g.gradename=\'Y8T\'';
		// $query .= ' and f.factoryname like \'%得润丰%\' and c.companyname like \'%太原海斯特%\'';
		$page_num = I('get.page_num',0);  //当前页(一直是0)
        $pagesize = C('PAGESIZE');  //配置文件读取每页行数
		$tb = M();
		$ret = $tb->procedure('call p_search_supply(0,'.$pagesize.',"'.$query.'")');  //查询记录总数,页数
        $rowcount = $ret[0][0]['rowcount'];//记录总数
		$end_page = $ret[0][0]['pagecount'];//last page
        //查询记录如果小于页面显示数量，则标记页码div 不显示。反之展示。
        $show_flag = $rowcount<$pagesize?0:1;
		$Page = new \Think\cPage($rowcount,$pagesize);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$show = str_replace("<div>",'',$show);
        $show = str_replace("</div>",'',$show);
        $first = floor($Page->firstRow);
		$ret = $tb->procedure('call p_search_supply('.$first.','.$pagesize.',"'.$query.'")');
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
        //dump($ret);
        $this->assign('end_page',$end_page);  //末页
        $this->assign('show_flag',$show_flag);  //?标记
        $this->assign('json_arr',$ret[1]);  //数据集
		//调模板
		$this->display();
	}
	
	public function test(){
		
	}
	
	public function baojiadanadd(){
		$this->header();
		//品种
		$tb = new VarietyModel();
		$ret = $tb->getVarietyList();
		 //dump($ret);
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
	
	public function addbaojiandan_bgd(){
		$data = I('post.');
		// dump($data);die();
		//主信息
		//$supply = $data;
		$tb = new UserModel();
		$ret = $tb->where('userid='.I('session.userid',0))->field('ordercode_supply')->find();
		if(strlen($ret['ordercode_supply'])==0){
			$ordercode = date('YmdHi').rand(1000,9999);
			$tb->save(array('ordercode_supply'=>$ordercode,'userid'=>I('session.userid',0)));
		}
		else $ordercode = $ret['ordercode_supply'];
		$supply['ordercode'] = $ordercode;
		$supply['createdby'] = I('session.userid',0);
		$supply['companyid'] = I('session.companyid',0);
		$supply['statusid'] = 1;  //待审核
		$supply['instime'] = date('Y-m-d H:i:s');
		$supply['updatetime'] = date('Y-m-d H:i:s');
		$supply['deliveryplace'] = $data['deliveryplace'];
		$supply['deliverydate'] = $data['deliverydate'];
		$supply['comments'] = $data['comments'];
		
		$result = array('result'=>false,'msg'=>'','pk'=>'','rowcount'=>'');
		
		$tb_o = new OrderSupplyModel();
		$tb_o->startTrans();
		$ret_supply = $tb_o->add($supply);
		if($ret_supply['result']===true){
			//明细信息
			// $detail = $data;
			$detail['orderid'] = $ret_supply['pk'];  //外键
			$detail['varietyid'] = $data['varietyid'];
			$detail['gradeid'] = $data['gradeid'];
			$grade = new GradeModel();
			$ret = $grade->isNameExists($detail['gradeid']);
			if($ret['result']===true) $detail['gradeid'] = $ret['pk'];
			else{  //用户输入的，需要增加
				$ret = $grade->add(array('gradename'=>$detail['gradeid'],'varietyid'=>$detail['varietyid'],'instime'=>date('Y-m-d H:i:s'),'createdby'=>I('session.userid',0),'delstatus'=>0));
				if($ret['result']===true) $detail['gradeid'] = $ret['pk'];
				else{  //自动添加失败，操作无法继续
				}
				\Think\Log::Record(var_export($ret,true));
			}
			if($ret['result']===true){
				$detail['factoryid'] = $data['factoryid'];
				$detail['specid'] = $data['specid'];  //暂时没有
				$detail['quantity'] = $data['quantity'];
				$detail['unitid'] = $data['unitid'];
				$detail['unitprice'] = $data['unitprice'];
				$detail['claddingid'] = $data['claddingid'];  //暂缺
				$detail['comments'] = $data['comments'];
				$detail['instime'] = date('Y-m-d H:i:s');
				$detail['updatetime'] = date('Y-m-d H:i:s');
				$detail['length_diameter'] = $data['length_diameter'];
				$detail['width_aperture'] = $data['width_aperture'];
				$detail['height_thickness'] = $data['height_thickness'];
				$tb_d = new DetailSupplyModel();
				$ret_detail = $tb_d->add($detail);
				if($ret_detail['result']===true){
					//$tb_o->commit();
					$result['result'] = true;
				}
				else{
					//$tb_o->rollback();
				}
			}
		}
		else{
			//$tb_o->rollback();
		}
		if($result['result']===true) $tb_o->commit();
		else $tb_o->rollback();
		//返回结果
		$this->ajaxReturn($result);
	}
	
	//我的报价
	public function mysupply(){
		$userid = I('session.userid',0);
		/* $tb = new OrderSupplyModel();
		$ret = $tb->getMySupply($userid); */
		
		/*分页控制*/
		$page_num = I('get.page_num',0);  //当前页(一直是0)
        $pagesize = C('PAGESIZE');  //配置文件读取每页行数
		$tb = M();
		$ret = $tb->procedure('call p_mypurchase('.$userid.',0,'.$pagesize.')');  //查询记录总数,页数
        $rowcount = $ret[0][0]['rowcount'];//记录总数
		$end_page = $ret[0][0]['pagecount'];//last page
        //查询记录如果小于页面显示数量，则标记页码div 不显示。反之展示。
        $show_flag = $rowcount<$pagesize?0:1;
		$Page = new \Think\cPage($rowcount,$pagesize);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$show = str_replace("<div>",'',$show);
        $show = str_replace("</div>",'',$show);
        $first = floor($Page->firstRow);
		$ret = $tb->procedure('call p_mypurchase('.$userid.','.$first.','.$pagesize.')');
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
		/*分页控制*/
		
		// dump($ret);
		// $this->assign('supplylist',$ret);
		$this->display();
	}
	
	//报价单
	public function quotes(){
		$userid = I('session.userid',0);
		/* $tb = new OrderSupplyModel();
		$ret = $tb->getMySupply($userid); */
		
		/*分页控制*/
		$page_num = I('get.page_num',0);  //当前页(一直是0)
        $pagesize = C('PAGESIZE');  //配置文件读取每页行数
		$tb = M();
		$ret = $tb->procedure('call p_quotes(0,'.$pagesize.',\'\')');  //查询记录总数,页数
        $rowcount = $ret[0][0]['rowcount'];//记录总数
		$end_page = $ret[0][0]['pagecount'];//last page
        //查询记录如果小于页面显示数量，则标记页码div 不显示。反之展示。
        $show_flag = $rowcount<$pagesize?0:1;
		$Page = new \Think\cPage($rowcount,$pagesize);// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show();// 分页显示输出
		$show = str_replace("<div>",'',$show);
        $show = str_replace("</div>",'',$show);
        $first = floor($Page->firstRow);
		$ret = $tb->procedure('call p_quotes('.$first.','.$pagesize.',\'\')');
		// dump($ret);
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
		/*分页控制*/
		
		// dump($ret);
		// $this->assign('supplylist',$ret);
		$this->display();
	}
}