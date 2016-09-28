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
        <link href="/51ccnew/Public/pc/plugin/artdialog/dialog.css" rel="stylesheet" type="text/css"/>       
        <link href="/51ccnew/Public/pc/css/common.css" rel="stylesheet" type="text/css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <link href="/51ccnew/Public/pc/plugin/jquery-validate/jquery.validate.min.css" type="text/css" rel="stylesheet" />
        <link href="/51ccnew/Public/pc/css/page.css" rel="stylesheet" type="text/css" />
        <script src="/51ccnew/Public/pc/plugin/jquery-validate/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/plugin/jquery-validate/jquery.validate.method.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/51ccnew/Public/pc/plugin/jquery-areapop/jquery-areapop.js"></script>
        <script src="/51ccnew/Public/pc/plugin/artdialog/dialog.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/plugin/form.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/js/js.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/js/common.js" type="text/javascript"></script>        
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
            <a href="default.htm"><img class="logo_img" src="/51ccnew/Public/pc/image/common/logo.png" alt="找塑料网logo" width="494"  height="85" /></a>
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
<link href="/51ccnew/Public/pc/css/property.css" rel="stylesheet" type="text/css" /><!-- 搜索区start-->
<div class="searchbox">
	<div class="searchbox_inp">
    	<div class="searchbox_inp_text">物性表</div>
        <div class="searchbox_inp_input">
        	<div class="input_left_radius"></div>
            <div class="input_mid_radius">
            	<input type="text" name="" id="word" class="wxb_search" value="请输入品名、牌号或生产企业 如：广州 7042"/>
                <input type="button" class="wxb_btn" value="搜 索" id="search" />
            </div>
            <div class="input_right_radius"></div>
        </div>
    </div>
    <div class="search_hot">
    	<span>热门搜索：</span>
        <span>
           <a href="search@word=PP">PP</a>
           <a href="search@word=ABS">ABS</a>
           <a href="search@word=PA6">PA6</a>
           <a href="search@word=PVC">PVC</a>
           <a href="search@word=as">as</a>
        </span>
        <span>已收录可查物性表牌号<span class="fcolor_8">89630</span>个</span>
    </div>
</div>
<!-- 搜索区end-->


<script>

    $(function()
    {
        $("#word").on("focus",function()
        {
            $(this).css("color","#000000");
            var word=$.trim($("#word").val());
            if(word=="请输入品名、牌号或生产企业 如：广州 7042")
            {
                $(this).val("");
            }
        }).on("blur",function()
        {
            var word=$.trim($("#word").val());
            if(!word)
            {
                $(this).val("请输入品名、牌号或生产企业 如：广州 7042").css("color","#999999");
            }
        });
        $("#search").on("click",function()
        {
            var word=$.trim($("#word").val());
            if(!word || word=="请输入品名、牌号或生产企业 如：广州 7042")
            {
                return false;
            }
            else
            {
                location.href="search@word="+encodeURIComponent(word);
            }
        });
        $(".searchbox_inp").on("keydown",function(e)
        {
            if(e.keyCode=="13")
            {
                $("#search").trigger("click");
            }
        });
    });
