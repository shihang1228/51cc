<?php if (!defined('THINK_PATH')) exit();?><!--头部公共部分-->
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
        <link href="/Public/pc/plugin/artdialog/dialog.css" rel="stylesheet" type="text/css"/>     
        <link href="/Public/pc/css/common.css" rel="stylesheet" type="text/css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <link href="/Public/pc/plugin/jquery-validate/jquery.validate.min.css" type="text/css" rel="stylesheet" />
        <script src="/Public/pc/plugin/jquery-validate/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/Public/pc/plugin/jquery-validate/jquery.validate.method.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/Public/pc/plugin/jquery-areapop/jquery-areapop.js"></script>
        <script src="/Public/pc/plugin/artdialog/dialog.js" type="text/javascript"></script>
        <script src="/Public/pc/plugin/form.js" type="text/javascript"></script>
        <script src="/Public/pc/js/js.js" type="text/javascript"></script>
        <script src="/Public/pc/js/common.js" type="text/javascript"></script>        
    </head>
<body>
<link href="/Public/pc/css/member.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	/*可输可选下拉*/
.combobox input:focus ~ ul{display:block;}
.combobox ul{
    position: absolute;
    left: 224px;
    top: 32px;
    width: 106px;
    border: 1px solid #bbb;
    z-index: 100;
    background: #fff;
    border-top: 0;
    max-height: 243px;
    overflow: auto;
    display:none;
}
.combobox ul li{
    font-size: 14px;
    text-indent: 10px;
    cursor: pointer;
    border-bottom: 1px solid #dedede;
}
.combobox ul li:hover{
    background-color: #abcdef;
}
.combobox ul li.no-result{
    color:#eee;
}
.combobox ul li.no-result:hover{
    background-color:#fff;
}
</style>
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
            <img src="/Public/pc/image/member/member_logo.png" title="找塑料网" alt="找塑料网logo"/>
        </div>
    </div>
