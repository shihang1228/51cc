<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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