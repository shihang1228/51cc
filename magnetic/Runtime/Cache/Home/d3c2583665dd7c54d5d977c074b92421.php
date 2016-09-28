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
<link href="/51ccnew/Public/pc/css/info.css" rel="stylesheet" type="text/css" />
<link href="/51ccnew/Public/pc/css/app.css" rel="stylesheet" type="text/css" />
<script src="/51ccnew/Public/pc/plugin/jquery.mousewheel.min.js" type="text/javascript"></script>
 <div class="banner01">
 	<div class="banner01-box">
 		<a href="../https@itunes.apple.com/cn/app/id956829873" class="android"></a>
 		<a href="../fz.img.zhaosuliao.com/zhaosuliao.apk" class="iphone"></a>
 		<span class="ewm">
 			<span class="app_rwm"></span>
 		</span>
 	</div>
 </div>
 <div class="banner02">
 	<div class="banner02-box">
 		<div class="location"></div>
 		<div class="describe">
 			<div class="describe-center" style="margin-left:250px;">
 				<img src="/51ccnew/Public/pc/image/info/new_app_down/icon01.png" alt="">
 				<p>现货资源</p>
 			</div>
 			<div class="describe-center">
 				<img src="/51ccnew/Public/pc/image/info/new_app_down/icon02.png" alt="">
 				<p>行情中心</p>
 			</div>
 			<div class="describe-center">
 				<img src="/51ccnew/Public/pc/image/info/new_app_down/icon03.png" alt="">
 				<p>物性表</p>
 			</div>
 			<div class="describe-center">
 				<img src="/51ccnew/Public/pc/image/info/new_app_down/icon04.png" alt="">
 				<p>出厂价</p>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="banner03">
 	<div class="banner03-box">
 		<div class="mobile"></div>
 		<div class="img img1"></div>
 		<div class="img img2"></div>
 		<div class="img img3"></div>
 		<!-- <img class="img1 aa" src="http://www.zhaosuliao.com//51ccnew/Public/pc/image/info/new_app_down/icon05.png" alt=""> -->
 		<!-- <img class="img2" src="http://www.zhaosuliao.com//51ccnew/Public/pc/image/info/new_app_down/icon06.png" alt="">
 		<img class="img3" class="icon07" src="http://www.zhaosuliao.com//51ccnew/Public/pc/image/info/new_app_down/icon07.png" alt=""> -->
 	</div>
 </div>
 <div class="banner04">
 	<div class="banner04-box">
 		<div class="fabu"></div>
 		<div class="iphone_01"></div>
 		<div class="iphone_02"></div>
 	</div>
 </div>
 <div class="banner05">
 	<div class="banner05-box">
 		<div class="wordCan">
 			<div class="iphone_left" id="iphone"></div>
 			<div class="iphone_right"></div>
 			<div class="icon01"></div>
 			<div class="icon02"></div>
 			<div class="icon03"></div>
 		</div>
 	</div>
 </div>
 <div class="banner06">
 	<div class="banner06-box">
 		<div class="icon01"></div>
 		<div class="icon02"></div>
 		<div class="download-box">
 			<a href="../https@itunes.apple.com/cn/app/id956829873" class="android"></a>
	 		<a href="../fz.img.zhaosuliao.com/zhaosuliao.apk" class="iphone"></a>
	 		<span class="ewm">
	 			<span class="app_rwm"></span>
	 		</span>
 		</div>
 	</div>
 </div>

 <script type="text/javascript">
 	$(function(){
 		$(".ewm").mouseenter(function(){
 			$(".app_rwm").fadeIn();
 		}).mouseleave(function(){
 			$(".app_rwm").fadeOut();
 		});
 		var banner2T=$(".banner02").offset().top;
 		var banner3T=$(".banner03").offset().top;
 		var banner4T=$(".banner04").offset().top;
 		var banner5T=$(".banner05").offset().top;
 		var banner6T=$(".banner06").offset().top;
 	
 		$(window).scroll(function(){
 			var scrollT=$(window).scrollTop();
 			if( banner2T-400<=scrollT ){
 				$(".describe-center").eq(0).find('img').addClass("zoomIn1");
 				$(".describe-center").eq(1).find('img').addClass("zoomIn2");
 				$(".describe-center").eq(2).find('img').addClass("zoomIn3");
 				$(".describe-center").eq(3).find('img').addClass("zoomIn4");
 				$(".describe-center").eq(0).find('p').addClass("fadeIn1");
 				$(".describe-center").eq(1).find('p').addClass("fadeIn2");
 				$(".describe-center").eq(2).find('p').addClass("fadeIn3");
 				$(".describe-center").eq(3).find('p').addClass("fadeIn4");
 			};

 			if( banner3T-250<=scrollT){
 				$(".mobile").addClass('fadeInDown');
 				$(".img1").addClass("fadeIn1");
 			};
 			if(banner4T-250<=scrollT){
 				$(".iphone_01").addClass("bounceInLeft");
 				$(".iphone_02").addClass("bounceInRight");
 			};
 			if(banner5T-250<=scrollT){
 				$(".iphone_left").addClass("fadeInDown2");
 				$(".iphone_right").addClass("fadeInDown3");
 			}
 		
 			if(banner6T-400<=scrollT){
 				$(".banner06-box .icon01").addClass("bounceInDown");
 				$(".banner06-box .icon02").addClass("bounceInDown");
 			}
 		});

 		var obj=document.getElementById("iphone");
 		var body=document.body || document.documentElement;
    	var style=body.style;
		var animationEnd=(function(){
            var animEndEventNames = {
              WebkitAnimation : 'webkitAnimationEnd',
              animation      : 'animationend'
            }
            for(var name in animEndEventNames){
                if(typeof style[name] === "string"){
                    return animEndEventNames[name];
                }
            }
        })();
 		if(animationEnd!=undefined){
 			var icon1=document.querySelector(".icon01");
	 		var icon2=document.querySelector(".icon02");
	 		var icon3=document.querySelector(".icon03");
	 		obj.addEventListener(animationEnd,function(){
	 			icon1.style.display="block";
	 			icon1.classList.add('bounceInDown');
	 			icon2.style.display="block";
	 			icon2.classList.add('bounceInDown');
	 			icon3.style.display="block";
	 			icon3.classList.add('bounceInDown');
	 		});
	 		var oImg=document.querySelector(".img1");
	 		oImg.addEventListener(animationEnd,function(){
	 			document.querySelector(".img2").classList.add('fadeIn2');
	 		});
	 		document.querySelector(".img2").addEventListener(animationEnd,function(){
	 			document.querySelector(".img3").classList.add('fadeIn3');
	 		})
 		}else{
 			$(".wordCan .icon01").show();
 			$(".wordCan .icon02").show();
 			$(".wordCan .icon03").show();
 			$(".img2").show();
 			$(".img3").show();
 		}
 		

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