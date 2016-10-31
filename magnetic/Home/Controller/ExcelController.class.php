<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
use Home\Model\BaseModel;
use Home\Model\UserModel;
use Home\Model\VarietyModel;
use Home\Model\GradeModel;
use Home\Model\SpecificationModel;
use Home\Model\UnitModel;
use Home\Model\CladdingModel;
use Home\Model\ReclaimModel;
use Home\Model\ManufacturerModel;
use Home\Model\OrderSupplyModel;
use Home\Model\OrderPurchaseModel;
use Home\Model\DetailSupplyModel;
use Home\Model\DetailPurchaseModel;
use Home\Model\ImportModel;
//import("Org.Util.PHPExcel");
//包含excel处理文件
// require_once('excel/PHPExcel.class.php');
// require_once('excel/PHPExcel/IOFactory.php');
// require_once('excel/PHPExcel/Reader/Excel5.php');

class ExcelController extends Controller {
	
	public function __construct(){
		parent::__construct();
		if(session('?userid')===false){
			//echo '<script>alert(\'您没有登录\')</script>';
			//跳转
		}
		else{
			$userid = I('session.userid',0);
		}
	}
	
	/*upload xls file*/
	public function upload(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('xls', 'xlsx');// 设置附件上传类型
		$upload->rootPath  =     'Public/Uploads/'; // 设置附件上传根目录
		$upload->savePath  =     ''; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{// 上传成功
			//$this->success('上传成功！');
			$xlsfile = $upload->rootPath.$info["importfile"]['savepath'].$info["importfile"]['savename'];
			// echo $xlsfile.'上传成功！';
			$ret = $this->import_supply($xlsfile);
			if($ret) $this->redirect('Product/mysupply');
			else $this->redirect('User/member');
			//$PHPExcel = new \PHPExcel();
			//var_dump($PHPExcel);
			/*
			$objReader = PHPExcel_IOFactory::createReaderForFile($streamFileRand);  //读取句柄
			$objPHPExcel = $objReader->load($streamFileRand);  //加载文件
			$sheet = $objPHPExcel->getSheet(0);  //第一个表单
			$highestRow = $sheet->getHighestRow();  //总行数 
			$highestColumn = $sheet->getHighestColumn();  //总列数
			*/
		}
	}
	
	public function import_supply($arg_filename){
		//$arg_filename = 'E:\cc\Public\Uploads\2016-09-10\57d36509c4679.xlsx';
		import('Org.Util.PHPExcel');
		$objReader = \PHPExcel_IOFactory::createReaderForFile($arg_filename);  //读取句柄
		$objPHPExcel = $objReader->load($arg_filename);  //加载文件
		$sheet = $objPHPExcel->getSheet(0);  //第一个表单
		$highestRow = $sheet->getHighestRow();  //总行数 
		$highestColumn = $sheet->getHighestColumn();  //总列数
		if($highestColumn < 'N'){  //列数不足(固定为14列)
			echo '<script>alert(\'您选择的文件看起来有些问题,信息太少哦.\');</script>';
			return false;
		}
		$highestColumn = 'N';  //最多取到N列(14)
		//$objPHPExcel->setActiveSheetIndex(1);
		//$objPHPExcel->getActiveSheet();
        //转换成列名
		// $supply = new OrderPurchaseModel();
		$supply = new OrderSupplyModel();  //供应单信息
		
		$ordercode = date('YmdHi').rand(1000,9999);  //导入操作的批标识
        $order['ordercode'] = $ordercode;
		$order['companyid'] = I('session.companyid',0);
		$order['createdby'] = I('session.userid',0);
		$order['deliveryplace'] = '';  //这个改为从文件中读取
		$order['deliverydate'] = date('Y-m-d H:i');
		$order['statusid'] = 1;  //默认为待审核
		$order['comments'] = '';
		$order['showstatus'] = 1;  //默认为展示状态
		$order['instime'] = date('Y-m-d H:i');
		$order['updatetime'] = date('Y-m-d H:i');
		$supply->startTrans();
		$ret = $supply->add($order);
		$orderid = '0';
		if($ret['result']==true){
			$orderid = $ret['pk'];
		}
		else{
			//添加失败
			$supply->rollback();
			return false;
		}
		// $detail = new DetailPurchaseModel();
		$detail = new DetailSupplyModel();
        //需要记录导入操作(未完)
        //品种 牌号 厂家 规格 单位 单价 镀层 数量 长度/直径 宽度/孔径 高度/厚度 纯度 回收料 交货地点
        $colname = array(0=>'varietyid',1=>'gradeid',2=>'factoryid',3=>'specid',4=>'unitid',5=>'unitprice',6=>'claddingid',7=>'quantity',8=>'length_diameter',9=>'width_aperture',10=>'height_thickness',11=>'purity',12=>'isreclaimed',13=>'deliveryplace');
		$data = array();

		$tb = new ImportModel();
		$rtnsum = true;  //事务控制标记  导入
		for($i=2;$i<=$highestRow;$i++)  //首行含标题
		{
			$row = array();
            //拼接插入sql语句
			for($j='A',$k=0;$j<=$highestColumn;$j++,$k++)  //从A列开始读数据
			{
				$row['instime'] = date('Y-m-d H:i:s');
				$val = $sheet->getCell("$j$i")->getValue();  //取单元格的值(下标顺序:列 行)
				$row[$colname[$k]] = empty($val)?'':$val;  //按字段名存储
			}
			$row['ordercode'] = $ordercode;
			if(!empty($row['varietyid'])){
				$rtn = $tb->add($row);  //数据存入中间表
				if($rtn['result']===false){
					$rtnsum = false;
					exit;
				}
			}
		}
		
		if($rtnsum===true){  //全部成功了
			$sql  = 'select i.impid,i.ordercode,i.userid,v.varietyid,g.gradeid,f.factoryid,s.specid,u.unitid';
			$sql .= ',i.unitprice,c.claddingid,i.quantity,i.length_diameter,i.width_aperture,i.height_thickness';
			$sql .= ',i.purity,r.reclaimid as isreclaimed,i.deliveryplace,i.instime';
			$sql .= ' from tb_import i';
			$sql .= ' left join tb_mm_variety v on v.varietyname=i.varietyid';
			$sql .= ' left join tb_mm_grade g on g.gradename=i.gradeid';
			$sql .= ' left join tb_manufacturer f on f.factoryname=i.factoryid';
			$sql .= ' left join tb_mm_specification s on s.specname=i.specid';
			$sql .= ' left join tb_mm_unit u on u.unitname=i.unitid';
			$sql .= ' left join tb_mm_claddingmaterial c on c.claddingname=i.claddingid';
			$sql .= ' left join tb_order_reclaim r on r.reclaimname=i.isreclaimed';
			$sql .= ' where ordercode=\''.$ordercode.'\'';
			$data = $tb->query($sql);  //关联取出数据,转换成外键
			$order_makeup = array();
			$retsum = true;
			$makeup = true;  //补充信息(交货地点)
			foreach($data as $row){
				$row['orderid'] = $orderid;
				$row['instime'] = date('Y-m-d H:i:s');
				$row['updatetime'] = date('Y-m-d H:i:s');
				if(count($order_makeup)==0){
					$order_makeup = array('orderid'=>$orderid,'deliveryplace'=>$row['deliveryplace']);
					$makeup = $supply->save($order_makeup);  //地址信息补充到供应单表
					$makeup = $makeup['result'];  //补充提交交货地点信息
				}
				$rtn = $detail->add($row);  //保存明细
				if($rtn['result']===false){
					$retsum = false;
					exit;
				}
			}
			$tb = new UserModel();
			$user = $tb->save(array('userid'=>I('session.userid',0),'ordercode_supply'=>$ordercode));  //保存用户的当前报价单
			$user = $user['result'];
			$status = $supply->where('ordercode<>\''.$ordercode.'\' and createdby='.I('session.userid',0))->save(array('showstatus'=>0));  //更改用户上传过的报价单状态为不可用
			$status = $status['result'];
			if($retsum===true && $makeup===true && $user===true){
				$supply->commit();
				$rtnsum = true;
			}
			else{
				$supply->rollback();
				$rtnsum = false;
			}
		}
		return $rtnsum;
	}
	
