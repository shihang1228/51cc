<?php
	session_start(); // 启用session支持
	if(!isset($_SESSION['userPhone'])){  //身份验证
		echo "<script>alert('非法访问!请重新登录.');window.location.href=\"index.php\";</script>";
		return;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>上传考生成绩</title>
</head>
<body>
<?php
	include_once("classes/MysqlDB.php");
	include_once("classes/ec_sdk_db.class.php");
    
	$db = MysqlDB::getInstance();

	//包含excel处理文件
	require_once('classes/PHPExcel.php');
	require_once('classes/PHPExcel/IOFactory.php');
	require_once('classes/PHPExcel/Reader/Excel5.php');
	
    $usrid = $_SESSION['usrid'];  //操作者ID
    $userId = $_SESSION['userId'];  //EC用户ID
    $corpId = $_SESSION['corpId'];  //企业ID
    if(isset($_POST['km'])) $tag = $_POST['km'];
    else $tag = 0;
    
    $rtn = MysqlDB::getData('select appId,appSecret,downTime from corporation where corpId='.$corpId);
    if(!is_array($rtn)){
        echo "<script>alert('没有查询到企业信息,请联系管理员'); window.location.href=\'main.php\';</script>";
        return;
    }
    $rtn = $rtn[0];
    $ec = new ec_sdk($rtn['appId'],$rtn['appSecret'],$corpId);
    
	$path='./xlsfiles/'.date('Ymd').'/';  //文件保存路径
	if(!file_exists($path)){
		mkdir($path);
	}
	
	$streamFileRand = "";
	
	$fileprefix = strrchr($_FILES['importfile']["name"],'.');  //取文件后缀
	if($fileprefix == ".xlsx" || $fileprefix == ".xls")  //只处理xlsx/xls后缀的文件
	{
		if ($_FILES['importfile']["error"] > 0){  //传输出错
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";  //输出错误信息
		}
		else{
			$streamFileRand = $path.date('YmdHis').rand(1000,9999).$fileprefix;    //生成一个随机文件名
			move_uploaded_file($_FILES["importfile"]["tmp_name"],$streamFileRand);  //将上传的文件以生成的随机文件名保存
		}
	}
	else{
		echo "<script>alert('文件非法,请重新选择');window.location.href=\"xls_upload.php\";</script>";
		return;
	}
	if($streamFileRand!=''){  //文件名非空
		$objReader = PHPExcel_IOFactory::createReaderForFile($streamFileRand);  //读取句柄
		$objPHPExcel = $objReader->load($streamFileRand);  //加载文件
		$sheet = $objPHPExcel->getSheet(0);  //第一个表单
		$highestRow = $sheet->getHighestRow();  //总行数 
		$highestColumn = $sheet->getHighestColumn();  //总列数
		if($highestColumn < 'H'){  //列数不足(固定为8列)
			echo '<script>alert(\'您选择的文件看起来有些问题,信息太少哦.\');</script>';
			return;
		}
		$highestColumn = 'H';  //最多取到O列(15)
		//$objPHPExcel->setActiveSheetIndex(1);
		//$objPHPExcel->getActiveSheet();
        //转换成列名
        $batchId = date('YmdHi').rand(1000,9999);  //导入操作的批标识
        //需要记录导入操作(未完)
        //序号	姓名	档案编号	性别	身份证号码	车型	电话	通过
        $colname = array(0=>'sn',1=>'examinee',2=>'archiveNo',3=>'gender',4=>'idcardNo',5=>'mototype',6=>'phone',7=>'score');  //
        $courId = $tag;
		$data = array();
		for($i=2;$i<=$highestRow;$i++)  //首行含标题
		{
            $sql='insert into imprecords(corpId,sn,examinee,archiveNo,gender,idcardNo,mototype,phone,courId,score,importDate,usrid,batchId) values('.$corpId.',';
			$row = array();
            //拼接插入sql语句
			for($j='A',$k=0;$j<=$highestColumn;$j++,$k++)  //从A列开始读数据
			{
				$row[$colname[$k]] = $sheet->getCell("$j$i")->getValue();  //取单元格的值(下标顺序:列 行)
                if($j=='B' or $j>='E'){  //字符型,需要加引号(')
                    if($j=='H'){  //成绩,转换成布尔值
                        if(strlen(trim($row[$colname[$k]]))==0) $sql .= 'null,null,';
                        else{
                            if(trim($row[$colname[$k]])=='是') $sql .= $courId.',1,';
                            else $sql .= $courId.',0,';
                        }
                    }
                    else $sql .= '\''.$row[$colname[$k]].'\',';  //除成绩外的其它字符型字段
                }
                else{  //数字类型,无须加引号(')的
                    if($j=='D') $sql .= ($row[$colname[$k]]=='男'?1:0).',';
                    else $sql .= $row[$colname[$k]].',';
                }
			}
            $sql .= 'now(),'.$usrid.','.$batchId.')';
            if(MysqlDB::execute_sql($sql)===false) echo '保存失败'.$sql.'<br>';
			$data[$i] = $row;
        }
		//序号,姓名,档案编号,性别,身份证号码,车型,电话,科一不合格,科一合格,科二不合格,科二合格,科三不合格,科三合格,科四不合格,科四合格
        //corpId,sn,examinee,archiveNo,gender,idcardNo,mototype,phone,course1fail,course1pass,course2fail,course2pass,course3fail,course3pass,course4fail,course4pass,importDate,usrid
		foreach($data as $row){
            //考生表,examinee(examId,examinee,examPhone,idcardNo,impDate,corpId,usrid)
            $sql = 'insert into examinee(examinee,examPhone,idcardNo,corpId,usrid) select \''.$row['examinee'].'\',\''.$row['phone'].'\',\''.$row['idcardNo'].'\','.$corpId.','.$usrid;
            //保存考生信息(没有的话)
            MysqlDB::execute_sql('call p_examinee_save(\''.$row['examinee'].'\',\''.$row['phone'].'\',\''.$row['idcardNo'].'\','.$corpId.','.$usrid.')');
            //查询此人信息
            $examId = MysqlDB::getData('select examId from examinee where idcardNo=\''.$row['idcardNo'].'\'');
            if($examId!==false){  //存在信息
                $examId = $examId[0]['examId'];//examId,courId,examPassed,examDate
                if(trim($row['score'])!='') MysqlDB::execute_sql('call p_examrecord_save('.$examId.','.$courId.','.($row['score']=='是'?1:0).',now(),1,\''.$batchId.'\')');
            }
            else{
                echo '没找到.'.$row['idcardNo'].'的数据 .';
            }
            //if(MysqlDB::execute_sql($sql)===false) echo '保存失败'.$sql.'<br>';
            //echo $sql.'<br>';
		}

        $labeldata = MysqlDB::getData('call p_label_up('.$corpId.','.$userId.',\''.$batchId.'\')');
        if(is_array($labeldata)){
            $list = array();
            foreach($labeldata as $row){
                $list[] = array_splice($row,0,3);
            }
            $data = array('list'=>$list);
            //echo json_encode($data);
            $rtn = $ec->set_Label($data);
            if($rtn['result'] == 'success') echo '<script>alert("标签设置成功."); window.location.href=\'main.php\';</script>';
            else{
                error_log(date('Y-m-d H:i:s') .'label:'.$rtn['errors']."\n",3,$_SERVER['DOCUMENT_ROOT']."/log/sysruninfo.log");
                echo '<script>alert("标签设置失败."); window.location.href=\'main.php\';</script>';
            }
            //echo json_encode($labeldata);
        }
        else{
            echo '<script>alert("未上传有效数据,操作完成."); window.location.href=\'main.php\';</script>';
        }
	}
?>
</body>
</html>