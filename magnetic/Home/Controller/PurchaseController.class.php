<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;
use Home\Model\VarietyModel;
use Home\Model\GradeModel;
use Home\Model\ManufacturerModel;

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
		dump(I('post.'));
	}
}