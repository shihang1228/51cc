<?php
return array(
	//'配置项'=>'配置值'

	//平台权限控制参数
	'AUTH_PLATFORM' => array(
		'AUTH_GROUP'        => 'auth_group',        // 用户组数据表名
		'AUTH_GROUP_ACCESS' => 'auth_group_access', // 用户-用户组关系表
		'AUTH_RULE'         => 'auth_rule',         // 权限规则表
		'AUTH_USER'         => 'user'               // 用户信息表
	),
	
	//sessions配置(使用数据库)
	//'SESSION_OPTIONS'=>array(
	//	'type'=>'Db',
	//	'expire'=>7200,
	//	),
   
	//图片存储路径
	'PIC_BASEPATH'				=> 'http://mcr123.oss-cn-beijing.aliyuncs.com/',
	'PIC_GOODS'					=> 'Public/pics/goods/',  			//
	'PIC_HEAD'					=> 'Public/pics/head/',    			//头像
	'PIC_HEADTHUMBNAIL'			=> 'Public/pics/head_thumbnail/'    //缩略头像
);