<?php if (!defined('THINK_PATH')) exit();?><!--头部公共部分-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="baidu-site-verification" content="GEYeUSYelI" />
        <meta property="qc:admins" content="1376034076620173541176375" />
        <meta property="wb:webmaster" content="98f17058f76adb4c" />
        <title>找塑料网 - 塑料原料价格|塑料颗粒|ABS塑料|PVC塑料|PE塑料|PP塑料 - 领先的一站式塑化电商</title>
        <meta name="keywords" content='塑料原料价格,塑料价格,聚乙烯价格,聚丙烯价格,ABS塑料,PVC塑料,PE塑料,PP塑料,zhaosuliao.com'/>
        <meta name="description" content='找塑料网zhaosuliao.com领先的一站式塑化电商。专注于聚乙烯PE，聚丙烯PP、PVC、ABS等塑料原料交易，提供撮合交易及代销代购（自营）、物流、金融、行情分析、改性塑料OEM等服务。' />
        <link href="/Public/pc/plugin/artdialog/dialog.css" rel="stylesheet" type="text/css"/>       
        <link href="/Public/pc/css/common.css" rel="stylesheet" type="text/css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <link href="/Public/pc/plugin/jquery-validate/jquery.validate.min.css" type="text/css" rel="stylesheet" />
        <link href="/Public/pc/css/page.css" rel="stylesheet" type="text/css" />
        <script src="/Public/pc/plugin/jquery-validate/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/Public/pc/plugin/jquery-validate/jquery.validate.method.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/pc/plugin/jquery-areapop/jquery-areapop.js"></script>
        <script src="/Public/pc/plugin/artdialog/dialog.js" type="text/javascript"></script>
        <script src="/Public/pc/plugin/form.js" type="text/javascript"></script>
        <script src="/Public/pc/js/js.js" type="text/javascript"></script>
        <script src="/Public/pc/js/common.js" type="text/javascript"></script>        
    </head>
<body><div id="new_top">
        <div class="new_top_content clearfix" id="js-login-info">
            <ul class="fr message">
                <li class="message_list"><a href="<?php echo U('Home/User/member');?>">会员中心</a></li>
                <li class="message_list">交易热线：020-83939808 </li>    
                <li class="message_list none"> 交易时间：工作日 9:00-17:30</li>
            </ul>
        </div>
           <script type="text/javascript">
            $(document).ready(function(){
                var linkman = getCookie("linkman");
                if (linkman != "" && linkman != "null" && linkman != null) {
                    $("#js-login-info").prepend('<div style="float:left;">尊敬的<a href="member" style="color: red;">&nbsp;'+ linkman +'&nbsp;</a><a href="logout">【退出】</a>&nbsp;&nbsp;欢迎来到找塑料网!&nbsp;&nbsp;</div>');
                }else{
                    var register = "<?php echo U('User/register');?>";
                    var login = "<?php echo U('User/login');?>";
                    $("#js-login-info").prepend('<div style="float:left;"><span class="login fl">您好，欢迎来到找塑料网!  【<a href="'+login+'">会员登录</a> | <a href="'+register+'">免费注册</a>】</span></div>');
                }
            });
            </script>
</div><div id="new_logo">
    <div class="new_logo_content">
        <h1>
            <a href="default.htm"><img class="logo_img" src="/Public/pc/image/common/logo.png" alt="找塑料网logo" width="494"  height="85" /></a>
            <span class="dis_none">找塑料网</span>
        </h1>
        <div class="search">
            <div class="sear_title">
                <span class="on">搜现货</span>
                <span>物性表</span>
            </div>
            <div class="sear_cont">
                <form>
                    <input class="sear_inp" type="text" name="keyword" value="请输入品种/牌号/厂家/公司进行搜索" />
                    <input type="text" style="display:none" />
                    <input class="sear_sub" type="button"  value=" "/>
                </form>
            </div>
        </div>
    </div>
</div><div id="new_nav">
    <div class="new_nav_content">
        <a href="<?php echo U('Home/Index/index');?>" class="hover">首页</a>
        <a href="<?php echo U('Home/Product/product');?>" target="_blank" >现货资源<i class="hot"></i></a>
        <a href="<?php echo U('Home/Company/pricelist');?>" target="_blank" >报价单</a>
        <a href="<?php echo U('Home/Purchase/purchase');?>" target="_blank" >采购信息</a>
        <a href="<?php echo U('Home/Hq/hq');?>" target="_blank">行情中心</a>
        <a href="<?php echo U('Home/Finance/finance');?>" target="_blank" >找塑金融</a>
        <a href="<?php echo U('Home/Finance/finance');?>" target="_blank" >福牛物流</a>
        <!-- <div class="trend_nav ">价格走势
            <div class="trend_other" style="display:none;">
                <a href="http://www.zhaosuliao.com/pricedeal" target="_blank" class="bd">成交价</a>
                <a href="http://www.zhaosuliao.com/factoryprice" target="_blank" class="bd01">出厂价</a>
            </div>
        </div> -->
        <a href="<?php echo U('Home/Bidding/bidding');?>" target="_blank" >竞价专区<b class="news"></b></a>
        <a href="<?php echo U('Home/Wuxingbiao/wuxingbiao');?>" target="_blank" >物性表</a>
        <a href="<?php echo U('Home/Index/app');?>" target="_blank" >手机客户端</a>

        <a href="member/product/product_import" target="_blank" class="a1"><i class="ico02"></i>上传报价单</a>
        <a href="member/product/add" target="_blank" class="a1"><i class="ico01"></i>快速报价</a>
    </div>