</script>
<!-- 物性表 搜索内容start-->
<div class="property_index">
    <h3 class="hot_varieties">
   		<i class="hot_varieties_bg"></i><span class="hot_varieties_text">热门品类</span>
   </h3>
   <div class="search_tab">
   		<i></i><p class="hot_key">热门品类仅显示部分热门牌号，查阅更多牌号物性表请使用搜索功能</p>
        <span class="fcolor_8 zm_search">按字母查找：</span>
        <p class="tab_p">
            <a href="javascript:void(0)">A</a>
            <a href="javascript:void(0)">B</a>
            <a href="javascript:void(0)">C</a>
            <a href="javascript:void(0)">E</a>
            <a href="javascript:void(0)">F</a>
            <a href="javascript:void(0)">G</a>
            <a href="javascript:void(0)">H</a>
            <a href="javascript:void(0)">K</a>
            <a href="javascript:void(0)">L</a>
            <a href="javascript:void(0)">M</a>
            <a href="javascript:void(0)">N</a>
            <a href="javascript:void(0)">P</a>
            <a href="javascript:void(0)">S</a>
            <a href="javascript:void(0)">T</a>
            <a href="javascript:void(0)">U</a>
            <span class="tab_arrow"></span>
        </p>
   </div>
   
   <div  class="search_content">
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=ABS">ABS</a></p>
                    <div class="model_content">
                    		<a href="search@word=DG-EX75">DG-EX75</a>
                    		<a href="search@word=DG-MG94">DG-MG94</a>
                    		<a href="search@word=R214">R214</a>
                    		<a href="search@word=9332">9332</a>
                    		<a href="search@word=ABS 570">ABS 570</a>
                    		<a href="search@word=ABS 556">ABS 556</a>
                    		<a href="search@word=ABS 3030">ABS 3030</a>
                    		<a href="search@word=ABS 1045">ABS 1045</a>
                    		<a href="search@word=T ABS 6050">T ABS 6050</a>
	                    	<a href="search@word=ABS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=ABS_2FPC">ABS/PC</a></p>
                    <div class="model_content">
                    		<a href="search@word=2503 A">2503 A</a>
                    		<a href="search@word=HR-5009A">HR-5009A</a>
                    		<a href="search@word=GP-5300F">GP-5300F</a>
                    		<a href="search@word=GP-5008A">GP-5008A</a>
                    		<a href="search@word=GN-5001SF">GN-5001SF</a>
                    		<a href="search@word=HAC-8250FR">HAC-8250FR</a>
                    		<a href="search@word=PCA 839">PCA 839</a>
                    		<a href="search@word=AC2000">AC2000</a>
                    		<a href="search@word=001SC">001SC</a>
	                    	<a href="search@word=ABS_2FPC">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=AES">AES</a></p>
                    <div class="model_content">
                    		<a href="search@word=813">813</a>
                    		<a href="search@word=HW600G">HW600G</a>
                    		<a href="search@word=UVA1">UVA1</a>
                    		<a href="search@word=SK50">SK50</a>
                    		<a href="search@word=SE20">SE20</a>
                    		<a href="search@word=KVS700">KVS700</a>
                    		<a href="search@word=KD102S">KD102S</a>
                    		<a href="search@word=KD101S">KD101S</a>
                    		<a href="search@word=KD100W">KD100W</a>
	                    	<a href="search@word=AES">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=AS">AS</a></p>
                    <div class="model_content">
                    		<a href="search@word=SA50">SA50</a>
                    		<a href="search@word=SA40">SA40</a>
                    		<a href="search@word=SA30">SA30</a>
                    		<a href="search@word=SA10">SA10</a>
                    		<a href="search@word=320PC">320PC</a>
                    		<a href="search@word=129PC">129PC</a>
                    		<a href="search@word=120PC">120PC</a>
                    		<a href="search@word=310CTR">310CTR</a>
                    		<a href="search@word=C-01">C-01</a>
	                    	<a href="search@word=AS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=ASA">ASA</a></p>
                    <div class="model_content">
                    		<a href="search@word=PW957H">PW957H</a>
                    		<a href="search@word=PW997I">PW997I</a>
                    		<a href="search@word=697">697</a>
                    		<a href="search@word=678UV">678UV</a>
                    		<a href="search@word=678">678</a>
                    		<a href="search@word=778T">778T</a>
                    		<a href="search@word=XC280G">XC280G</a>
                    		<a href="search@word=XC180G">XC180G</a>
                    		<a href="search@word=XC190BM">XC190BM</a>
	                    	<a href="search@word=ASA">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=ASA_2FPC">ASA/PC</a></p>
                    <div class="model_content">
                    		<a href="search@word=PCS003L">PCS003L</a>
                    		<a href="search@word=A6020">A6020</a>
                    		<a href="search@word=A3525">A3525</a>
                    		<a href="search@word=KR2867FR">KR2867FR</a>
                    		<a href="search@word=KR2863T">KR2863T</a>
                    		<a href="search@word=ENV32-NC780">ENV32-NC780</a>
                    		<a href="search@word=ENV32-NC090">ENV32-NC090</a>
                    		<a href="search@word=SC KR2867CWU">SC KR2867CWU</a>
                    		<a href="search@word=SC KR2866C">SC KR2866C</a>
	                    	<a href="search@word=ASA_2FPC">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=BOPP">BOPP</a></p>
                    <div class="model_content">
                    		<a href="search@word=PPR-FT03-S">PPR-FT03-S</a>
                    		<a href="search@word=L5D98">L5D98</a>
                    		<a href="search@word=F300M">F300M</a>
                    		<a href="search@word=T36F">T36F</a>
                    		<a href="search@word=S38F">S38F</a>
                    		<a href="search@word=H230P">H230P</a>
                    		<a href="search@word=H220P">H220P</a>
                    		<a href="search@word=HP593H">HP593H</a>
                    		<a href="search@word=HP529J">HP529J</a>
	                    	<a href="search@word=BOPP">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=CA">CA</a></p>
                    <div class="model_content">
                    		<a href="search@word=H4">H4</a>
                    		<a href="search@word=NG-100">NG-100</a>
                    		<a href="search@word=MG-100">MG-100</a>
                    		<a href="search@word=MSS">MSS</a>
                    		<a href="search@word=MS">MS</a>
                    		<a href="search@word=MH">MH</a>
                    		<a href="search@word=H3">H3</a>
                    		<a href="search@word=2111A">2111A</a>
                    		<a href="search@word=AB33">AB33</a>
	                    	<a href="search@word=CA">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=COC">COC</a></p>
                    <div class="model_content">
                    		<a href="search@word=TM">TM</a>
                    		<a href="search@word=TB">TB</a>
                    		<a href="search@word=9506F-500">9506F-500</a>
                    		<a href="search@word=9506F-04">9506F-04</a>
                    		<a href="search@word=8007S-04">8007S-04</a>
                    		<a href="search@word=8007F-500">8007F-500</a>
                    		<a href="search@word=8007F-04">8007F-04</a>
                    		<a href="search@word=8007">8007</a>
                    		<a href="search@word=6017S-04">6017S-04</a>
	                    	<a href="search@word=COC">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=COP">COP</a></p>
                    <div class="model_content">
                    		<a href="search@word=750R">750R</a>
                    		<a href="search@word=1600R">1600R</a>
                    		<a href="search@word=1420R">1420R</a>
                    		<a href="search@word=1060R">1060R</a>
                    		<a href="search@word=1020R">1020R</a>
                    		<a href="search@word=RS820">RS820</a>
                    		<a href="search@word=RS420">RS420</a>
                    		<a href="search@word=E28R">E28R</a>
                    		<a href="search@word=690R">690R</a>
	                    	<a href="search@word=COP">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=CPE">CPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=135A">135A</a>
                    		<a href="search@word=R7335">R7335</a>
                    		<a href="search@word=R7235">R7235</a>
                    		<a href="search@word=R7135">R7135</a>
                    		<a href="search@word=CM 352G">CM 352G</a>
                    		<a href="search@word=CM 352H">CM 352H</a>
                    		<a href="search@word=CM 352L">CM 352L</a>
                    		<a href="search@word=CM 352">CM 352</a>
                    		<a href="search@word=135C">135C</a>
	                    	<a href="search@word=CPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=CPVC">CPVC</a></p>
                    <div class="model_content">
                    		<a href="search@word=783">783</a>
                    		<a href="search@word=123">123</a>
                    		<a href="search@word=123 Y 220">123 Y 220</a>
                    		<a href="search@word=795G343">795G343</a>
                    		<a href="search@word=123 G 343">123 G 343</a>
                    		<a href="search@word=063">063</a>
                    		<a href="search@word=8067">8067</a>
                    		<a href="search@word=8065">8065</a>
                    		<a href="search@word=1167">1167</a>
	                    	<a href="search@word=CPVC">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=EAA">EAA</a></p>
                    <div class="model_content">
                    		<a href="search@word=NUC-6070">NUC-6070</a>
                    		<a href="search@word=MB-6003">MB-6003</a>
                    		<a href="search@word=LX4110">LX4110</a>
                    		<a href="search@word=A231K">A231K</a>
                    		<a href="search@word=A221M">A221M</a>
                    		<a href="search@word=A220S">A220S</a>
                    		<a href="search@word=A211S">A211S</a>
                    		<a href="search@word=A210M">A210M</a>
                    		<a href="search@word=A210K">A210K</a>
	                    	<a href="search@word=EAA">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=EBA">EBA</a></p>
                    <div class="model_content">
                    		<a href="search@word=CA-3430B">CA-3430B</a>
                    		<a href="search@word=CA-7220B">CA-7220B</a>
                    		<a href="search@word=CA-7421B">CA-7421B</a>
                    		<a href="search@word=PA-1240">PA-1240</a>
                    		<a href="search@word=PA-1303">PA-1303</a>
                    		<a href="search@word=PA-1704">PA-1704</a>
                    		<a href="search@word=PA-1715">PA-1715</a>
                    		<a href="search@word=PA-1770">PA-1770</a>
                    		<a href="search@word=PA-1906">PA-1906</a>
	                    	<a href="search@word=EBA">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=EPDM">EPDM</a></p>
                    <div class="model_content">
                    		<a href="search@word=TPS ST">TPS ST</a>
                    		<a href="search@word=TPS SOFT">TPS SOFT</a>
                    		<a href="search@word=EPDM ST">EPDM ST</a>
                    		<a href="search@word=EPDM ST 20">EPDM ST 20</a>
                    		<a href="search@word=EPDM ST 15">EPDM ST 15</a>
                    		<a href="search@word=EPDM LD">EPDM LD</a>
                    		<a href="search@word=EPDM ECO">EPDM ECO</a>
                    		<a href="search@word=5565">5565</a>
                    		<a href="search@word=4820">4820</a>
	                    	<a href="search@word=EPDM">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=EPS">EPS</a></p>
                    <div class="model_content">
                    		<a href="search@word=E-6F">E-6F</a>
                    		<a href="search@word=E-6">E-6</a>
                    		<a href="search@word=E-5F">E-5F</a>
                    		<a href="search@word=E-5">E-5</a>
                    		<a href="search@word=E-4F">E-4F</a>
                    		<a href="search@word=E-4">E-4</a>
                    		<a href="search@word=E-3F">E-3F</a>
                    		<a href="search@word=E-3">E-3</a>
                    		<a href="search@word=526W">526W</a>
	                    	<a href="search@word=EPS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=EVA">EVA</a></p>
                    <div class="model_content">
                    		<a href="search@word=WPP554E18">WPP554E18</a>
                    		<a href="search@word=WPP551E27">WPP551E27</a>
                    		<a href="search@word=WPP514E18">WPP514E18</a>
                    		<a href="search@word=WPP513ED05">WPP513ED05</a>
                    		<a href="search@word=CA0887">CA0887</a>
                    		<a href="search@word=HMP-366">HMP-366</a>
                    		<a href="search@word=EV-500">EV-500</a>
                    		<a href="search@word=EV-600">EV-600</a>
                    		<a href="search@word=VE800">VE800</a>
	                    	<a href="search@word=EVA">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=EVOH">EVOH</a></p>
                    <div class="model_content">
                    		<a href="search@word=T102">T102</a>
                    		<a href="search@word=SP521B">SP521B</a>
                    		<a href="search@word=SP521A">SP521A</a>
                    		<a href="search@word=SP482B">SP482B</a>
                    		<a href="search@word=SP482A">SP482A</a>
                    		<a href="search@word=SP451B">SP451B</a>
                    		<a href="search@word=SP451A">SP451A</a>
                    		<a href="search@word=SP441B">SP441B</a>
                    		<a href="search@word=SP441A">SP441A</a>
	                    	<a href="search@word=EVOH">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=FEP">FEP</a></p>
                    <div class="model_content">
                    		<a href="search@word=FLEX6309Z">FLEX6309Z</a>
                    		<a href="search@word=6338 Z">6338 Z</a>
                    		<a href="search@word=6322 Z">6322 Z</a>
                    		<a href="search@word=6322 HT Z">6322 HT Z</a>
                    		<a href="search@word=6307 Z">6307 Z</a>
                    		<a href="search@word=6303 Z">6303 Z</a>
                    		<a href="search@word=6301 Z">6301 Z</a>
                    		<a href="search@word=3583">3583</a>
                    		<a href="search@word=3505">3505</a>
	                    	<a href="search@word=FEP">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=GPPS">GPPS</a></p>
                    <div class="model_content">
                    		<a href="search@word=GP 1400-G">GP 1400-G</a>
                    		<a href="search@word=GP 1400">GP 1400</a>
                    		<a href="search@word=GP 0900">GP 0900</a>
                    		<a href="search@word=GP 0400">GP 0400</a>
                    		<a href="search@word=WPP741">WPP741</a>
                    		<a href="search@word=680L">680L</a>
                    		<a href="search@word=678E">678E</a>
                    		<a href="search@word=CA4857">CA4857</a>
                    		<a href="search@word=590">590</a>
	                    	<a href="search@word=GPPS">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=HDPE">HDPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=HD 6107">HD 6107</a>
                    		<a href="search@word=HD 5500.35">HD 5500.35</a>
                    		<a href="search@word=HD 5320">HD 5320</a>
                    		<a href="search@word=HD 5306">HD 5306</a>
                    		<a href="search@word=HD 5117">HD 5117</a>
                    		<a href="search@word=M5220M">M5220M</a>
                    		<a href="search@word=WPP831">WPP831</a>
                    		<a href="search@word=WPP822">WPP822</a>
                    		<a href="search@word=WPP820">WPP820</a>
	                    	<a href="search@word=HDPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=HIPS">HIPS</a></p>
                    <div class="model_content">
                    		<a href="search@word=MI 1314">MI 1314</a>
                    		<a href="search@word=HI 1402">HI 1402</a>
                    		<a href="search@word=HI 0803">HI 0803</a>
                    		<a href="search@word=HI 0802">HI 0802</a>
                    		<a href="search@word=HI 0302">HI 0302</a>
                    		<a href="search@word=485">485</a>
                    		<a href="search@word=472">472</a>
                    		<a href="search@word=457">457</a>
                    		<a href="search@word=417">417</a>
	                    	<a href="search@word=HIPS">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=K_25E6_25A0_2591_25E8_2584_2582">K树脂</a></p>
                    <div class="model_content">
                    		<a href="search@word=NSBC711">NSBC711</a>
                    		<a href="search@word=STYBLEND">STYBLEND</a>
                    		<a href="search@word=2G66">2G66</a>
                    		<a href="search@word=684D NW">684D NW</a>
                    		<a href="search@word=730L">730L</a>
                    		<a href="search@word=530L">530L</a>
                    		<a href="search@word=NSBC211">NSBC211</a>
                    		<a href="search@word=HS70">HS70</a>
                    		<a href="search@word=656C">656C</a>
	                    	<a href="search@word=K_25E6_25A0_2591_25E8_2584_2582">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=LCP">LCP</a></p>
                    <div class="model_content">
                    		<a href="search@word=A950">A950</a>
                    		<a href="search@word=A725">A725</a>
                    		<a href="search@word=A700">A700</a>
                    		<a href="search@word=A625">A625</a>
                    		<a href="search@word=A530">A530</a>
                    		<a href="search@word=A515">A515</a>
                    		<a href="search@word=A435">A435</a>
                    		<a href="search@word=A430">A430</a>
                    		<a href="search@word=A230">A230</a>
	                    	<a href="search@word=LCP">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=LDPE">LDPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=LD 21020">LD 21020</a>
                    		<a href="search@word=LD 21002">LD 21002</a>
                    		<a href="search@word=LD 19009">LD 19009</a>
                    		<a href="search@word=MBW0872">MBW0872</a>
                    		<a href="search@word=MBW3282">MBW3282</a>
                    		<a href="search@word=245 S">245 S</a>
                    		<a href="search@word=245 A">245 A</a>
                    		<a href="search@word=233 A">233 A</a>
                    		<a href="search@word=222 A">222 A</a>
	                    	<a href="search@word=LDPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=LLDPE">LLDPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=LSH 16001">LSH 16001</a>
                    		<a href="search@word=LL 24050">LL 24050</a>
                    		<a href="search@word=LL 24020">LL 24020</a>
                    		<a href="search@word=LH 19001">LH 19001</a>
                    		<a href="search@word=LB 1901">LB 1901</a>
                    		<a href="search@word=mPE M 2310 EP">mPE M 2310 EP</a>
                    		<a href="search@word=Q2018 H">Q2018 H</a>
                    		<a href="search@word=Q2018 C">Q2018 C</a>
                    		<a href="search@word=Flexus 9200">Flexus 9200</a>
	                    	<a href="search@word=LLDPE">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=MABS">MABS</a></p>
                    <div class="model_content">
                    		<a href="search@word=9206">9206</a>
                    		<a href="search@word=9206 A">9206 A</a>
                    		<a href="search@word=9202">9202</a>
                    		<a href="search@word=9202 A">9202 A</a>
                    		<a href="search@word=5513">5513</a>
                    		<a href="search@word=2812 TR">2812 TR</a>
                    		<a href="search@word=2812 TR Q434">2812 TR Q434</a>
                    		<a href="search@word=2812 HD">2812 HD</a>
                    		<a href="search@word=2802 TR">2802 TR</a>
	                    	<a href="search@word=MABS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=MBS">MBS</a></p>
                    <div class="model_content">
                    		<a href="search@word=SA505">SA505</a>
                    		<a href="search@word=TP-USX">TP-USX</a>
                    		<a href="search@word=TP-SX">TP-SX</a>
                    		<a href="search@word=TH-23">TH-23</a>
                    		<a href="search@word=M-080">M-080</a>
                    		<a href="search@word=H050">H050</a>
                    		<a href="search@word=TH-11">TH-11</a>
                    		<a href="search@word=TP-SX-301">TP-SX-301</a>
                    		<a href="search@word=TH-21">TH-21</a>
	                    	<a href="search@word=MBS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=MDPE">MDPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=3802">3802</a>
                    		<a href="search@word=L 3810X03">L 3810X03</a>
                    		<a href="search@word=D353">D353</a>
                    		<a href="search@word=EB169">EB169</a>
                    		<a href="search@word=TR-0735-UG">TR-0735-UG</a>
                    		<a href="search@word=ME3441">ME3441</a>
                    		<a href="search@word=mPE M 2704 EP">mPE M 2704 EP</a>
                    		<a href="search@word=6438R">6438R</a>
                    		<a href="search@word=PE80B-276">PE80B-276</a>
	                    	<a href="search@word=MDPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=MLLDPE">MLLDPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=SP90108C">SP90108C</a>
                    		<a href="search@word=SP00108C">SP00108C</a>
                    		<a href="search@word=SP00108">SP00108</a>
                    		<a href="search@word=SP00158">SP00158</a>
                    		<a href="search@word=SP90158">SP90158</a>
                    		<a href="search@word=SP9048">SP9048</a>
                    		<a href="search@word=SP9018">SP9018</a>
                    		<a href="search@word=SP1028">SP1028</a>
                    		<a href="search@word=SP4530">SP4530</a>
	                    	<a href="search@word=MLLDPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=MPPO">MPPO</a></p>
                    <div class="model_content">
                    		<a href="search@word=M106">M106</a>
                    		<a href="search@word=M109-G20">M109-G20</a>
                    		<a href="search@word=FRMPPOG20">FRMPPOG20</a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=MS">MS</a></p>
                    <div class="model_content">
                    		<a href="search@word=ARPS 100-2">ARPS 100-2</a>
                    		<a href="search@word=MS-750">MS-750</a>
                    		<a href="search@word=TX-100K">TX-100K</a>
                    		<a href="search@word=PM-200">PM-200</a>
                    		<a href="search@word=PM-600">PM-600</a>
                    		<a href="search@word=600">600</a>
                    		<a href="search@word=600XG">600XG</a>
                    		<a href="search@word=TX-400S">TX-400S</a>
                    		<a href="search@word=TX-100S">TX-100S</a>
	                    	<a href="search@word=MS">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=NBR">NBR</a></p>
                    <div class="model_content">
                    		<a href="search@word=N 3380 GRN">N 3380 GRN</a>
                    		<a href="search@word=N 3345 GRN">N 3345 GRN</a>
                    		<a href="search@word=N 2845 GRN">N 2845 GRN</a>
                    		<a href="search@word=N 4560">N 4560</a>
                    		<a href="search@word=N 3980">N 3980</a>
                    		<a href="search@word=N 3980 G">N 3980 G</a>
                    		<a href="search@word=N 3345">N 3345</a>
                    		<a href="search@word=N 2860">N 2860</a>
                    		<a href="search@word=2620">2620</a>
	                    	<a href="search@word=NBR">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=PA6">PA6</a></p>
                    <div class="model_content">
                    		<a href="search@word=6G30UV">6G30UV</a>
                    		<a href="search@word=XP6042701">XP6042701</a>
                    		<a href="search@word=X2 B70 U NC">X2 B70 U NC</a>
                    		<a href="search@word=MW30 NC001">MW30 NC001</a>
                    		<a href="search@word=MW30 GR002">MW30 GR002</a>
                    		<a href="search@word=GL30 NC003">GL30 NC003</a>
                    		<a href="search@word=G1050H-01">G1050H-01</a>
                    		<a href="search@word=G1033U-01">G1033U-01</a>
                    		<a href="search@word=G1033HU-01">G1033HU-01</a>
	                    	<a href="search@word=PA6">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=PA66">PA66</a></p>
                    <div class="model_content">
                    		<a href="search@word=ENV1266G33-NAT">ENV1266G33-NAT</a>
                    		<a href="search@word=XP6616195">XP6616195</a>
                    		<a href="search@word=MA30 BK001">MA30 BK001</a>
                    		<a href="search@word=GS30 GR074">GS30 GR074</a>
                    		<a href="search@word=GS30 BK011S">GS30 BK011S</a>
                    		<a href="search@word=GL30 NC001">GL30 NC001</a>
                    		<a href="search@word=F2738H-01">F2738H-01</a>
                    		<a href="search@word=F2538H-01A">F2538H-01A</a>
                    		<a href="search@word=F2538H-01">F2538H-01</a>
	                    	<a href="search@word=PA66">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=PBT">PBT</a></p>
                    <div class="model_content">
                    		<a href="search@word=ENV08-NC830">ENV08-NC830</a>
                    		<a href="search@word=WJ-1100">WJ-1100</a>
                    		<a href="search@word=FO PBT30GF">FO PBT30GF</a>
                    		<a href="search@word=HR-34">HR-34</a>
                    		<a href="search@word=ASA">ASA</a>
                    		<a href="search@word=860G6">860G6</a>
                    		<a href="search@word=860G4">860G4</a>
                    		<a href="search@word=PBT-GL30 BK054">PBT-GL30 BK054</a>
                    		<a href="search@word=PBT-GL30 BK007">PBT-GL30 BK007</a>
	                    	<a href="search@word=PBT">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=PC">PC</a></p>
                    <div class="model_content">
                    		<a href="search@word=A782">A782</a>
                    		<a href="search@word=A781">A781</a>
                    		<a href="search@word=P1043R">P1043R</a>
                    		<a href="search@word=P1021R">P1021R</a>
                    		<a href="search@word=PB1413">PB1413</a>
                    		<a href="search@word=PB1410">PB1410</a>
                    		<a href="search@word=P1525B">P1525B</a>
                    		<a href="search@word=P1503">P1503</a>
                    		<a href="search@word=P1500">P1500</a>
	                    	<a href="search@word=PC">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=PP">PP</a></p>
                    <div class="model_content">
                    		<a href="search@word=HP 3500-G">HP 3500-G</a>
                    		<a href="search@word=HP 3500">HP 3500</a>
                    		<a href="search@word=HP 2000">HP 2000</a>
                    		<a href="search@word=HP 2000 BK">HP 2000 BK</a>
                    		<a href="search@word=1200-G">1200-G</a>
                    		<a href="search@word=HP 1200-F">HP 1200-F</a>
                    		<a href="search@word=HP 1200">HP 1200</a>
                    		<a href="search@word=HP 0400">HP 0400</a>
                    		<a href="search@word=PPMIN20">PPMIN20</a>
	                    	<a href="search@word=PP">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=PVC">PVC</a></p>
                    <div class="model_content">
                    		<a href="search@word=P 1415 K 80 Ultra">P 1415 K 80 Ultra</a>
                    		<a href="search@word=P 1430 K 90 Ultra">P 1430 K 90 Ultra</a>
                    		<a href="search@word=P 1430 K 70 Ultra">P 1430 K 70 Ultra</a>
                    		<a href="search@word=B 7521 Ultra">B 7521 Ultra</a>
                    		<a href="search@word=B 7090 Ultra">B 7090 Ultra</a>
                    		<a href="search@word=B 7021 Ultra">B 7021 Ultra</a>
                    		<a href="search@word=B 6021 Ultra">B 6021 Ultra</a>
                    		<a href="search@word=GM 8017 NATURAL">GM 8017 NATURAL</a>
                    		<a href="search@word=GM 8000-95C NATURAL LCF">GM 8000-95C NATURAL LCF</a>
	                    	<a href="search@word=PVC">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=SBR">SBR</a></p>
                    <div class="model_content">
                    		<a href="search@word=267A">267A</a>
                    		<a href="search@word=257K">257K</a>
                    		<a href="search@word=257C">257C</a>
                    		<a href="search@word=257AX4">257AX4</a>
                    		<a href="search@word=237DX1">237DX1</a>
                    		<a href="search@word=1502">1502</a>
                    		<a href="search@word=1789">1789</a>
                    		<a href="search@word=1783">1783</a>
                    		<a href="search@word=1739">1739</a>
	                    	<a href="search@word=SBR">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=SBS">SBS</a></p>
                    <div class="model_content">
                    		<a href="search@word=TC 5000A">TC 5000A</a>
                    		<a href="search@word=TC 4000D">TC 4000D</a>
                    		<a href="search@word=TC 4000C">TC 4000C</a>
                    		<a href="search@word=TC 4000B">TC 4000B</a>
                    		<a href="search@word=TC 4000A">TC 4000A</a>
                    		<a href="search@word=TC 3000F">TC 3000F</a>
                    		<a href="search@word=TC 3000E">TC 3000E</a>
                    		<a href="search@word=TC 3000D">TC 3000D</a>
                    		<a href="search@word=TC 3000C">TC 3000C</a>
	                    	<a href="search@word=SBS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=SEBS">SEBS</a></p>
                    <div class="model_content">
                    		<a href="search@word=SE-064AN">SE-064AN</a>
                    		<a href="search@word=SH-070AT">SH-070AT</a>
                    		<a href="search@word=SH-070AB">SH-070AB</a>
                    		<a href="search@word=SE-085AN">SE-085AN</a>
                    		<a href="search@word=SE-130AN">SE-130AN</a>
                    		<a href="search@word=SE-140AB">SE-140AB</a>
                    		<a href="search@word=SE-150AB">SE-150AB</a>
                    		<a href="search@word=SM-141-45A">SM-141-45A</a>
                    		<a href="search@word=E550190">E550190</a>
	                    	<a href="search@word=SEBS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=SIS">SIS</a></p>
                    <div class="model_content">
                    		<a href="search@word=4411-D">4411-D</a>
                    		<a href="search@word=4411A">4411A</a>
                    		<a href="search@word=4411">4411</a>
                    		<a href="search@word=4211A">4211A</a>
                    		<a href="search@word=4211">4211</a>
                    		<a href="search@word=4114">4114</a>
                    		<a href="search@word=4113">4113</a>
                    		<a href="search@word=4111A">4111A</a>
                    		<a href="search@word=4111">4111</a>
	                    	<a href="search@word=SIS">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=SPS">SPS</a></p>
                    <div class="model_content">
                    		<a href="search@word=4699 X 80222">4699 X 80222</a>
                    		<a href="search@word=4687">4687</a>
                    		<a href="search@word=4685">4685</a>
                    		<a href="search@word=4685 TFE 15 SI 2">4685 TFE 15 SI 2</a>
                    		<a href="search@word=4683">4683</a>
                    		<a href="search@word=4681">4681</a>
                    		<a href="search@word=4607">4607</a>
                    		<a href="search@word=4607 HI FR">4607 HI FR</a>
                    		<a href="search@word=4607 FR">4607 FR</a>
	                    	<a href="search@word=SPS">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=TPE">TPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=ME-2259D BLK 288">ME-2259D BLK 288</a>
                    		<a href="search@word=ME-2255D BLK 111">ME-2255D BLK 111</a>
                    		<a href="search@word=ME-2180N">ME-2180N</a>
                    		<a href="search@word=ME-2170N">ME-2170N</a>
                    		<a href="search@word=ME-1390N-01">ME-1390N-01</a>
                    		<a href="search@word=ME-1345N">ME-1345N</a>
                    		<a href="search@word=FM-2166N">FM-2166N</a>
                    		<a href="search@word=FM-2163N">FM-2163N</a>
                    		<a href="search@word=FM-1161N">FM-1161N</a>
	                    	<a href="search@word=TPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=TPO">TPO</a></p>
                    <div class="model_content">
                    		<a href="search@word=SMR1600">SMR1600</a>
                    		<a href="search@word=SMR1555">SMR1555</a>
                    		<a href="search@word=SMR1450">SMR1450</a>
                    		<a href="search@word=SMR1000">SMR1000</a>
                    		<a href="search@word=AS43L-01">AS43L-01</a>
                    		<a href="search@word=AS33L-MBP1">AS33L-MBP1</a>
                    		<a href="search@word=AS65KWLGUS">AS65KWLGUS</a>
                    		<a href="search@word=AS66K-01">AS66K-01</a>
                    		<a href="search@word=AS65KW-LG">AS65KW-LG</a>
	                    	<a href="search@word=TPO">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=TPR">TPR</a></p>
                    <div class="model_content">
                    		<a href="search@word=DS2000">DS2000</a>
                    		<a href="search@word=DS1910HF">DS1910HF</a>
                    		<a href="search@word=LC18095">LC18095</a>
                    		<a href="search@word=LC1170">LC1170</a>
                    		<a href="search@word=LC211960">LC211960</a>
                    		<a href="search@word=LC3255">LC3255</a>
                    		<a href="search@word=LC8116">LC8116</a>
                    		<a href="search@word=LC3350">LC3350</a>
                    		<a href="search@word=LC098">LC098</a>
	                    	<a href="search@word=TPR">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=TPU">TPU</a></p>
                    <div class="model_content">
                    		<a href="search@word=JY-95AZ_25E9_2598_25BB_25E7_2587_2583">JY-95AZ阻燃</a>
                    		<a href="search@word=JY-90AZ_25E9_2598_25BB_25E7_2587_2583">JY-90AZ阻燃</a>
                    		<a href="search@word=JY-85AZ_25E9_2598_25BB_25E7_2587_2583">JY-85AZ阻燃</a>
                    		<a href="search@word=JY-95AL_25E4_25BA_25AE_25E9_259D_25A2_25E6_258C_25A4_25E5_2587_25BA_25E7_25BA_25A7">JY-95AL亮面挤出级</a>
                    		<a href="search@word=65E95W_25E8_2580_2590_25E6_25B0_25B4_25E8_25A7_25A3">65E95W耐水解</a>
                    		<a href="search@word=65E62D">65E62D</a>
                    		<a href="search@word=65E95">65E95</a>
                    		<a href="search@word=65E98">65E98</a>
                    		<a href="search@word=65E90">65E90</a>
	                    	<a href="search@word=TPU">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=TPV">TPV</a></p>
                    <div class="model_content">
                    		<a href="search@word=B1095N">B1095N</a>
                    		<a href="search@word=B1090N">B1090N</a>
                    		<a href="search@word=B1085N">B1085N</a>
                    		<a href="search@word=B1075N">B1075N</a>
                    		<a href="search@word=B1065N">B1065N</a>
                    		<a href="search@word=B1055N">B1055N</a>
                    		<a href="search@word=6NM.D50">6NM.D50</a>
                    		<a href="search@word=6NM.D40">6NM.D40</a>
                    		<a href="search@word=6NM.A90">6NM.A90</a>
	                    	<a href="search@word=TPV">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=TPX">TPX</a></p>
                    <div class="model_content">
                    		<a href="search@word=TPX-PBT-01022">TPX-PBT-01022</a>
                    		<a href="search@word=TPX-PVDF-03009 C">TPX-PVDF-03009 C</a>
                    		<a href="search@word=2940">2940</a>
                    		<a href="search@word=960">960</a>
                    		<a href="search@word=H-5030N(B)">H-5030N(B)</a>
                    		<a href="search@word=MX321XB">MX321XB</a>
                    		<a href="search@word=DX350">DX350</a>
                    		<a href="search@word=DX845">DX845</a>
                    		<a href="search@word=MX022">MX022</a>
	                    	<a href="search@word=TPX">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   		<div class="search_box">
        	<div class="search_box2">
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=UHMWPE">UHMWPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=DW 482P">DW 482P</a>
                    		<a href="search@word=DW 401">DW 401</a>
                    		<a href="search@word=DW 400">DW 400</a>
                    		<a href="search@word=U-PE500">U-PE500</a>
                    		<a href="search@word=Uniblend">Uniblend</a>
                    		<a href="search@word=SuperPlus">SuperPlus</a>
                    		<a href="search@word=PolySteel">PolySteel</a>
                    		<a href="search@word=Oil Filled">Oil Filled</a>
                    		<a href="search@word=Marble">Marble</a>
	                    	<a href="search@word=UHMWPE">更多>></a>
                    </div>
                </div>
            	<div class="search_model">
                	<p class="model_title"><a href="search@word=ULDPE">ULDPE</a></p>
                    <div class="model_content">
                    		<a href="search@word=SL 4102G">SL 4102G</a>
                    		<a href="search@word=SL 4101G">SL 4101G</a>
                    		<a href="search@word=SL 4100G">SL 4100G</a>
                    		<a href="search@word=NG 4701G">NG 4701G</a>
                    		<a href="search@word=4607GC">4607GC</a>
                    		<a href="search@word=4607G">4607G</a>
                    		<a href="search@word=4606GC">4606GC</a>
                    		<a href="search@word=4606G">4606G</a>
                    		<a href="search@word=4701">4701</a>
	                    	<a href="search@word=ULDPE">更多>></a>
                    </div>
                </div>
                <div style="clear:both;"></div>
       		</div>
        </div>
   </div>