</div><script type="text/javascript">
$(function()
{
	// 增加一行
	var idx=0;
	$(".add_btn").click(function(){
		idx++;
		var obj=$(".biaozhun").eq(0).clone(true);
		$(this).before(obj);
		$(".biaozhun").eq(idx).find("input").val('');
		$(".biaozhun").eq(idx).find("input").each(function(){
			var str=$(this).attr('name');
				$(this).attr('name',str.replace(/0/, idx));
		})
	});
	$(".tab_head ul li").each(function(i){
		$(this).click(function(){
			$(".tab_head ul li").removeClass('on');
			$(this).addClass("on");
			$(".toggle_div").hide().eq(i).show();
			$("#flag").val(i+1);
		})
		
	});
	
	//弹框
	$(".content_why").click(function(){
		$("#mask").css({'height':$('body').height()}).show();
		$(".tan_div").show();
	});
	$(".close").click(function(){
		$("#mask").hide();
		$(".tan_div").hide();
	});
	
	//表单验证
	
if($(".inp_div1").length>0){
	$("#myform1").submit(function(){
		if($.trim($('input[name="name"]').val())==''){
			alert('请输入公司名称');
			return false;
		}else if($.trim($(".h_30").val())==''){
			alert('请选择企业类型');
			return false;
		}else if($.trim($('input[name="provinceName"]').val())==''){
			alert('请输入省份');
			return false;
		}else if($.trim($('input[name="cityName"]').val())==''){
			alert('请输入城市');
			return false;
		}else if($.trim($('input[name="mainProducts"]').val())==''){
			alert('请输入主营品种');
			return false;
		}else if($.trim($('input[name="linkman"]').val())==''){
			alert('请输入联系人');
			return false;
		}
		
	});
	
}else{
	$("#myform1").submit(function(){
		var str='';
		$(".input_div").each(function(){
			 $(this).find("input").each(function(){
				str+=$(this).val();
			})
		})
		var text_content=$(".text_content").val();
		if(str=='' && text_content==''){
			alert('请输入委托采购内容');
			return false;
		}
		
	})
	
}
	
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
	<div class="pulic_title">单条上传报价</div>
	<div class="fbcg">
		<p>您的报价单内容：</p>
		<form method="post" action="<?php echo U('Home/Product/addbaojiandan_bgd');?>" id="myform">
			<!--级联地址-->
			<input type="hidden" value="<?php echo U('Home/Base/gradelist');?>" class="jladdress" />			
			<div class="tab_head">
				<ul>
					<li class="on">单条报价单</li>
					<li>批量报价单</li>
				</ul>
				<!-- <a href="javascript:void(0)" class="content_why">如何填写采购内容？</a> -->
			</div>
			<div class="tab_content">
				<div class="toggle_div" style="display:block;">
					<div class="biaozhun pr" >
						<div class="input_div">
							<span class="span_text mar_l0">品种：</span>
							<span class="span_input">
								<select name="varietyid" id="varietyid">
									<option value="0">请选择品种</option>
									<?php if(is_array($variety)): $i = 0; $__LIST__ = $variety;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['varietyid']); ?>"><?php echo ($vo['varietyname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</span>
							<span class="span_text">牌号：</span>
							<span class="span_input combobox">
								<input type="text" name="gradeid" class="gradeid"/>
								<ul id="gradelist">
									
								</ul>
							</span>
							<span class="span_text">厂家：</span>
							<span class="span_input">
								<select name="factoryid" id="">
									<option value="0">请选择厂家</option>
									<?php if(is_array($factory)): $i = 0; $__LIST__ = $factory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['factoryid']); ?>"><?php echo ($vo['factoryname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</span>
							<span class="span_text">数量：</span>
							<span class="span_input">
								<input type="text" name="quantity"/>
							</span>
							<span class="span_text">价格：</span>
							<span class="span_input">
								<input type="text" name="unitprice"/>
							</span>
						</div>
						<div class="input_div mar_t10 mar_b20">
							<span class="span_text">单位：</span>
							<span class="span_input">
								<select name="unitid" id="">
									<option value="0">请选择单位</option>
									<?php if(is_array($unit)): $i = 0; $__LIST__ = $unit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['unitid']); ?>"><?php echo ($vo['unitname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</span>
							<span class="span_text">时间：</span>
							<span class="span_input">
								<input type="text" name="deliverydate"/>
							</span>
							<span class="span_text">地点：</span>
							<span class="span_input">
								<input type="text" name="deliveryplace"/>
							</span>
							<span class="span_text">仓库：</span>
							<span class="span_input">
								<input type="text" name="warehouse"/>
							</span>
						</div>
						<div class="input_div mar_t10 mar_b20">
							<span class="span_text">形状：</span>
							<span class="span_input">
								<select name="specid" id="">
									<option value="0">请选择形状</option>
									<?php if(is_array($spec)): $i = 0; $__LIST__ = $spec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['specid']); ?>"><?php echo ($vo['specname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</span>
							<span class="span_text">镀层：</span>
							<span class="span_input">
								<select name="claddingid" id="">
									<option value="0">请选择镀层</option>
									<?php if(is_array($cladding)): $i = 0; $__LIST__ = $cladding;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['claddingid']); ?>"><?php echo ($vo['claddingname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</span>
							<span class="span_text mar_l0">长：</span>
							<span class="span_input">
								<input type="text" name="length_diameter"/>
							</span>
							<span class="span_text mar_l0">宽：</span>
							<span class="span_input">
								<input type="text" name="width_aperture"/>
							</span>
							<span class="span_text mar_l0">高：</span>
							<span class="span_input">
								<input type="text" name="height_thickness"/>
							</span>
						</div>
						<div class="input_div mar_t10 mar_b20">
							<span class="span_text mar_l0">备注：</span>
							<span class="span_input">
								<input class="max_input" type="text" name="comments"/>
							</span>
						</div>
					</div>
				 </div>
				 <div class="text toggle_div hide">
					<textarea class="text_content" name="keyword" placeholder="写下您的真实需求，包括品种、牌号、厂家等，收到后我们会立即给您回电确认，剩下就交给我们吧。&#13;&#10;例子1： LLDPE  延长榆能化  7042   8800元/吨  10吨   &#13;&#10;例子2： PVC  新疆中泰  SG-5  5330元/吨   20吨"></textarea>
				 </div>
			 </div>
			 <p class="queren">确认您发的采购信息真实无误，否则不能发布！谢谢！</p>
			 <input type="submit" class="fb_btn" value="发布" />
			 <input type="hidden" value="2" id="flag"  name="judge"/>
		</form>
	</div>
</div>
</div>
</div>


<div id="mask"></div>
<div class="tan_div">
		<div class="title">如何填写采购内容<span class="close"></span></div>
		<div class="tan_content">
			<p class="p1">写下您的真实需求，包括品种、牌号、厂家等。收到后我们会立即给您回电确认，剩下就交给我们吧。</p>
			<p class="p2">可按标准格式或文本格式进行填写。<br/>
				可填写多条采购信息。</p>
		</div>
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