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

                //var linkman = getCookie("linkman");
                var linkman = "<?php echo ($userdata['userid']); ?>";
                var username = "<?php echo ($userdata['username']); ?>(<?php echo ($userdata['phone']); ?>)";
                if (linkman != "" && linkman != "null" && linkman != null && linkman != 0) {
                    $("#js-login-info").prepend('<div style="float:left;">尊敬的<a href="member" style="color: red;">&nbsp;'+ username +'&nbsp;</a><a href="<?php echo U('Home/User/logout');?>" class="logout" data-url="<?php echo U('Home/Index/index');?>">【退出】</a>&nbsp;&nbsp;欢迎来到找塑料网!&nbsp;&nbsp;</div>');
                }else{
                    var register = "<?php echo U('User/register');?>";
                    var login = "<?php echo U('User/login');?>";
                    $("#js-login-info").prepend('<div style="float:left;"><span class="login fl">您好，欢迎来到找塑料网!  【<a href="'+login+'">会员登录</a> | <a href="'+register+'">免费注册</a>】</span></div>');
                }


                $("#js-login-info").on("click",".logout",function(e){
                    e.preventDefault();
                    var href = $(this).attr("href");
                    var url = $(this).data("url");
                    $.ajax({
                        url:href,
                        success:function(data){
                            if(data.result){
                                alert(data.msg);
                                window.location.href=url;
                            }
                        }
                    })
                })
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
<meta name="renderer" content="webkit"/>
<meta name="renderer" content="ie-stand">
    <div id="cgxx">
        <div class="cgxx_content mar_t20">
            <div class="cgxx_left">
                <form method="get" id="form_filter" action="<?php echo U('Home/Purchase/purchase');?>">
                 <!-- <input id="pageNo" name="pageNo" type="hidden" value="1" /> -->
				 <input id="pageSize" name="pageSize" type="hidden" value="15" />
                <div class="cgxx_search clearfix">
                    <i class="cgxx_search_text">品种</i>
                    <input type="text" class="cgxx_search_inp" name="varietyname" value="PE" />
                    <i class="cgxx_search_text">牌号</i>
                    <input type="text" class="cgxx_search_inp" name="gradename" value="" />
                    <i class="cgxx_search_text">厂家</i>
                    <input type="text" class="cgxx_search_inp" name="factoryname" value="" />
                    <i class="cgxx_search_text">交货地</i>
                    <input type="text" class="cgxx_search_inp" name="city" value="" />
                    <input type="submit" class="cgxx_search_sub" value="" />  
                </div>
                </form>
                <?php if(is_array($json_arr)): $i = 0; $__LIST__ = $json_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="cgxx_state mar_t10">
                    <div class="state_left">
                        <p class="p_h45">
                            <span class="fcolor_0 sp1 pu_co"><?php echo ($vo['gradename']); ?> <?php echo ($vo['varietyname']); ?> <?php echo ($vo['factoryname']); ?> <?php echo ($vo['quantity']); ?></span>
                            <span class="sp2">发布时间：<?php echo ($vo['deliverydate']); ?></span>
                        </p>
                        <p class="p_h38">
                            <span class="sp1">价格&nbsp;:</span>
                            <span class="sp2 fcolor_8"><?php echo ($vo['price']); ?></span>
                            <span class="sp1">&nbsp;&nbsp;&nbsp;&nbsp;交货地：<?php echo ($vo['deliveryplace']); ?></span>
                        </p>
                        <p class="p_h23">
                            <span class="mar_r_none">跟进交易员：<?php echo ($vo['dealer']); ?> <?php echo ($vo['tel']); ?></span>
                            <a href="../../wpa.qq.com/msgrd@v=1&uin=1647459768&site=www.zhaosuliao.com&menu=yes" target="blank"><img border="0" src="../../wpa.qq.com/pa@p=1_3A1647459768_3A17" alt="点击这里给我发消息" border="0" /></a>
                        </p>
                    </div>
                    <div class="state_right">
                        <p class="state_tip2"><span><?php echo ($vo['status']); ?></span></p>
                        <a class="state_img2"><?php echo ($vo['action']); ?></a>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                
               <!--分页-->
                <div class="pager">
                    <div class="digg" style="center"><?php echo ($page); ?></div>
                </div>

                
            </div>
            
            <div class="cgxx_right">
                    <div class="reg_cont">
                            <div class="reg_cont_img">
                                <img src="/Public/pc/image/index/icon0008.jpg" width="230" height="29"/>
                            </div> 
                            <textarea class="textarea_text" id="purchase_content" placeholder="写下您的真实需求，包括规格、材质等，收到后我们会立即给您回电确认，剩下的就交给我们吧。" ></textarea>
                   </div>
                   <input class="reg_sub" type="button" id="submit_purchase" />
                   
                     <div class="deal" >
                        <p class="title">&nbsp;&nbsp;最近成交</p>
                        <div id="scroll_new_purchase">
                            <span class="loading"><img src="/Public/pc/image/common/loading.gif"><br />正在努力加载中，请稍候……</span>
                            <ul id="recent_detail_ul">
                            </ul>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>

<input type="hidden" id="pageUrlPre" value="/purchaseView/list?name=PE&material=&manufacturer=&cityRemark=&pageSize=15&pageNo="/>


