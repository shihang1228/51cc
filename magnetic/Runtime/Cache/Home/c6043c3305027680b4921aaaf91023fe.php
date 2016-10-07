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
<link href="/Public/pc/css/user.css" rel="stylesheet" type="text/css" />
<script src="/Public/pc/js/user.js" type="text/javascript"></script>
<div class="user_logo">
    <div class="logo">
    	<a href="../default.htm"><img src="/Public/pc/image/common/logo.png" title="找塑料网" alt="找塑料网" width="494" height="85" /></a>
    	<span class="icon">欢迎注册</span>
    </div>
</div><div class="status_bar"></div>
<div class="register" style="height:494px;">
	<input type="hidden" id='nologin' value=""/>
    <form id="myform" action='<?php echo U("Home/User/register_bgd");?>' method="post">
    <div class="l">
        <ul class="ul01">
         	<li class="mar_b30">
                <span class="s">用户名：</span> <input type="text" class="text w2"  value="6-12位字母或数字" name="username" id="username"/> <span></span>
            </li>
            <li class="mar_b30">
                <span class="s">密码：</span><input style="display:none;" type="password" value="" class="text w2 paw" name="password" id="password" /> <input type="text" value="6-12位字母、数字或符号" class="text w2 paw-text"/> <span></span>
            </li>
            <li class="mar_b30">
                <span class="s">确认密码：</span><input style="display:none;" type="password" value="" class="text w2 paw" name="password_two" id="password_two"/> <input type="text" value="6-12位字母、数字或符号" class="text w2 paw-text" /> <span></span>
            </li>
             <li class="mar_b30">
                <p> <span class="s">手机号：</span> <input type="text" class="text w2" name="mobile" id="mobile" value="输入手机号码免费获取短信验证码" /><span></span><!--  <a href="javascript:void(0);" class="activation"></a><span id="hide_tip" style="display:none;"></span> --></p>
            </li>
            <!-- <li class="mar_b30">
				<span class="s">验证码：</span> 
				<input type="text" class="text w3" id="verifycode" name="verifycode"  value="请输入验证码" />&nbsp;&nbsp;&nbsp;
       			<img id="captchaImage" class="captchaImage" width="90" height="34" src="../yzm/captcha-image" title="请输入验证码"  style="cursor: pointer;border: solid 1px #b7b7b7;margin-left:20px;float:left;height:34px;width:90px;" />
       			<span class="upload" alt="点击更换">看不清楚，换一张</span>
       			<span><span id="hide_tip_verifycode" style="display:none;"></span></span>
       			<span></span>
            </li>
			<li class="mar_b30">
				<span class="s">短信验证码：</span> 
				<input type="text" class="text w2" id="captcha" name="captcha" value="请输入短信验证码"  style="width:140px;"/>
				<a href="javascript:void(0);" class="activation"></a><span id="hide_tip" style="display:none;"></span>
				<span></span>
            </li> -->
           
            <li>
                <p class="font_14">
				<span class="s">&nbsp;</span>
				<label><input type="checkbox" id="is_agree" checked="checked" />&nbsp;已阅读</label>
				<a href="register/protocol" target="_blank">《找塑料网用户服务协议》</a>
				</p>
            </li>
            <li class="h_42">
                <p class="tc"><a id="submit_register" href="javascript:void(0);" class="button1"></a><span style="display:block;float:left;"></span></p>
            </li>
        </ul>
    </div>
    </form>
    <div class="r">
        <p class="p1">已有找塑料网账号？<a class="fcolor_0" href="login">立即登录</a></p>
        <p class="p2">登录找塑料网，可以免费上传报价单，查看行业采购需求，更可免费享受我们提供的撮合交易服务。</p>
        <p class="tc"><a href="login" class="button1"></a></p>
        <p class="QQ"><span>使用QQ帐号快速登录：</span><a href="login/passport/qq" class="button2"></a></p>
		<p class="kf_tel"><span>找塑料网客服热线：</span><span class="fcolor_8">020-83939808</span></p>
		<p class="QQ" style="font-size:16px;"><span>找塑料网在线客服：</span><span><a target="_blank" href="../../wpa.qq.com/msgrd@v=3&uin=3115678895&site=qq&menu=yes"><img border="0" src="../../wpa.qq.com/pa@p=2_3A3115678895_3A51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></span></p>
      
    </div>