</div>
<link href="/Public/pc/css/main.css" rel="stylesheet" type="text/css" />
<script src="/Public/pc/js/main.js" type="text/javascript"></script>
<script src="/Public/pc/js/page.js" type="text/javascript"></script>
    <form method="get" id="form_filter" action="/product/companylist"> 
    <div id="xhzysx" class="clearfix ">
            <div class="xhzysx_content">
                <div class="content_theme">
                        <h3 class="xhzysx_title"><span class="fcolor_8">报价单</span>筛选</h3>   
<div class="flxz_type">
    <div class="sx_type clearfix">
        <h4>热门地区</h4>
        <p style="display:block;">
        	            <a href="javascript:void(0);" data-key="city" data-val="广州" class="f ">广州</a>
            <a href="javascript:void(0);" data-key="city" data-val="佛山" class="f ">佛山</a>
            <a href="javascript:void(0);" data-key="city" data-val="东莞" class="f ">东莞</a>
            <a href="javascript:void(0);" data-key="city" data-val="茂名" class="f ">茂名</a>
            <a href="javascript:void(0);" data-key="city" data-val="汕头" class="f ">汕头</a>
            <a href="javascript:void(0);" data-key="city" data-val="上海" class="f ">上海</a>
            <a href="javascript:void(0);" data-key="city" data-val="宁波" class="f ">宁波</a>
            <a href="javascript:void(0);" data-key="city" data-val="余姚" class="f ">余姚</a>
            <a href="javascript:void(0);" data-key="city" data-val="青岛" class="f ">青岛</a>
            <a href="javascript:void(0);" data-key="city" data-val="临沂" class="f ">临沂</a>
            <a href="javascript:void(0);" data-key="city" data-val="淄博" class="f ">淄博</a>
            <a href="javascript:void(0);" data-key="city" data-val="天津" class="f ">天津</a>
            <a href="javascript:void(0);" data-key="city" data-val="雄县" class="f ">雄县</a>
            <a href="javascript:void(0);" data-key="city" data-val="北京" class="f ">北京</a>
            <a href="javascript:void(0);" data-key="city" data-val="盘锦" class="f ">盘锦</a>
            <a href="javascript:void(0);" data-key="city" data-val="重庆" class="f ">重庆</a>
            <a href="javascript:void(0);" data-key="city" data-val="成都" class="f ">成都</a>
        </p>
         <ul class="rmdq_fl" style="display:none;">
        	<li>
            	<a class="area" href="javascript:void(0);">华南</a>
                <a href="javascript:void(0);" data-key="city" data-val="广州" class="f ">广州</a>
                <a href="javascript:void(0);" data-key="city" data-val="佛山" class="f ">佛山</a>
                <a href="javascript:void(0);" data-key="city" data-val="东莞" class="f ">东莞</a>
                <a href="javascript:void(0);" data-key="city" data-val="茂名" class="f ">茂名</a>
                <a href="javascript:void(0);" data-key="city" data-val="汕头" class="f ">汕头</a>
                <a href="javascript:void(0);" data-key="city" data-val="中山" class="f ">中山</a>
                <a href="javascript:void(0);" data-key="city" data-val="深圳" class="f ">深圳</a>
                <a href="javascript:void(0);" data-key="city" data-val="乐从" class="f ">乐从</a>
                <a href="javascript:void(0);" data-key="city" data-val="厦门" class="f ">厦门</a>
            </li>
            <!--{/loop}-->
        	<li>
            	<a class="area" href="javascript:void(0);">华东</a>
                <a href="javascript:void(0);" data-key="city" data-val="上海" class="f ">上海</a>
                <a href="javascript:void(0);" data-key="city" data-val="宁波" class="f ">宁波</a>
                <a href="javascript:void(0);" data-key="city" data-val="余姚" class="f ">余姚</a>
                <a href="javascript:void(0);" data-key="city" data-val="杭州" class="f ">杭州</a>
                <a href="javascript:void(0);" data-key="city" data-val="常州" class="f ">常州</a>
                <a href="javascript:void(0);" data-key="city" data-val="南京" class="f ">南京</a>
            </li>
            <!--{/loop}-->
        	<li>
            	<a class="area" href="javascript:void(0);">华中</a>
                <a href="javascript:void(0);" data-key="city" data-val="武汉" class="f ">武汉</a>
                <a href="javascript:void(0);" data-key="city" data-val="郑州" class="f ">郑州</a>
            </li>
            <!--{/loop}-->
        	<li>
            	<a class="area" href="javascript:void(0);">华北</a>
                <a href="javascript:void(0);" data-key="city" data-val="青岛" class="f ">青岛</a>
                <a href="javascript:void(0);" data-key="city" data-val="临沂" class="f ">临沂</a>
                <a href="javascript:void(0);" data-key="city" data-val="淄博" class="f ">淄博</a>
                <a href="javascript:void(0);" data-key="city" data-val="天津" class="f ">天津</a>
                <a href="javascript:void(0);" data-key="city" data-val="雄县" class="f ">雄县</a>
                <a href="javascript:void(0);" data-key="city" data-val="北京" class="f ">北京</a>
                <a href="javascript:void(0);" data-key="city" data-val="青州" class="f ">青州</a>
            </li>
            <!--{/loop}-->
        	<li>
            	<a class="area" href="javascript:void(0);">东北</a>
                <a href="javascript:void(0);" data-key="city" data-val="沈阳" class="f ">沈阳</a>
                <a href="javascript:void(0);" data-key="city" data-val="大连" class="f ">大连</a>
                <a href="javascript:void(0);" data-key="city" data-val="大庆" class="f ">大庆</a>
                <a href="javascript:void(0);" data-key="city" data-val="抚顺" class="f ">抚顺</a>
                <a href="javascript:void(0);" data-key="city" data-val="盘锦" class="f ">盘锦</a>
            </li>
            <!--{/loop}-->
        	<li>
            	<a class="area" href="javascript:void(0);">西北</a>
                <a href="javascript:void(0);" data-key="city" data-val="兰州" class="f ">兰州</a>
            </li>
            <!--{/loop}-->
        	<li>
            	<a class="area" href="javascript:void(0);">西南</a>
                <a href="javascript:void(0);" data-key="city" data-val="重庆" class="f ">重庆</a>
                <a href="javascript:void(0);" data-key="city" data-val="成都" class="f ">成都</a>
            </li>
            <!--{/loop}-->
        </ul>
        <span class="down_btn open_1" href="javascript:void(0)">展开</span>
        <span class="up_btn close_1" href="javascript:void(0)">收起</span>
    </div>
    
    
     <div class="sx_type clearfix">
        <h4>通用塑料</h4>
        <p>
            <a href="javascript:void(0);" data-key="cate" data-val="ABS" class="f hot ">ABS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PP" class="f hot ">PP</a>
            <a href="javascript:void(0);" data-key="cate" data-val="HIPS" class="f hot ">HIPS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="GPPS" class="f hot ">GPPS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="AS(SAN)" class="f  ">AS(SAN)</a>
            <a href="javascript:void(0);" data-key="cate" data-val="HDPE" class="f hot ">HDPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="LDPE" class="f hot ">LDPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="LLDPE" class="f hot ">LLDPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EVA" class="f hot ">EVA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PVC" class="f hot ">PVC</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EAA" class="f  ">EAA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="MDPE" class="f hot ">MDPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="MLLDPE(茂金属)" class="f  ">MLLDPE(茂金属)</a>
        </p>
       
        <span style="display:none" class="down_btn open" href="javascript:void(0)">展开</span>
        <span class="up_btn close" href="javascript:void(0)">收起</span>
    </div>
    
     <div class="sx_type clearfix">
        <h4>工程塑料</h4>
        <p>
            <a href="javascript:void(0);" data-key="cate" data-val="PA" class="f hot ">PA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC" class="f  ">PC</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PBT" class="f hot ">PBT</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PA6" class="f  ">PA6</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PET" class="f hot ">PET</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/ABS" class="f  ">PC/ABS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PMMA" class="f  ">PMMA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="POM" class="f  ">POM</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EPS" class="f  ">EPS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="ABS/PC" class="f  ">ABS/PC</a>
            <a href="javascript:void(0);" data-key="cate" data-val="ABS/PMMA" class="f  ">ABS/PMMA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="K(Q)胶" class="f  ">K(Q)胶</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PCTG" class="f  ">PCTG</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PPS" class="f  ">PPS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PPO" class="f  ">PPO</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PEEK" class="f  ">PEEK</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PEI" class="f  ">PEI</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PES" class="f  ">PES</a>
            <a href="javascript:void(0);" data-key="cate" data-val="ASA" class="f  ">ASA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="ABS/PA" class="f  ">ABS/PA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="ABS/PBT" class="f  ">ABS/PBT</a>
            <a href="javascript:void(0);" data-key="cate" data-val="AES" class="f  ">AES</a>
            <a href="javascript:void(0);" data-key="cate" data-val="APPEEL" class="f  ">APPEEL</a>
            <a href="javascript:void(0);" data-key="cate" data-val="ASA/PC" class="f  ">ASA/PC</a>
            <a href="javascript:void(0);" data-key="cate" data-val="DAP" class="f  ">DAP</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EBA" class="f  ">EBA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EEA" class="f  ">EEA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EVOH" class="f  ">EVOH</a>
            <a href="javascript:void(0);" data-key="cate" data-val="MMBS" class="f  ">MMBS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PA/ABS" class="f  ">PA/ABS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PBT/ABS" class="f  ">PBT/ABS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PBT/ASA" class="f  ">PBT/ASA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PBT/PC" class="f  ">PBT/PC</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PBT/PET" class="f  ">PBT/PET</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/ASA" class="f  ">PC/ASA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/HIPS" class="f  ">PC/HIPS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/PBT" class="f  ">PC/PBT</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/PET" class="f  ">PC/PET</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/PMMA" class="f  ">PC/PMMA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/PS" class="f  ">PC/PS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/PTFE" class="f  ">PC/PTFE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PC/SAN" class="f  ">PC/SAN</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PPE" class="f  ">PPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PPE/PA" class="f  ">PPE/PA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PPO/PA" class="f  ">PPO/PA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PP-R" class="f  ">PP-R</a>
            <a href="javascript:void(0);" data-key="cate" data-val="PP-B" class="f  ">PP-B</a>
            <a href="javascript:void(0);" data-key="cate" data-val="UHMWPE" class="f  ">UHMWPE</a>
        </p>
        <span class="down_btn open" href="javascript:void(0)">展开</span>
        <span class="up_btn close" href="javascript:void(0)">收起</span>
    </div>
    
     <div class="sx_type clearfix">
        <h4>热塑弹性体</h4>
        <p>
            <a href="javascript:void(0);" data-key="cate" data-val="POE" class="f  ">POE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="POP" class="f  ">POP</a>
            <a href="javascript:void(0);" data-key="cate" data-val="SBS" class="f hot ">SBS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="TPE" class="f hot ">TPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="TPO" class="f hot ">TPO</a>
            <a href="javascript:void(0);" data-key="cate" data-val="TPR" class="f  ">TPR</a>
            <a href="javascript:void(0);" data-key="cate" data-val="TPU" class="f hot ">TPU</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EMA" class="f  ">EMA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="EMMA" class="f  ">EMMA</a>
            <a href="javascript:void(0);" data-key="cate" data-val="CPE" class="f  ">CPE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="SEBS" class="f  ">SEBS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="TPEE" class="f  ">TPEE</a>
            <a href="javascript:void(0);" data-key="cate" data-val="SURLYN" class="f  ">SURLYN</a>
            <a href="javascript:void(0);" data-key="cate" data-val="SIS" class="f  ">SIS</a>
            <a href="javascript:void(0);" data-key="cate" data-val="TPV" class="f  ">TPV</a>
            <a href="javascript:void(0);" data-key="cate" data-val="硅胶" class="f  ">硅胶</a>
        </p>
        <span style="display:none;" class="down_btn open" href="javascript:void(0)">展开</span>
              <span class="up_btn close" href="javascript:void(0)">收起</span>
          </div>
          
          <p class="sxtj clearfix">
          	<span class="sxtj_text">筛选条件：</span>
              <span class="sxtj_qb">全部</span>
          </p>
          
          <p class="sxtj_sear">
         
          	<span> <i>品 种 ： </i> <input class="inp_yu" type="text" name="cate" id="cate" value="" /> </span>
              <span> <i>牌 号 ： </i> <input class="inp_yu" type="text" name="material" id="material" value="" /> </span>
              <span> <i>厂 家 ： </i> <input class="inp_yu" type="text" name="manufacturer" id="manufacturer" value="" /> </span>
              <span> <i>公 司 ： </i> <input class="inp_yu" type="text" name="company" id="company" value="" /> </span>
          	<input class="submit_btn" type="submit"  value=" "/>
              <input type="hidden" name="city" id="city"  value="" />
             <!--  <input type="hidden" name="keyword" id="keyword"  value="" /> -->
          </p>
          
