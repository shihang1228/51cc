<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <!--头部公共部分-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="baidu-site-verification" content="GEYeUSYelI" />
        <meta property="qc:admins" content="1376034076620173541176375" />
        <meta property="wb:webmaster" content="98f17058f76adb4c" />
        <title>会员登陆 - 找塑料网</title>
        <meta name="keywords" content='找塑料网登录,找塑料网会员登录,会员登录'/>
        <meta name="description" content='找塑料网zhaosuliao.com领先的一站式塑化电商。专注于聚乙烯PE，聚丙烯PP、PVC、ABS等塑料原料交易，提供撮合交易及代销代购（自营）、物流、金融、行情分析、改性塑料OEM等服务。' />
        <link href="/51ccnew/Public/pc/plugin/artdialog/dialog.css" rel="stylesheet" type="text/css"/>     
        <link href="/51ccnew/Public/pc/css/common.css" rel="stylesheet" type="text/css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <link href="/51ccnew/Public/pc/plugin/jquery-validate/jquery.validate.min.css" type="text/css" rel="stylesheet" />
        <script src="/51ccnew/Public/pc/plugin/jquery-validate/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/plugin/jquery-validate/jquery.validate.method.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/51ccnew/Public/pc/plugin/jquery-areapop/jquery-areapop.js"></script>
        <script src="/51ccnew/Public/pc/plugin/artdialog/dialog.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/plugin/form.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/js/js.js" type="text/javascript"></script>
        <script src="/51ccnew/Public/pc/js/common.js" type="text/javascript"></script>        
    </head>
<body>
<link href="http://www.zhaosuliao.com/resources/fore/css/member.css?v=20151030" rel="stylesheet" type="text/css" />
<div class="top">
    <div class="top_t">
        <div class="w960">
            <div class="r">
                您好，<span class="color"><?php echo ($userdata['username']); ?>(<?php echo ($userdata['phone']); ?>)</span><a href="<?php echo U('Home/User/logout');?>" class="logout" data-url="<?php echo U('Home/Index/index');?>">【退出】</a>&nbsp;&nbsp;<i>|</i>&nbsp;&nbsp;<span>交易热线：<span >020-83939808</span></span>&nbsp;&nbsp;<i>|</i>&nbsp;&nbsp;交易时间：工作日 9:00-17:30
            </div>
            <a class="font_14" href="<?php echo U('Home/Index/index');?>" target="_blank">回到首页</a>&nbsp;&nbsp;<i>|</i>&nbsp;&nbsp;<a class="font_14" href="<?php echo U('Home/User/member');?>">会员中心</a>
        </div>
    </div>
    <div class="logo">
        <div class="w960" style=" overflow:hidden;">
            <img src="http://www.zhaosuliao.com/resources/fore/image/member/member_logo.png" title="找塑料网" alt="找塑料网logo"/>
        </div>
    </div>
</div><script src="http://www.zhaosuliao.com/resources/fore/js/city_choose.js" type="text/javascript"></script>
<link href="http://www.zhaosuliao.com/resources/fore/css/base.css" rel="stylesheet" type="text/css" />
<!--<link href="http://www.zhaosuliao.com/resources/fore/js/jquery-1.9.1.min.js" rel="stylesheet" type="text/css" />-->

<script type="text/javascript">

//设置消息提示
function set_msg(o,class_name,msg)
{
    o.attr("class",class_name).html(msg).show();
    setTimeout(function()
    {
        o.hide();
    },5000);
}

