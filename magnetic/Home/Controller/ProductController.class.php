<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;
use Home\Model\VarietyModel;

class ProductController extends Controller {

	public function product(){
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
	
	public function baojidanadd(){
		$this->display();
	}
}