<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\BaseModel;

class PurchaseController extends Controller {

	public function purchase(){
		$data = array();
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$data[] = array('varietyname'=>'钕铁硼(粘结)','gradename'=>'Y8T','factoryname'=>'得润丰科技','quantity'=>'1000片','price'=>'28元','deliveryplace'=>'太原','dealer'=>'刘先生','tel'=>'021-1008611','status'=>'交易成功','action'=>'我要供货','deliverydate'=>'2016-9-25');
		$this->assign('data',$data);
		
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
        $this->assign('json_arr',$data);//$ret[1]);  //数据集
        //dump($data);
		//调模板
		
		
		$this->display();
	}
}