</div>
   
      			</div>
            </div>   
     </div>
     
    <!-----报价单列表--------> 
     
     <div id="xhzy_list" class="mar_t20">
        <div class="xhzy_list_content">
            <div class="list_content">
                <div class="list_content_title list_content_title_bjd">
                    <div class="list_title fl"><span class="fcolor_8">报价单</span>列表</div>
                    <div class="limit_su fl">共搜到<span class="fcolor_8">357</span>条数据</div>
                 
                    
                    <div class="yxsj yxsj_bjd  fl">
                        <i>有效时间&nbsp;&nbsp;</i>
                        <div class="select">
                        	<a href="javascript:void(0)" class="moren">5天内</a>
                         	<ul class="select_list">
                            	<li data-val="-1">1天内</li>
                            	<li data-val="-3">3天内</li>
                            	<li data-val="-5">5天内</li>
                            	<li data-val="-10">10天内</li>
                            	<li data-val="-15">15天内</li>
                            	<li data-val="-30">30天内</li>
                            </ul>
                            <input type="hidden" name="dayCon" id="time" value="-5" />
                         </div>                        
                    </div>
                    <div class="page_limit fl">
                        <i>每页显示</i>
                        <span data-val="20"  class="click">20条</span>
                        <span data-val="40" >40条</span>
                        <span data-val="60" >60条</span>
                        <!-- <input id="pageNo" name="pageNo" type="hidden" value="1" /> -->
						<input id="pageSize" name="pageSize" type="hidden" value="20" />
                    </div>
                </div>
            </div>
            <table class="xhzy_table">
                <tr class="tr_h39">
                    <th class="td_w250">公司名称 </th>
                    <th class="td_w100">联系人 </th>
                    <th class="td_w120">联系方式</th>
                    <th class="td_w230">主营品种</th>
                    <th class="td_w150">商家所在地</th>
                    <th class="td_w100">上传时间</th>
                    <th class="td_w100">下载数</th>
            
                    <th class="td_w150">操作</th>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">东莞市常平金满林塑胶制品厂</td>
                    <td class="td_w100">江小姐</td>
                    <td class="td_w120">13723792661</td>
                    <td class="td_w230">PE/PP</td>
                    <td class="td_w150">东莞</td>
                    <td class="td_w100">2小时前</td>
                    <td class="td_w100">1730
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E4_25B8_259C_25E8_258E_259E_25E5_25B8_2582_25E5_25B8_25B8_25E5_25B9_25B3_25E9_2587_2591_25E6_20E0805E8B9"></a>
                        <a class="preview" href="../company/39468.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">湖南四联创业新材料科技有限公司</td>
                    <td class="td_w100">罗宏志</td>
                    <td class="td_w120">18163621116</td>
                    <td class="td_w230">聚丙烯，聚乙烯</td>
                    <td class="td_w150">长沙</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">590
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E6_25B9_2596_25E5_258D_2597_25E5_259B_259B_25E8_2581_2594_25E5_2588_259B_25E4_25B8_259A_25E6_20441F9B25A"></a>
                        <a class="preview" href="../company/152992.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">日润塑料有限公司</td>
                    <td class="td_w100">唐女士</td>
                    <td class="td_w120">18923257985</td>
                    <td class="td_w230">PP.PE.PS</td>
                    <td class="td_w150">佛山</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">947
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E6_2597_25A5_25E6_25B6_25A6_25E5_25A1_2591_25E6_2596_2599_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=682"></a>
                        <a class="preview" href="../company/682.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">深圳东联塑胶有限公司</td>
                    <td class="td_w100">辜小姐</td>
                    <td class="td_w120">18025445532</td>
                    <td class="td_w230">中石油，中石化，武汉SK，进口PP　PE</td>
                    <td class="td_w150">乐从</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">1805
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E6_25B7_25B1_25E5_259C_25B3_25E4_25B8_259C_25E8_2581_2594_25E5_25A1_2591_25E8_2583_25B6_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=45765"></a>
                        <a class="preview" href="../company/45765.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">中农集团通用化工有限公司(乐从办)</td>
                    <td class="td_w100">李旺盛</td>
                    <td class="td_w120">13318355399</td>
                    <td class="td_w230">PP/PE</td>
                    <td class="td_w150">佛山</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">1425
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E4_25B8_25AD_25E5_2586_259C_25E9_259B_2586_25E5_259B_25A2_25E9_2580_259A_25E7_2594_25A8_25E5_20E2B07B856"></a>
                        <a class="preview" href="../company/398.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">建树贸易有限公司</td>
                    <td class="td_w100">何先生</td>
                    <td class="td_w120">13902838103</td>
                    <td class="td_w230">PP、PE、PO、ABS</td>
                    <td class="td_w150">乐从</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">926
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E5_25BB_25BA_25E6_25A0_2591_25E8_25B4_25B8_25E6_2598_2593_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=458"></a>
                        <a class="preview" href="../company/458.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">乐从日昌塑料有限公司</td>
                    <td class="td_w100">梁先生</td>
                    <td class="td_w120">13432668100</td>
                    <td class="td_w230">PP，PE,ABS</td>
                    <td class="td_w150">佛山</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">640
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E4_25B9_2590_25E4_25BB_258E_25E6_2597_25A5_25E6_2598_258C_25E5_25A1_2591_25E6_2596_2599_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=63546"></a>
                        <a class="preview" href="../company/63546.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">珠海市祥兴隆化工原料有限公司</td>
                    <td class="td_w100">徐小姐</td>
                    <td class="td_w120">13826082264</td>
                    <td class="td_w230">ABS ,PS ,PP</td>
                    <td class="td_w150">珠海</td>
                    <td class="td_w100">5小时前</td>
                    <td class="td_w100">1193
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E7_258F_25A0_25E6_25B5_25B7_25E5_25B8_2582_25E7_25A5_25A5_25E5_2585_25B4_25E9_259A_2586_25E5_20A7F13826D"></a>
                        <a class="preview" href="../company/8822.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">德州万山实业有限责任公司</td>
                    <td class="td_w100">张圣</td>
                    <td class="td_w120">18766001080</td>
                    <td class="td_w230">PP PE  ABS 丁笨 顺丁</td>
                    <td class="td_w150">德州</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">866
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E5_25BE_25B7_25E5_25B7_259E_25E4_25B8_2587_25E5_25B1_25B1_25E5_25AE_259E_25E4_25B8_259A_25E6_207DA90487A"></a>
                        <a class="preview" href="../company/153578.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">上海阜润塑化科技有限公司</td>
                    <td class="td_w100">谢先生</td>
                    <td class="td_w120">15250237817</td>
                    <td class="td_w230">PMMA PC/ABS PP PC</td>
                    <td class="td_w150">上海</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">1164
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E4_25B8_258A_25E6_25B5_25B7_25E9_2598_259C_25E6_25B6_25A6_25E5_25A1_2591_25E5_258C_2596_25E7_204F649A011"></a>
                        <a class="preview" href="../company/43390.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">东聚塑胶有限公司</td>
                    <td class="td_w100">催海东</td>
                    <td class="td_w120">18038287439</td>
                    <td class="td_w230">ABS PP PE POM PA6/66 PC/ABS PB</td>
                    <td class="td_w150">东莞</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">1207
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E4_25B8_259C_25E8_2581_259A_25E5_25A1_2591_25E8_2583_25B6_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=10818"></a>
                        <a class="preview" href="../company/10818.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">深圳市名远塑料化工有限公司</td>
                    <td class="td_w100">王珂</td>
                    <td class="td_w120">18819034518</td>
                    <td class="td_w230">ABS,PE,PP,POM,PC,PBT,PPS</td>
                    <td class="td_w150">深圳</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">601
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E6_25B7_25B1_25E5_259C_25B3_25E5_25B8_2582_25E5_2590_258D_25E8_25BF_259C_25E5_25A1_2591_25E6_207945F13FC"></a>
                        <a class="preview" href="../company/114303.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">深圳塑世通化工原料有限公司</td>
                    <td class="td_w100">罗先生</td>
                    <td class="td_w120">13556704305</td>
                    <td class="td_w230">PP.PC.ABS.POM.PA66.PA6.PC/ABS</td>
                    <td class="td_w150">深圳</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">930
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E6_25B7_25B1_25E5_259C_25B3_25E5_25A1_2591_25E4_25B8_2596_25E9_2580_259A_25E5_258C_2596_25E5_202562B21EC"></a>
                        <a class="preview" href="../company/55681.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">山东省塑料工业有限公司</td>
                    <td class="td_w100">刘先生</td>
                    <td class="td_w120">18888332662</td>
                    <td class="td_w230">PE/EVA</td>
                    <td class="td_w150">青岛</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">978
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E5_25B1_25B1_25E4_25B8_259C_25E7_259C_2581_25E5_25A1_2591_25E6_2596_2599_25E5_25B7_25A5_25E4_20AB136C0A6"></a>
                        <a class="preview" href="../company/126470.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">青岛盛昌化工有限公司</td>
                    <td class="td_w100">戚经理</td>
                    <td class="td_w120">13806450609</td>
                    <td class="td_w230">PP PE</td>
                    <td class="td_w150">烟台</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">1757
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E9_259D_2592_25E5_25B2_259B_25E7_259B_259B_25E6_2598_258C_25E5_258C_2596_25E5_25B7_25A5_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=4178"></a>
                        <a class="preview" href="../company/4178.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">宁波品塑工贸有限公司</td>
                    <td class="td_w100">俞经理</td>
                    <td class="td_w120">15958801845</td>
                    <td class="td_w230">ABS  AS  PS   PC</td>
                    <td class="td_w150">宁波</td>
                    <td class="td_w100">6小时前</td>
                    <td class="td_w100">621
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E5_25AE_2581_25E6_25B3_25A2_25E5_2593_2581_25E5_25A1_2591_25E5_25B7_25A5_25E8_25B4_25B8_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=103942"></a>
                        <a class="preview" href="../company/103942.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">聚胜塑料贸易有限公司</td>
                    <td class="td_w100">伍生</td>
                    <td class="td_w120">13556664576</td>
                    <td class="td_w230">PC POM PP PBT PA6 PA66</td>
                    <td class="td_w150">东莞</td>
                    <td class="td_w100">7小时前</td>
                    <td class="td_w100">1282
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E8_2581_259A_25E8_2583_259C_25E5_25A1_2591_25E6_2596_2599_25E8_25B4_25B8_25E6_2598_2593_25E6_259C_2589_25E9_2599_2590_25E5_2585_25AC_25E5_258F_25B8&mid=39934"></a>
                        <a class="preview" href="../company/39934.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">深圳市龙岗区塑宝龙塑胶原料经营部</td>
                    <td class="td_w100">王生</td>
                    <td class="td_w120">15818701727</td>
                    <td class="td_w230">PP及工程塑胶原料</td>
                    <td class="td_w150">深圳</td>
                    <td class="td_w100">7小时前</td>
                    <td class="td_w100">1927
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E6_25B7_25B1_25E5_259C_25B3_25E5_25B8_2582_25E9_25BE_2599_25E5_25B2_2597_25E5_258C_25BA_25E5_20C0ED71540"></a>
                        <a class="preview" href="../company/121185.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">鑫成旺塑胶原料有限公司</td>
                    <td class="td_w100">杨林</td>
                    <td class="td_w120">13129449966</td>
                    <td class="td_w230">通用塑料，工程塑料</td>
                    <td class="td_w150">深圳</td>
                    <td class="td_w100">7小时前</td>
                    <td class="td_w100">588
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E9_2591_25AB_25E6_2588_2590_25E6_2597_25BA_25E5_25A1_2591_25E8_2583_25B6_25E5_258E_259F_25E6_20AAEEB3594"></a>
                        <a class="preview" href="../company/151725.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
                <tr class="tr_h56">
                    <td class="td_w250">东莞市兴必昌塑胶原料有限公司</td>
                    <td class="td_w100">雷运龙</td>
                    <td class="td_w120">13728361172</td>
                    <td class="td_w230">LLDPE6201RQ粉，6101RQ粉，7144粉</td>
                    <td class="td_w150">东莞</td>
                    <td class="td_w100">7小时前</td>
                    <td class="td_w100">918
                            <div class="company_div">
                                <p>fds</p>
                                <p>fdsf</p>
                            </div>
                        </div>
                    </td>
             
                    <td class="td_w150">
                      
                      
                     <div class="operation">
                        <a class="download" href="../product/export@company=_25E4_25B8_259C_25E8_258E_259E_25E5_25B8_2582_25E5_2585_25B4_25E5_25BF_2585_25E6_2598_258C_25E5_2085F34E758"></a>
                        <a class="preview" href="../company/5287.html"></a>
                     </div>
                      
                     
                    </td>
                </tr>
            </table>
        </div>
     </div>     
    </form>
    <input type="hidden" id="pageUrlPre" value="/product/companylist?cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo="/>
    <div class="page_a01">
        <div class="page_box">
