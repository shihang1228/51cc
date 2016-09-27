<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
use Home\Model\BaseModel;
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

//import("Org.Util.PHPExcel");
//包含excel处理文件
require_once('excel/PHPExcel.class.php');
require_once('excel/PHPExcel/IOFactory.php');
require_once('excel/PHPExcel/Reader/Excel5.php');

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
			echo $xlsfile.'上传成功！';
			$this->import_supply($xlsfile);
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
		$objReader = \PHPExcel_IOFactory::createReaderForFile($arg_filename);  //读取句柄
		$objPHPExcel = $objReader->load($arg_filename);  //加载文件
		$sheet = $objPHPExcel->getSheet(0);  //第一个表单
		$highestRow = $sheet->getHighestRow();  //总行数 
		$highestColumn = $sheet->getHighestColumn();  //总列数
		if($highestColumn < 'M'){  //列数不足(固定为8列)
			echo '<script>alert(\'您选择的文件看起来有些问题,信息太少哦.\');</script>';
			return;
		}
		$highestColumn = 'M';  //最多取到O列(15)
		//$objPHPExcel->setActiveSheetIndex(1);
		//$objPHPExcel->getActiveSheet();
        //转换成列名
		// $supply = new OrderPurchaseModel();
		$supply = new OrderSupplyModel();
		
		$ordercode = date('YmdHi').rand(1000,9999);  //导入操作的批标识
        $order['ordercode'] = $ordercode;
		$order['companyid'] = I('session.companyid',1);
		$order['createdby'] = I('session.userid',0);
		$order['deliveryplace'] = 'JinZhong';
		$order['deliverydate'] = date('Y-m-d H:i');
		$order['statusid'] = 1;  //默认为待审核
		$order['comments'] = '';
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
        //品种 牌号 厂家 规格 单位 单价 镀层 数量 长度/直径 宽度/孔径 高度/厚度 纯度 回收料
        $colname = array(0=>'varietyid',1=>'gradeid',2=>'factoryid',3=>'specid',4=>'unitid',5=>'unitprice',6=>'claddingid',7=>'quantity',8=>'length_diameter',9=>'width_aperture',10=>'height_thickness',11=>'purity',12=>'isreclaimed');
		$data = array();
		$variety = new VarietyModel();
		$grade = new GradeModel();
		$factory = new ManufacturerModel();
		$spec = new SpecificationModel();
		$unit = new UnitModel();
		$cladding = new CladdingModel();
		$reclaim = new ReclaimModel();

		for($i=2;$i<=$highestRow;$i++)  //首行含标题
		{
			$row = array();
            //拼接插入sql语句
			for($j='A',$k=0;$j<=$highestColumn;$j++,$k++)  //从A列开始读数据
			{
				$row['orderid'] = $orderid;
				$row['instime'] = date('Y-m-d H:i:s');
				$row['updatetime'] = date('Y-m-d H:i:s');
				$row[$colname[$k]] = $sheet->getCell("$j$i")->getValue();  //取单元格的值(下标顺序:列 行)
				switch($k)
				{
					case 0:
						if(!empty($row['varietyid'])){
							$ret = $variety->isNameExists($row['varietyid']);
							if($ret['result']==true) $row['varietyid'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						break;
					case 1:
						if(!empty($row['gradeid'])){
							$ret = $grade->isNameExists($row['gradeid']);
							if($ret['result']==true) $row['gradeid'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						break;
					case 2:
						if(!empty($row['factoryid'])){
							$ret = $factory->isNameExists($row['factoryid']);
							if($ret['result']==true) $row['factoryid'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						break;
					case 3:
						if(!empty($row['specid'])){
							$ret = $spec->isNameExists($row['specid']);
							if($ret['result']==true) $row['specid'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						break;
					case 4:
						if(!empty($row['unitid'])){
							$ret = $unit->isNameExists($row['unitid']);
							if($ret['result']==true) $row['unitid'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						break;
					case 6:
						if(!empty($row['claddingid'])){
							$ret = $cladding->isNameExists($row['claddingid']);
							if($ret['result']==true) $row['claddingid'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						break;
					case 8:
						if(empty($row['length_diameter'])) $row['length_diameter'] = 0;
						break;
					case 9:
						if(empty($row['width_aperture'])) $row['width_aperture'] = 0;
						break;
					case 10:
						if(empty($row['height_thickness'])) $row['height_thickness'] = 0;
						break;
					case 11:
						//if(strtolower($row['purity'])=='null' || isnull($row['purity'])) $row['purity'] = 0;
						if(empty($row['purity'])) $row['purity'] = 0;
						break;
					case 12:
						if(!empty($row['isreclaimed'])){
							$ret = $reclaim->isNameExists($row['isreclaimed']);
							if($ret['result']==true) $row['isreclaimed'] = $ret['pk'];
							else{//数据不存在,自动添加还是忽略此条内容?
							}
						}
						else{
							$row['isreclaimed'] = 'null';
						}
						break;
					default:
						/*$ret = $->isNameExists($row['id']);
						if($ret['result']==true) $row['id'] = $ret['pk'];
						else{//数据不存在,自动添加还是忽略此条内容?
						}*/
						break;
				}
			}
			$data[$i] = $row;
        }
		$retsum = true;
		foreach($data as $row){
			if($row['varietyid']!=null){
				$rtn = $detail->add($row);
				if($rtn===false){
					$retsum = false;
					exit;
				}
			}
		}
		if($retsum===true){
			$supply->commit();
			dump('import success.');
		}
		else{
			$supply->rollback();
			dump('import failed.');
		}
		echo 'over';
		// $PHPExcel = new \PHPExcel();
		// var_dump($PHPExcel);
	}
}