$(function(){
	$("#username").blur(function(){
    	var val=$.trim($(this).val());
    	if(val==""){
    		$(this).val('6-12位字母或数字').css('color','#ccc');
    	}
    	
    }).focus(function(){
    	if($(this).val()=='6-12位字母或数字'){
    		$(this).val('').css('color','#000');
    	}
    });
	$("#username").keyup(function(){
		if($(this).val().length<6){
			$(this).siblings("label").removeClass("ok");
		}
	});
	$("#tel").keyup(function(){
		var tel=$(this).val();
		var reg=/(0\d{2}(|-)\d{8})|(0\d{3}(|-)\d{7})/;
		if(! reg.test(tel)){
			$(this).siblings("label").removeClass("ok");
		};
	});
	$("#qq").keyup(function(){
		var qq = /^[1-9][0-9]{4,}$/;
		var qqval=$(this).val();
		if(! qq.test(qqval)){
			$(this).siblings("label").removeClass("ok");
		}
	});
	$("#fax").keyup(function(){
		var faxval=$(this).val();
		var faxReg=/(0\d{2}(|-)\d{8})|(0\d{3}(|-)\d{7})/;
		if(!faxReg.test(faxval)){
			$(this).siblings("label").removeClass("ok");
		}
	});
	
	$("#email").keyup(function(){
		var emailReg= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var emailval=$(this).val();
		if(!emailReg.test(emailval)){
			$(this).siblings("label").removeClass("ok");
		}	
	})
	$("#member_submit").on("click",function(e){
		var formdata = $("#inputForm").serialize();
		$.ajax({
			url:"edit_bgd",
			type:"POST",
			data:formdata,
			success:function(data){
				if(data.result){
					alert("修改成功");
					window.location.href="<?php echo U('Home/User/userinfo');?>";
				}else if(data.result == false){
					alert("修改失败,"+data.msg);
				}
			}
		})
	})
});
</script>
  <div class="member_wrap" >
	<div class="member_content" >
<!--左侧公共部分-->
        <div class="left">
    <div class="lan">
        <p class="title" style="margin-top:0;">我的报价单</p>
        <p><a href="http://www.zhaosuliao.com/member/product/product_import" >批量上传报价</a></p>
        <p><a href="<?php echo U('Home/Product/baojiadanadd');?>" >单条发布报价</a></p>
        <p><a href="http://www.zhaosuliao.com/member/product/list" >我的报价单</a></p>
    </div>
    <div class="lan">
        <p class="title">我的交易信息</p>
        <p><a href="<?php echo U('Home/Purchase/purchaseadd');?>" >发布采购</a></p>
        <p><a href="http://www.zhaosuliao.com/member/purchase/list" >我的采购</a></p>
    </div>
    <div class="lan">
        <p class="title">账户管理</p>
        <p><a href="<?php echo U('Home/User/userinfo');?>">账户信息</a></p>
        <p><a href="<?php echo U('Home/User/changepwd');?>" >修改密码</a></p>
    </div>
    <div class="tel">
        <img src="http://www.zhaosuliao.com/resources/fore/image/member/tel.png"alt="找塑料网交易热线"/>
        <div class="jyrx">
            <p>交易热线</p>
            <p>020-83939808</p>
        </div>
    </div>
</div>  
	<form action="<?php echo U('Home/User/edit_bgd');?>" method="post" id="inputForm">
	<input type="hidden" id="mid" name="userid" value="<?php echo ($userinfo['userid']); ?>" />
	<div class="right index">
			<div class="pulic_title">
				<i class="icon"></i>
				<span>帐户信息</span>
				
			</div>
			<ul class="zh_message">
				<li>
					<span class="l">用户名：</span>
					<span class="r"><input type="text" value="<?php echo ($userinfo['nickname']); ?>" name="nickname" id="username"/></span>
				</li>
				<li>
					<span class="l">手机号码：</span>
					<span class="r">
						<span><a href="http://www.zhaosuliao.com/member/account/edit_mobile_step1"><?php echo ($userinfo['phone']); ?></a></span>
						<span class="tips">点击修改手机号码</span>
					</span>
				</li>
				<li>
					<span class="l">公司名：</span>
					<span class="r"><input type="text" name="companyname" id="name" class="required" value="<?php echo ($userinfo['companyname']); ?>"/></span>
				</li>
				<li>
					<span class="l">姓名：</span>
					<span class="r"><input type="text" name="username" id="linkman" class="required" value="<?php echo ($userinfo['username']); ?>"/></span>
				</li>
				<li>
					<span class="l">所在地：</span>
					<span class="r"><input type="text" class="required" name="address" value="<?php echo ($userinfo['address']); ?>"/>
					</span>
				</li>
				<li>
					<span class="l">企业类型：</span>
					<span class="r">
						<input type="radio" name="typename" class="radio_input" value="上游厂家"  <?php if(($userinfo['typename']) == "上游厂家"): ?>checked<?php endif; ?>/><label class="label2">上游厂家</label>
						<input type="radio" name="typename" class="radio_input" value="贸易商"  <?php if(($userinfo['typename']) == "贸易商"): ?>checked<?php endif; ?>/><label class="label2">贸易商</label>
						<input type="radio" name="typename" class="radio_input" value="终端" checked="checked" <?php if(($userinfo['typename']) == "终端"): ?>checked<?php endif; ?>/><label class="label2">终端</label>
					</span>
				</li>
				<li>
					<span class="l">主营品种：</span>
					<span class="r"><input type="text"  name="mainproduct" class="required" id="main_products" value="<?php echo ($userinfo['mainproduct']); ?>"></span>
				</li>
				<li>
					<span class="l">固话：</span>
					<span class="r"><input type="text" value="<?php echo ($userinfo['telphone']); ?>" name="telphone" maxlength="20" id="tel" /></span>
				</li>
				<li>
					<span class="l">电子邮箱：</span>
					<span class="r"><input type="email" value="<?php echo ($userinfo['email']); ?>" name="email" maxlength="30" id="email"/></span>
				</li>
			</ul>
			<p class="mar_t10"><input class="save_btn" type="button" id="member_submit" value=""/></p>
	 </div>
	 </form>