<span class="on">1</span>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=2">2</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=3">3</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=4">4</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=5">5</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=6">6</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=7">7</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=2">下一页</a>
<a href="../product/companylist@cate=&material=&manufacturer=&company=&city=&dayCon=-5&pageSize=20&pageNo=18">尾页</a>
<span class="total">共 18 页</span>
<span class="to">转到第 <input type="text" value="1" class="n jump_page" /> 页</span>
<span class="go">GO</span>
</div>

    </div>
<!--客服qq-->
<!-- <div class="kf">
    <div class="kf_box">
        <dl class="b">
            <dt>在线客服</dt>
            <dd>
                <div class="b1">服务时间</div>
                <div class="b2">9:00-17:30</div>
                <div class="b3"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3115678895&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:3115678895:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
                <div class="b4">客服热线</div>
                <div class="b5">020-8 3939 808</div>
            </dd>
        </dl>
        <div class="t">
            <a href="javascript:void(0);"></a>
        </div>
    </div>
</div> -->

<div class="kf">
    <ul>
        <li class="one">
            <div class="on" style="display:none;">服务<br />时间</div>
            <div class="other" style="display:none;">9:00-17:30</div>
        </li>
        <li class="two">
            <div class="on" style="display:none;">在线<br />客服</div>
            <div class="other" style="display:none;"><a target="_blank" href="../../wpa.qq.com/msgrd@v=3&uin=3115678895&site=qq&menu=yes"><img border="0" src="../../wpa.qq.com/pa@p=2_3A3115678895_3A51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
        </li>
        <li class="three">
            <div class="on" style="display:none;">客服<br />热线</div>
            <div class="other" style="display:none;">020-8 3939 808</div>
        </li>
        <li class="four" id="up_top">
            <div class="on" style="display:none;">返回<br />顶部</div>
        </li>
    </ul>