</div>
<script>
$(function()
{
	// 更换验证码
	$(".upload").click( function() {
		$("#captchaImage").attr("src", "../yzm/captcha-image@timestamp=" + (new Date()).valueOf());
	});
    //设置消息提示
    function set_msg(o,class_name,msg)
    {
        o.attr("class",class_name).html(msg).show();
        setTimeout(function()
        {
            o.hide();
        },5000);
    }

    //发送验证码
    $(".activation").on("click",function()
    {
        countdown.init($(this));//倒计时
        var username=$.trim($("#username").val());
        var password= $("#password").val();
    	var password_two= $("#password_two").val();
        var mobile=$.trim($("#mobile").val());
        var verifycode=$.trim($("#verifycode").val());
        if(verifycode==null||verifycode==""||verifycode=="请输入验证码"){
        	set_msg($("#hide_tip_verifycode"),"wrong","请输入验证码");
               $("#verifycode").focus();
               countdown.stop();
               return false;
        }
        if(username==null||username==""||username=="6-12位字母或数字"){
       	 set_msg($("#username").next("span"),"wrong","请输入用户名");
            $("#username").focus();
            countdown.stop();
            return false;
        }else if(username.match('^[A-Za-z0-9]{6,12}$')==null){
	       	set_msg($("#username").next("span"),"wrong","请输入用户名(6-12位字母或数字)");
	           $("#username").focus();
	           countdown.stop();
	           return false;
	    }
        //密码 ! @ # $ % ?_
        if(password==null ||password==""||password=="6-12位字母、数字或符号"){
     	   set_msg($("#password").next("span"),"wrong","请输入密码");
            $("#password").focus();
            countdown.stop();
            return false;
        }else if(password.match('^[A-Za-z0-9! @ # $ % ?_&*()+=|../]{6,12}$')==null){
 	       	set_msg($("#password").next("span"),"wrong","请输入密码(6-12位字母、数字或符号)");
 	        $("#password").focus();
 	        countdown.stop();
 	        return false;
 	    }
        if(password_two==null ||password_two==""||password_two=="6-12位字母、数字或符号"){
     	   set_msg($("#password_two").next("span"),"wrong","请输入密码");
            $("#password_two").focus();
            countdown.stop();
            return false;
        }else if(password_two.match('^[A-Za-z0-9! @ # $ % ?_&*()+=|../]{6,12}$')==null){
 	       	set_msg($("#password_two").next("span"),"wrong","请输入密码(6-12位字母、数字或符号)");
 	        $("#password_two").focus();
 	        countdown.stop();
 	        return false;
 	    }else if(password!=password_two){
 	    	set_msg($("#password_two").next("span"),"wrong","两次输入密码不一致");
 	        $("#password_two").focus();
 	        countdown.stop();
 	        return false;
 	    }
        if(!$.ismobile(mobile))
        {
        	
            set_msg($("#mobile").closest("li").find("span").last("span"),"wrong","请输入正确的手机号");
            $("#mobile").focus();
            countdown.stop();
            return false;
        }
        $.getJSON("register/msg",{"username":username,"mobile":mobile,"verifycode":$("#verifycode").val()},function(rs)
        {
        	
            if(rs.status<0)
            {
                countdown.stop();
                if(rs.status==-9){
                	
                	set_msg($("#username").next("span"),"wrong",rs.msg);
                	countdown.stop();
                }else if(rs.status==-12){
                	set_msg($("#mobile").next("span"),"wrong",rs.msg);
                	countdown.stop();
                }else if(rs.status==-10){
                	set_msg($("#username").closest("li").find("span").last("span"),"wrong",rs.msg);
                	countdown.stop();
                }else if(rs.status==-13){
                	set_msg($("#verifycode").closest("li").find("span").last("span"),"wrong",rs.msg);
                	countdown.stop();
                	
                }else{
                	set_msg($("#verifycode").closest("li").find("span").last("span"),"wrong",rs.msg);
                	//set_msg($("#hide_tip"),"wrong",rs.msg);
                	countdown.stop();
                }
                $("#captchaImage").attr("src", "../yzm/captcha-image@timestamp=" + (new Date()).valueOf());
               //$("#verifycode").val('输入手机号码免费获取短信验证码').css('color','#ccc');
            }
            else
            {
              
                alert(rs.msg);
		        //$("#mobile").val(mobile);
		        //$("#verifycode").val('输入短信验证码').css('color','#ccc');
            }
        });
    });

    $("#submit_register").on("click",function()
    {
    	var username=$("#username").val();
    	var password= $("#password").val();
    	var password_two= $("#password_two").val();
        var mobile=$.trim($("#mobile").val());
        var captcha=$.trim($("#captcha").val());
        var verifycode=$.trim($("#verifycode").val());
        var is_agree=$("#is_agree").is(":checked");
 
        if(username==null||username==""||username=="6-12位字母或数字"){
        	 set_msg($("#username").next("span"),"wrong","请输入用户名");
             $("#username").focus();
             return false;
        }else if(username.match('^[A-Za-z0-9]{6,12}$')==null){
        	set_msg($("#username").next("span"),"wrong","请输入用户名(6-12位字母或数字)");
            $("#username").focus();
            return false;
        }
        //密码 ! @ # $ % ?_
       if(password==null ||password==""||password=="6-12位字母、数字或符号"){
    	   set_msg($("#password").next("span"),"wrong","请输入密码");
           $("#password").focus();
           return false;
       }else if(password.match('^[A-Za-z0-9! @ # $ % ?_&*()+=|../]{6,12}$')==null){
	       	set_msg($("#password").next("span"),"wrong","请输入密码(6-12位字母、数字或符号)");
	        $("#password").focus();
	        return false;
	    }
       if(password_two==null ||password_two==""||password_two=="6-12位字母、数字或符号"){
    	   set_msg($("#password_two").next("span"),"wrong","请输入密码");
           $("#password_two").focus();
           return false;
       }else if(password_two.match('^[A-Za-z0-9! @ # $ % ?_&*()+=|../]{6,12}$')==null){
	       	set_msg($("#password_two").next("span"),"wrong","请输入密码(6-12位字母、数字或符号)");
	        $("#password_two").focus();
	        return false;
	    }else if(password!=password_two){
	    	set_msg($("#password_two").next("span"),"wrong","两次输入密码不一致");
	        $("#password_two").focus();
	        return false;
	    }
       
       // if(mobile==null ||mobile==""||mobile=="输入手机号码免费获取短信验证码"){
    	  //  set_msg($("#mobile").next("span"),"wrong","请输入手机号码");
    	  //  $("#mobile").focus();
	      //   return false;
       // }
       // if(verifycode==null ||verifycode==""||verifycode=="请输入验证码"){
    	  //  set_msg($("#verifycode").closest("li").find("span").last("span"),"wrong","请输入验证码");
    	  //  $("#verifycode").focus();
	      //   return false;
       // }
       // if(captcha==null ||captcha==""||captcha=="请输入验证码"){
    	  //  set_msg($("#captcha").closest("li").find("span").last("span"),"wrong","请输入验证码");
    	  //  $("#captcha").focus();
	      //   return false;
    	   
       // }
       
      
       // /*  if(verifycode==null || verifycode =="")
       //  {
       //  	set_msg($("#hide_tip"),"wrong","请输入短信验证码");
       //      $("#verifycode").focus();
       //      return false;
       //  } */
       //  if(captcha==null || captcha ==""||captcha=="请输入短信验证码")
       //  {
       //  	set_msg($("#captcha").next("span"),"wrong","请输入短信验证码");
       //      $("#captcha").focus();
       //      return false;
       //  }
        if(!is_agree){
        	alert("只有同意找塑料用户服务协议才能提交");
        }
        var myform = $("#myform").serialize();
        var myform_action = $("#myform").attr("action");
        $.post(myform_action,myform,function(rs)
        {
            // if(rs.status<0)
            // {
            //     set_msg($("#hide_tip"),"wrong",rs.msg);
            //     $("#captchaImage").attr("src", "../yzm/captcha-image@timestamp=" + (new Date()).valueOf());
            // }
            // else
            // {
            // 	if($("#nologin").val()==1){
            // 		location.href="register/success@mid="+rs.data;
            // 	}else{
            // 		location.href="register/add@mid="+rs.data;
            // 	}
            // }
            if(rs.result){
                alert("恭喜你，注册成功");
                window.location.href="<?php echo U('Home/User/member');?>";
            }else{
                alert("注册失败，"+rs.msg);
                return;
            }
            
        },"json");
    });
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
    /*
    $(".paw").blur(function(){
    	var val=$.trim($(this).val());
    	if(val==""){
    		$(this).attr('type','text').val('6-12位字母、数字或符号').css('color','#ccc');
    	}else{
    		$(this).attr('type','password');
    	}
    }).focus(function(){
    	if($(this).val()=='6-12位字母、数字或符号'){
    		$(this).val('').attr('type','password').css('color','#000');
    	}
    })*/
    $(".paw-text").focus(function(){
    	$(this).hide();
    	$(this).siblings(".paw").show().focus();
    });
    $(".paw").blur(function(){
    	if(!$.trim($(this).val())){
    		$(this).hide();
    		$(this).siblings(".paw-text").show();
    	}
    });
    $("#mobile").blur(function(){
    	var val=$.trim($(this).val());
    	if(val==""){
   			$(this).val('输入手机号码免费获取短信验证码').css('color','#ccc');
    	}
    }).focus(function(){
    	if($(this).val()=='输入手机号码免费获取短信验证码'){
    		$(this).val('').css('color','#000');
    	}
    });
     $("#captcha").blur(function(){
    	var val=$.trim($(this).val());
    	if(val==""){
    		$(this).val('请输入短信验证码').css('color','#ccc');
    	}
    }).focus(function(){
    	if($(this).val()=='请输入短信验证码'){
    		$(this).val('').css('color','#000');
    	}
    }); 
     $("#verifycode").blur(function(){
    	var val=$.trim($(this).val());
    	if(val==""){
    		$(this).val('请输入验证码').css('color','#ccc');
    	}
    }).focus(function(){
    	if($(this).val()=='请输入验证码'){
    		$(this).val('').css('color','#000');
    	}
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