	public function variety_export(){
		$tb = M('mm_variety');
		$rtn = $tb->select();
		$this->excel_export($rtn);
	}
	
	public function excel_export($arg_data){
		/*数据导出成excel,参数为二维数组
			$tb = new WarehouseModel();
			$arg_data = $tb->select();
		*/
		// set_include_path(get_include_path() . PATH_SEPARATOR . LIB_DIR.DIRECTORY_SEPARATOR."PHPExcel".DIRECTORY_SEPARATOR."Classes");
		header("content-type:text/html;charset=utf-8");
		/** Error reporting */
		error_reporting(E_ALL);
		/** PHPExcel */
		import('Org.Util.PHPExcel');

		// Create new PHPExcel object
		$objPHPExcel = new \PHPExcel();
		// dump($objPHPExcel);
		// Set properties
		$objPHPExcel->getProperties()->setCreator("51磁材网");
		$objPHPExcel->getProperties()->setLastModifiedBy("51磁材网");
		$objPHPExcel->getProperties()->setTitle("报价单");
		$objPHPExcel->getProperties()->setSubject("报价单");
		$objPHPExcel->getProperties()->setDescription("www.51cc.com");
		
		//保护
		$objPHPExcel->getSecurity()->setLockWindows(true);
		$objPHPExcel->getSecurity()->setLockStructure(true);
		$objPHPExcel->getSecurity()->setWorkbookPassword("51cc");
		
		//保护
		$objPHPExcel->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
		$objPHPExcel->getActiveSheet()->getProtection()->setSort(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setInsertRows(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setFormatCells(true);
		$objPHPExcel->getActiveSheet()->getProtection()->setPassword('51cc');
		
		if(is_array($arg_data)){
			$objPHPExcel->setActiveSheetIndex(0);  //设置活动表单
			$objactSheet = $objPHPExcel->getActiveSheet();  //取活动表单
			$objactSheet->setTitle('hahahha');    //命名表单
			$i = 0;
			foreach($arg_data as $row){
				if($i==0){  //首次进入,设置表格的表头(列名作为表头,需要显示中文的话,则需要为列指定中文别名)
					$key = array_keys($row);  //取键名
					$j=0;
					foreach($key as $k=>$v){
						$objactSheet->setCellValue(chr(65+$j).'1',$v);  //参数:列.行,值
						$j++;
					}
					$i++;
				}
				
				$i++;
				$j=0;
				foreach($row as $k=>$v){  //数据写入excel文件
					$objactSheet->setCellValue(chr(65+$j).$i,$v);  //列.行 值
					$j++;
				}
			}
		}
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="51cc_quotes.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = \PHPExcel_IOFactory:: createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
	}
}