</div>
<!--底部公共部分-->
<!-- 页面底部start -->
<div class="footer_wrap">
    <div class="in_box">
        <ul class="box1">
            <li class="one">
                <p class="p1">海量客户资源</p>
                <p>连通上下游</p>
            </li>
            <li class="two">
                <p class="p1">行情、交易、物流、金融</p>
                <p>一站式服务</p>
            </li>
            <li class="three">
                <p class="p1">资深交易员</p>
                <p>免费服务一对一</p>
            </li>
            <li class="four">
                <p class="p1">高效IT系统</p>
                <p>实现供需精准匹配</p>
            </li>
        </ul>
        
        <ul class="box2">
            <li>
                <h3>我要买塑料</h3>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/trade.html#trade2" target="_blank"><b></b>如何委托交易</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/trade.html#trade3" target="_blank"><b></b>如何自己找货</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/trade.html#trade4" target="_blank"><b></b>如何查看采购单状态</a></p>
            </li>
            <li>
                <h3>我要卖塑料</h3>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/trade.html#trade7" target="_blank"><b></b>如何发布报价单</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/trade.html#trade6" target="_blank"><b></b>如何单条发布报价</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/trade.html#trade8" target="_blank"><b></b>如何报价采购信息</a></p>
            </li>
            <li class="list3">
                <h3>常见问题</h3>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/user.html#user1" target="_blank"><b></b>注册流程</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/user.html#user2" target="_blank"><b></b>无法登录/忘记密码</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="help/user.html#user3" target="_blank"><b></b>修改账户信息</a></p>
            </li>
        </ul>
        
        <div class="box3">
            <div class="code">
                <p class="img"><img src="/Public/pc/image/common/code_wechat.jpg" alt="找塑料网微信二维码" /></p>
                <p>扫一扫，看行情资讯</p>
            </div>
            <div class="code">
                <p class="img"><img src="/Public/pc/image/common/code_app.jpg" alt="找塑料网APP二维码" /></p>
                <p>扫一扫，下载移动端</p>
            </div>
        </div>
    </div>
    <div class="in_box" style="margin-bottom: -1px;">
        <div class="box4">
            <span class="s">友情链接：</span>
            <div class="list">
                <div class="list_div">
                    <a href="../www.suliaojishu.com/default.htm" target="_blank" title="塑料技术咨询网">塑料技术咨询网</a>
                    <a href="../www.zhaohuagong.com/default.htm" target="_blank" title="找化工网">找化工网</a>
                    <a href="../www.cppia.com.cn/default.htm" target="_blank" title="中国塑协">中国塑协</a>
                    <a href="../www.gdpia.com/default.htm" target="_blank" title="广东塑料网">广东塑料网</a>
                    <a href="../www.youliao.com.cn/default.htm" target="_blank" title="有料网">有料网</a>
                    <a href="baike/default.htm" target="_blank" title="塑料百科">塑料百科</a>
                    <a href="../www.cnpec.net/default.htm" target="_blank" title="中华石油化工网">中华石油化工网</a>
                    <a href="../www.xincailiao.com/index.html" target="_blank" title="新材料在线">新材料在线</a>
                    <a href="../www.dgpengxu.com/default.htm" target="_blank" title="塑胶原料">塑胶原料</a>
                    <a href="../www.ezaisheng.com/default.htm" target="_blank" title="再生资源">再生资源</a>
                </div>
            </div>
            <a href="javascript:;" class="close"></a>
        </div>
    </div>
    <div class="in_box">
        <div class="box4">
            <span class="s">热门标签：</span>
            <div class="list">
                <div class="list_div">
                                    <a href="company" target="_blank" title="塑料价格">塑料价格</a>
                    <a href="../hq.zhaosuliao.com/zzrl.html" target="_blank" title="最全石化装置动态">最全石化装置动态</a>
                    <a href="baike/16587.html" target="_blank" title="PP塑料">PP塑料</a>
                    <a href="baike/16583.html" target="_blank" title="POM塑料">POM塑料</a>
                    <a href="baike/16595.html" target="_blank" title="通用塑料">通用塑料</a>
                    <a href="baike/16600.html" target="_blank" title="塑料原料物性">塑料原料物性</a>
                    <a href="baike/16574.html" target="_blank" title="PE塑料">PE塑料</a>
                    <a href="baike/16544.html" target="_blank" title="PBT塑料">PBT塑料</a>
                    <a href="baike/16545.html" target="_blank" title="HDPE塑料">HDPE塑料</a>
                    <a href="baike/16565.html" target="_blank" title="HIPS塑料">HIPS塑料</a>
                    <a href="../hq.zhaosuliao.com/price/0_1_0_0_0_1_0_0.html" target="_blank" title="塑料价格行情">塑料价格行情</a>
                    <a href="../hq.zhaosuliao.com/price/cc.html" target="_blank" title="石化出厂价格查询">石化出厂价格查询</a>
                </div>
            </div>
            <a href="javascript:;" class="close"></a>
        </div>

        <div class="box5">
            <p>
                <a href="about.html" target="_blank">关于我们</a> | 
                <a href="zixun/gsdt/default.htm" target="_blank">公司动态</a> | 
                <a href="zixun/mtbd/default.htm" target="_blank">媒体报道</a> | 
                <a href="job.html" target="_blank">诚聘英才</a> | 
                <a href="contact.html" target="_blank">联系我们</a> | 
                <a href="feedback.html" target="_blank">意见反馈</a> | 
                <!-- <a href="http://www.zhaosuliao.com/ceo_mailbox.html" target="_blank">CEO邮箱</a> |  -->
                <a href="law.html" target="_blank">法律声明</a> | 
                <a href="sitemap.html" target="_blank">网站地图</a> | 
                <a href="links.html" target="_blank">友情链接</a>
            </p>
            <p>
                COPYRIGHT © 找塑料网 www.zhaosuliao.com <a href="../www.miitbeian.gov.cn/default.htm">粤ICP备15107234号</a>&nbsp;<a rel="nofollow" href="../www.miibeian.gov.cn/default.htm">ICP经营许可证：粤B2-20160023</a>
                <script>
                //站长统计
                var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253441689'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s6.cnzz.com/z_stat.php%3Fid%3D1253441689%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
              
                </script>
            </p>
        </div>
        <div class="box6">
            <!--<a  key ="54a107ffc274e76dc1035520"  logo_size="124x47"  logo_type="realname"  href="http://www.anquan.org" ><script src="http://static.anquan.org//Public/pc/outer/js/aq_auth.js"></script></a>
            <a href="http://webscan.360.cn/index/checkwebsite/url/zhaosuliao.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/ef7e1c147d6253064bea858dfeeb5ebc"/></a> -->
            <a target="_blank" href="../www.anquan.org/authenticate/cert/@site=www.zhaosuliao.com&at=realname"><img alt="安全联盟实名验证" src="/Public/pc/image/common/aqlm.png" /></a>
            <a target="_blank" href="../webscan.360.cn/index/checkwebsite/url/zhaosuliao.com"><img alt="360网站安全检测" src="/Public/pc/image/common/aqjc_360.png" /></a>
            <a target="_blank" href="../si.trustutn.org/info@sn=137141229010801735265&certType=1"><img alt="实名认证" src="/Public/pc/image/common/smrz.png" /></a>
            <a id='___szfw_logo___' href='../https@credit.szfw.org/CX20160123013832180167.html' target='_blank'><img alt="诚信网站" src="/Public/pc/image/common/cxrz.png" /></a>
            <script type='text/javascript'>(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
            <a target="_blank" href="../www.itrust.org.cn/Home/Index/itrust_certifi@wm=1304763357"><img alt="ICP网站征信" src="/Public/pc/image/common/qyxypj.png" /></a>
            <a target="_blank" href='../netadreg.gzaic.gov.cn/ntmm/WebSear/WebLogoPub.aspx@logo=440115115012014072300011'><img alt="工商网监电子标识" src="/Public/pc/image/common/gswj.png" width="124" height="47"/></a>
        </div>
    </div></div>
<!-- 页面底部end -->
</body>
</html>
<script>
/*每页显示条数点击效果*/
    $(".page_limit span").click(function(){
        $(".page_limit span").removeClass('click_bjd');
        $(this).addClass('click_bjd');
    }) ;
</script>