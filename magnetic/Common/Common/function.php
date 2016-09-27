<?php

function v($varient){
	//var_dump($varient);
	dump($varient,1,'<pre>',0);  //这是tp的函数
}

function getHotCity(){
	$hotcity = array('id'=>0,'name'=>'热门地区','city'=>array(array('citycode'=>0,'cityname'=>'广州'),
															array('citycode'=>0,'cityname'=>'佛山'),
															array('citycode'=>0,'cityname'=>'东莞'),
															array('citycode'=>0,'cityname'=>'茂名'),
															array('citycode'=>0,'cityname'=>'汕头'),
															array('citycode'=>0,'cityname'=>'上海'),
															array('citycode'=>0,'cityname'=>'宁波'),
															array('citycode'=>0,'cityname'=>'余姚'),
															array('citycode'=>0,'cityname'=>'青岛'),
															array('citycode'=>0,'cityname'=>'临沂'),
															array('citycode'=>0,'cityname'=>'淄博'),
															array('citycode'=>0,'cityname'=>'天津'),
															array('citycode'=>0,'cityname'=>'雄县'),
															array('citycode'=>0,'cityname'=>'北京'),
															array('citycode'=>0,'cityname'=>'盘锦'),
															array('citycode'=>0,'cityname'=>'重庆'),
															array('citycode'=>0,'cityname'=>'成都')));
	return $hotcity;
}

function uploadPics($arg_base_path){
	//文件上传
	$uploadfilesuccess = true;
	$data=array();
	$upload = new \Think\Upload();
	$upload->exts = array('jpg','gif','png','jpeg');
	$upload->rootPath = $arg_base_path;
	//$upload->rootPath = './Public/companypic/';
	$upload->savePath = '';
	$info = $upload->upload();
	$filepos = "";
	if(!$info){
		$uploadfilesuccess = false;
		//$this->error($upload->getError());
	}
	else{
		$i=0;
		$image=new \Think\Image();
		foreach($info as $file){
			$filepos =  $file['savepath'].$file['savename'];
			$data[$file['key']]=$filepos;
			$image->open($upload->rootPath.$file['savepath'].$file['savename']);
			$image->thumb(150,150,\Think\Image::IMAGE_THUMB_CENTER)->save($upload->rootPath.$file['savepath'].str_replace('.','_thumbs.',$file['savename']));//.$row["cont_icon"]
		}
	}
	return $data;
}
?>