</div>
<!-- 物性表 搜索内容end-->
<script>
    $(function(){
		$(".search_box").hide();
		$(".search_box").eq(0).show();
		var w = $(".tab_p a").eq(0).width();
		$(".tab_p a").each(function(i){
			$(this).click(function(){
				$(".tab_p a").removeClass('on');
				$(this).addClass('on');
				$(".tab_arrow").animate({'left':w*i-3},300);
				$(".search_box").hide();
				$(".search_box").eq(i).show();
				
			})
		});
	})
</script>
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
                <p class="img"><img src="/51ccnew/Public/pc/image/common/code_wechat.jpg" alt="找塑料网微信二维码" /></p>
                <p>扫一扫，看行情资讯</p>
            </div>
            <div class="code">
                <p class="img"><img src="/51ccnew/Public/pc/image/common/code_app.jpg" alt="找塑料网APP二维码" /></p>
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
            <!--<a  key ="54a107ffc274e76dc1035520"  logo_size="124x47"  logo_type="realname"  href="http://www.anquan.org" ><script src="http://static.anquan.org//51ccnew/Public/pc/outer/js/aq_auth.js"></script></a>
            <a href="http://webscan.360.cn/index/checkwebsite/url/zhaosuliao.com"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/ef7e1c147d6253064bea858dfeeb5ebc"/></a> -->
            <a target="_blank" href="../www.anquan.org/authenticate/cert/@site=www.zhaosuliao.com&at=realname"><img alt="安全联盟实名验证" src="/51ccnew/Public/pc/image/common/aqlm.png" /></a>
            <a target="_blank" href="../webscan.360.cn/index/checkwebsite/url/zhaosuliao.com"><img alt="360网站安全检测" src="/51ccnew/Public/pc/image/common/aqjc_360.png" /></a>
            <a target="_blank" href="../si.trustutn.org/info@sn=137141229010801735265&certType=1"><img alt="实名认证" src="/51ccnew/Public/pc/image/common/smrz.png" /></a>
            <a id='___szfw_logo___' href='../https@credit.szfw.org/CX20160123013832180167.html' target='_blank'><img alt="诚信网站" src="/51ccnew/Public/pc/image/common/cxrz.png" /></a>
            <script type='text/javascript'>(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
            <a target="_blank" href="../www.itrust.org.cn/Home/Index/itrust_certifi@wm=1304763357"><img alt="ICP网站征信" src="/51ccnew/Public/pc/image/common/qyxypj.png" /></a>
            <a target="_blank" href='../netadreg.gzaic.gov.cn/ntmm/WebSear/WebLogoPub.aspx@logo=440115115012014072300011'><img alt="工商网监电子标识" src="/51ccnew/Public/pc/image/common/gswj.png" width="124" height="47"/></a>
        </div>
    </div></div>
<!-- 页面底部end -->
</body>
</html>