<!--发布成功弹出框start-->
<div class="Dwt" style="display: none;">
	<p class="title"><a href="javascript:void(0)" id="close_purchase">
		<!--关闭-->
		</a>&nbsp;&nbsp;&nbsp;&nbsp;采购单：<span id="purchase_sn"></span>&nbsp;成功发布</p>
	<div class="d">
		<p class="p1">&nbsp;&nbsp;您的委托采购内容：</p>
		<p class="p2" id="issue_content"></p>
		<p><i></i>您的以下委托已成功发布，请等待交易员为您审核采购内容，您的委托通过审核后将开始接受报价并由交易员为您找货。</p>
		<p style="padding-left:36px; margin-top:10px;">您可以从会员中心“我的采购”中了解您的委托进度 </p>
		<p style="padding-left:36px;">&gt;&gt; 点击查看"<a href='../member/purchase/list' style='color:#08d;'>我的采购</a>"</p>
	</div>
</div>
<!--发布成功弹出end框-->
<!--客服qq-->
<!--{template common/common_kf_qq}-->

<script src="/Public/pc/js/page.js" type="text/javascript"></script>
<script>
$(function()
{
	//$("#scroll_new_purchase").find("ul").scrollcontent(50);
   
    //免费发布采购信息
    $("#submit_purchase").on("click",function()
    {
        if(!tip_open_time())
        {
            return false;
        }

        var content=$.trim($("#purchase_content").val());

        $.get(SITE_URL+'common/check_login',function(rs)
        {
            if(rs.status==0)
            {
            	show_dialog_login();
            }
            else if(rs.data.is_checked==1 && rs.data.name!='')
            {
                if(!content)
                {
                    alert("请输入你要委托的信息");
                    return false;
                }
                else
                {
                    $.post(SITE_URL+'/purchaseView/save',{"keyword":content},function(rs)
                    {
                        if(rs.status<0)
                        {
                            alert(rs.msg);
                        }
                        else
                        {
                           // $(".Dwt").show();
                          //  $(".Dwt").find('#purchase_sn').html(rs.data[0]);
                          //  $(".Dwt").find('.p2#issue_content').html(rs.data[1]);
                            publishingSuccess.init({'width':500,'height':275,'num':rs.data[0],'content':rs.data[1]});
                        }
                    });
                }
            }else{
            	location.href = SITE_URL + "product/entrust_add";
            }
        });

    });
    $(".Dwt").find("#close_purchase").bind("click",function(){
        $(".Dwt").hide();
    });
	
    //初始化deal的高度

 
	function fixed(){
		    var t=$(".deal").offset().top;
            var logo_t=$("#new_logo").height();
            var nav_t=$("#new_nav").height();
            var top_t=$("#new_top").height();
            var reg_t=$(".reg_cont").height();
            var reg_sub=$(".reg_sub").height();

            var t3=logo_t+nav_t+top_t+reg_t+reg_sub;

            var l_h=$(".cgxx_left").height();
            var r_h=$(".cgxx_right").height();
            var deal_h=$(".deal").height();
        
             if($(".cgxx_left").height()<$(".cgxx_right").height()){
                $(".deal").css('height',l_h-reg_sub-reg_t-92);
             }
             if($(".cgxx_left").height()<500){
                $(".deal").css('height',500-reg_sub-reg_t-15);
             }

			$(window).scroll(function(){
				if($(window).scrollTop()>t){
					$(".deal").css({'position':'fixed','left':'50%','marginLeft':'340px','top':'0','z-index':'999'});
					if($(window).scrollTop()>l_h-r_h+t3+20){
                        $(".deal").css('height',deal_h+l_h-r_h+t3-58-$(window).scrollTop());
                    }
				}else{
					$(".deal").css({'position':'static','marginLeft':'0'});
					
				}
			});
	 };
	
	//fixed();
	
	
	//求购信息过长
	$(function() {
	    var jmz = {}
	    jmz.GetLength = function(str) {
	        var realLength = 0, len = str.length, charCode = -1;
	        for (var i = 0; i < len; i++) {
	            charCode = str.charCodeAt(i);
	            if (charCode >= 0 && charCode <= 128) realLength += 1;
	            else realLength += 2;
	        }
	        return realLength;
	    };
	    $(".pu_co").each(function(i){
	       if(jmz.GetLength($(this).html())>=30 && jmz.GetLength($(this).html())<35){
	    	   $(this).css({
	                "font-size":"20px",
	                "line-height":"40px"
	            });
	       }if(jmz.GetLength($(this).html())>=35 && jmz.GetLength($(this).html())<40){
	    	   $(this).css({
	                "font-size":"18px",
	                "line-height":"40px"
	            });
	       }if(jmz.GetLength($(this).html())>=40 && jmz.GetLength($(this).html())<45){
	    	   $(this).css({
	                "font-size":"14px",
	                "line-height":"40px"
	            });
	       }if(jmz.GetLength($(this).html())>=45){
	    	   $(this).css({
	                "font-size":"12px",
	                "line-height":"40px"
	            });
	       }
	    });
	});


	 $.get(SITE_URL+'purchaseView/recent_deal',function(rs)
     {
         if(rs.status==1)
         {
         	$("#recent_detail_ul").empty();
		   	$.each(rs.data, function(i, m){
	   			$("#recent_detail_ul").append('<li><p><span class="color1">'+m.modifyView+'</span>&nbsp;&nbsp;'+m.linkmanView+'&nbsp;&nbsp;成功以'+m.factCurrency+'元/吨 </p><p>采购了<span class="color2">&nbsp;&nbsp;'+m.cate+'&nbsp;&nbsp;'+m.material+'&nbsp;&nbsp;'+m.manufacturer+'</span></p></li>');
		   	});
		   	$("#scroll_new_purchase").find("ul").scrollcontent(50);
		   	fixed();
         }else{
        	 $("#recent_detail_ul").empty().append('<li><p style="text-align: center;">最近没有成交记录</p></li>');
         }
         $("#scroll_new_purchase .loading").hide();
     });
});
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