</div>
</div>
<!-- <div class="member_wrap" >
	<div class="member_content" >
<div class="left">
	
		<div class="lan">
		<p class="title" style="margin-top:0;">我的报价单</p>
		<p><a href="http://www.zhaosuliao.com/member/product/product_import" >批量上传报价</a></p>
		<p><a href="http://www.zhaosuliao.com/member/product/add" >单条发布报价</a></p>
		<p><a href="http://www.zhaosuliao.com/member/product/list" >我的报价单</a></p>
	</div>
	<div class="lan">
		<p class="title">我的交易信息</p>
		<p><a href="http://www.zhaosuliao.com/member/purchase/add" >发布采购</a></p>
		<p><a href="http://www.zhaosuliao.com/member/purchase/list" >我的采购</a></p>
	</div>
	<div class="lan">
		<p class="title">账户管理</p>
		<p><a href="http://www.zhaosuliao.com/member/account" >账户信息</a></p>
		<p><a href="http://www.zhaosuliao.com/member/password/edit" >修改密码</a></p>
	</div>
	<div class="tel">
		<img src="http://www.zhaosuliao.com/resources/fore/image/member/tel.png"alt="找塑料网交易热线"/>
		<div class="jyrx">
			<p>交易热线</p>
			<p>020-83939808</p>
		</div>
	</div>
	
</div>
	<div class="right index">
			<div class="pulic_title">
				<i class="icon"></i>
				<span>申请正式会员</span>
			</div>
			<p class="step1_bg"></p>
			<ul class="zh_message">
				<li>
					<span class="l">帐号/移动电话：</span>
					<span class="r color2">17701900198</span>
				</li>
				<li>
					<span class="l"><i class="red">*</i>公司名：</span>
					<span class="r"><input type="text"></span>
				</li>
				<li>
					<span class="l"><i class="red">*</i>姓名：</span>
					<span class="r"><input type="text"></span>
				</li>
				<li>
					<span class="l"><i class="red">*</i>地区：</span>
					<span class="r"><input type="text"></span>
				</li>
				<li>
					<span class="l"><i class="red">*</i>主营品种：</span>
					<span class="r"><input type="text"></span>
				</li>
				<li>
					<span class="l"><i class="red">*</i>企业类型：</span>
					<span class="r">
						<input class="radio" name="type" type="radio"><i>上游厂家</i>
						<input class="radio" name="type" type="radio"><i>贸易商</i>
						<input class="radio" name="type" type="radio"><i>上游厂家</i>
					</span>
				</li>
			</ul>
			<p class="tips">( 注：带 <span class="red">*</span> 为必填选项 )</p>
			<p>
				<input type="button" class="commit_btn"/>
			</p>
	 </div>
  </div>
</div> -->
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