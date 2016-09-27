<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\CompanyModel;

class CompanyController extends Controller {
	protected $tablename = 'company';
	
	//增加公司数据
	public function add(){
		$data = I('post.');
		$userid = session('?userid')?session('userid'):0;  //如果没有登录,默认为0(系统)
		$data['userid'] = $userid;
		if(isset($data['companyname'])){
			$companyname = $data['companyname'];
			$tb = new CompanyModel($this->tablename);
			$rtn = $tb->where('companyname=\''.$companyname.'\'')->find();
			if(!is_array($rtn)){
				$rtn = $tb->add($data);
			}
			else{  //有同名的公司存在，返回此公司的数据.
				$result = array('result'=>false,'msg'=>'此公司已存在','pk'=>$rtn['companyid'],'rowcount'=>'1');
			}
		}
		else{
			$rtn = array('result'=>false,'msg'=>'无效数据,请检查.','pk'=>'','rowcount'=>'');
		}
		$this->ajaxReturn($rtn);
	}
	
	//修改公司数据
	public function edit(){
		if(session('?userid')===false){
			//没有登录,跳转登录页面.
			return;
		}
		$rtn = array('result'=>false,'msg'=>'','pk'=>'','rowcount'=>'');
		$data = I('post.');
		if(is_array($data)){
			$tb = new CompanyModel($this->tablename);
			$rtn = $tb->save($data);
		}
		$this->ajaxReturn($rtn);
	}
	
	public function pricelist(){
		$hotcity = getHotCity();
		$this->assign('hotcity',$hotcity);
		$tb = new VarietyModel();
		$ret = $tb->getVarietyGrade();
		$this->assign('variety',$ret);
        
		//查询条件示例
		$query = '';
		//品种
		$varietyname = I('varietyname','');
		if(strlen($varietyname)>0) $query  .= ' and v.varietyname=\''.$varietyname.'\' ';
		//牌号
		$gradename = I('gradename');
		if(strlen($gradename)>0) $query .= ' and g.gradename=\''.$gradename.'\' ';
		//厂家
		$factoryname = I('factory');
		if(strlen($factoryname)>0) $query .= ' and f.factoryname like \'%'.$factoryname.'%\' ';
		//公司
		$companyname = I('companyname');
		if(strlen($companyname)>0) $query .= ' and c.companyname like \'%'.$companyname.'%\' ';
		//分页数据
		$page_num = I('get.page_num',0);  //当前页(一直是0),这句话好像没用,引子吗?
        $pagesize = C('PAGESIZE');  //配置文件读取每页行数
		$tb = M();
		//调用的存储过程需要改一下
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
		//注意更改此处的存储过程
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
}