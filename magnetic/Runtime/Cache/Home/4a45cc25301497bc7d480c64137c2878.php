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
<link href="/Public/pc/css/index.css" rel="stylesheet" type="text/css" />
<script src="/Public/pc/js/index.js" type="text/javascript"></script>
<!--顶层搜索start-->
<script type="text/javascript">
$(function(){
    //选项卡切换
    $(".right_nav").children("li").each(function(){
        $(this).mouseover(function(){
            var index=$(".right_nav").children("li").index(this);
            $(".right_tab_content").eq(index).addClass("sh1").siblings(".right_tab_content").removeClass("sh1");
            $(this).addClass("act1").siblings("li").removeClass("act1");
        });
    });
    $(".sub_nav").children("a").each(function(){
        $(this).mouseover(function(){
            var index=$(".sub_nav").children("a").index(this);
            $(this).addClass("act2").siblings("a").removeClass("act2");
            $(".sub_container").eq(index).addClass("sh2").siblings(".sub_container").removeClass("sh2");
        });
    });

    //5楼装置日历、活动专题切换
    $().Tab("device_list","on");
    $().Tab("gg_div","on");
    $("#gg_scroll1").adScroll();
    $("#gg_scroll2").adScroll();

    //5F文章轮播
    function leftscroll(){
        var $imgList=$(".img_div .img_list");
        var titleList =[{"title":"中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）","url":"../hq.zhaosuliao.com/pe/pedybg/21028.html"},{"title":"【宏观塑评】伊朗参会欧佩克 国际油价迎反弹","url":"../hq.zhaosuliao.com/ppl/pplqwzl/21039.html"},{"title":"【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）","url":"../hq.zhaosuliao.com/ppl/pplqwzl/20234.html"}];
        var arr=[]; 
        $.each(titleList,function(n,value) {  
            var trs ='<a href="'+value.url+'" target="_blank" title="'+value.title+'">'+value.title+'</a>'; 
            arr.push(trs);
        });
        var w = $imgList.find("li").eq(0).width();
        var lis = $imgList.find("li").eq(0).clone(true);
        $imgList.append(lis);
        var len = $imgList.find("li").length;
        $imgList.css("width",len*w);

        var iNow=0;
        var times=null;
        time();

        function time(){
            times = setInterval(function(){
                iNow++;
                move(iNow);
            },4000);
        };

        function move(num){
            if (num>len-1) {
                $imgList.css("left",0);
                num=1;
                iNow=num;
            };
            if (num<0) {
                $imgList.css("left",-((len-1)*w));
                num=len-2;
                iNow=num;
            };

            $(".img_div .dot a").removeClass("on");
            $(".img_div .text").html(arr[0]);
            if (num == len - 1) {
                $(".img_div .text").html(arr[0]);
                $(".img_div .dot a").eq(0).addClass("on");
            } else {
                $(".img_div .text").html(arr[num]);
                $(".img_div .dot a").eq(num).addClass("on");
            }
            $imgList.stop(true);
            $imgList.animate({
                "left":-(num*w)
            },600);
        };

        $(".img_div").mouseover(function() {
            clearInterval(times);
        }).mouseout(function() {
            clearInterval(times);
            time();
        });

        $(".img_div .prev").click(function() {
            iNow--;
            move(iNow);
        });
        $(".img_div .next").click(function() {
            iNow++;
            move(iNow);
        });

        $(".img_div .dot a").each(function(i){
            $(this).mouseover(function(){
                iNow=i;
                move(i);
            });
        });
    };
    leftscroll();

     
    //数据滚动
    function jdt(obj){
        if($(obj)[0]){
            $(obj).append($(obj).children("p").eq(0).clone(true));
            var len=$(obj).children("p").length;
            var height=$(obj).children("p").height();
            var iNum=0;
            setInterval(function(){
                iNum++;
                if(iNum>len-1){
                    $(obj).css("top","0");
                    iNum=1;
                };
                $(obj).animate({top:-iNum*height},300);
            },5000)
        };
    };
    jdt(".run1_1");
    jdt(".run1_2");
    jdt(".run2_1");
    jdt(".run2_2");
    jdt(".run3_1");
    jdt(".run3_2");
    jdt(".run4_1");
    jdt(".run4_2");
    jdt(".run5_1");    

});
</script>
<!-- 5F样式兼容 -->
<!--[if lte IE 8]>
<script type="text/javascript">
$(function(){
    $(".center_wrap .box1 .img_div .text").css("background","url(/Public/pc/image/common/black_opcity.png)");
    $(".center_wrap .box3 .ad_div .content .dot a").css("background","url(/Public/pc/image/common/black_opcity.png)");
    $(".center_wrap .box1 .img_div .prev,.center_wrap .box1 .img_div .next").css({
        "background":"url(/Public/pc/image/index/center_arrow.png)",
        "background-repeat":"no-repeat"
    });
    $(".center_wrap .box1 .img_div .prev").css("background-position","6px 16px");
    $(".center_wrap .box1 .img_div .next").css("background-position","-44px 16px");
    $(".center_wrap .box3 .ad_div .content .prev, .center_wrap .box3 .ad_div .content .next").css({
        "background":"url(/Public/pc/image/index/center_arrow.png)",
        "background-repeat":"no-repeat"
    });
    $(".center_wrap .box3 .ad_div .content .prev").css("background-position","6px 16px");
    $(".center_wrap .box3 .ad_div .content .next").css("background-position","-44px 16px");
    $(".center_wrap .box3 .ad_div .content .dot a.on").css("background","#fff")
});
</script>  
<![endif]-->


<div id="search" style="display:none;">
    <div class="search_content">
        <a href="default.htm"><img src="/Public/pc/image/index/logo2.jpg" alt="找塑料网logo" width="141" height="47"/></a>
        <div class="search_div">
            <div class="selecd_btn">
                <span>搜现货</span>
                <ul class="selecd_btn2" style="display:none;">
                    <li>搜现货</li>
                    <li>物性表</li>
                </ul>
            </div>
            <form>
                <input class="search_input" type="text" name="keyword" value="请输入品种/牌号/厂家/公司进行搜索" style="color:#999;" />
                <input type="text" style="display:none" />
                <input class="search_sub" type="button" value=""/>
            </form>
        </div>
    </div>
</div>

<div class="big_bg">
    <!--公告-->
    <div id="notice" class="notice">
        <div class="l"><a href="news/11980.html" target="_blank">关于找塑料网公司主体名称变更的公告</a></div>
            
        <div class="r"></div>
        <input type="hidden" id="now_time" value="1472221200" />

                <div class="real_time">
                    <p class="s">实时成交价：</p>
                    <div class="d clearfix">
                        <div class="box_info run5_1">
                                <p class="finfo">
                                    <span class="lt">4小时前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                  
                                     8965元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">5小时前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                  
                                     9000元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">6小时前</span>
                                    <span class="mp">PP T30S</span>
                                    <span class="mp">延炼</span>
                                    <span class="mp color">
                                  
                                     8280元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">8小时前</span>
                                    <span class="mp">LLDPE DFDA-7042</span>
                                    <span class="mp">包头神华</span>
                                    <span class="mp color">
                                  
                                     9200元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">1天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                  
                                     9010元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">1天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                  
                                     9010元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">1天前</span>
                                    <span class="mp">HDPE TR144</span>
                                    <span class="mp">中石化茂名</span>
                                    <span class="mp color">
                                  
                                     9470元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">1天前</span>
                                    <span class="mp">PP K8003</span>
                                    <span class="mp">中石油独山子</span>
                                    <span class="mp color">
                                  
                                     8600元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">1天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                  
                                     9010元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                    <span class="lt">2天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                  
                                     9000元/吨
                                    </span>
                                </p>
                        </div>
                    </div>
                    <a class="c" href="../hq.zhaosuliao.com/finalPrice/default.htm" title="点击查看更多成交价">更多成交价>></a>
                    <div class="real_timeA" style=" display: none;">
                        <p class="s">实时成交价：</p>
                        <div class="d clearfix">
                                <p class="finfo">
                                     <span class="lt">4小时前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                     8965元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">5小时前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                     9000元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">6小时前</span>
                                    <span class="mp">PP T30S</span>
                                    <span class="mp">延炼</span>
                                    <span class="mp color">
                                     8280元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">8小时前</span>
                                    <span class="mp">LLDPE DFDA-7042</span>
                                    <span class="mp">包头神华</span>
                                    <span class="mp color">
                                     9200元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">1天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                     9010元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">1天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                     9010元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">1天前</span>
                                    <span class="mp">HDPE TR144</span>
                                    <span class="mp">中石化茂名</span>
                                    <span class="mp color">
                                     9470元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">1天前</span>
                                    <span class="mp">PP K8003</span>
                                    <span class="mp">中石油独山子</span>
                                    <span class="mp color">
                                     8600元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">1天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                     9010元/吨
                                    </span>
                                </p>
                                <p class="finfo">
                                     <span class="lt">2天前</span>
                                    <span class="mp">HDPE BL3</span>
                                    <span class="mp">伊朗国家石化</span>
                                    <span class="mp color">
                                     9000元/吨
                                    </span>
                                </p>
                        </div>
                        <a class="c" href="../hq.zhaosuliao.com/finalPrice/default.htm" title="点击查看更多成交价">更多成交价>></a>
                    </div>   
                </div>
        
    </div>

    <!--banner start-->
    <div id="new_banner" class="clearfix">
        <div class="new_banner_content">
            <div class="focus">
                <h3 class="focus_title">今日焦点</h3>
                <ul>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/22.html" target="view_window">Nymex WTI</a>
                        <span class="p_w50 fcolor_1">47.33</span>
                        <span class="p_w40 fcolor_1">0.56</span>
                    </li>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/23.html" target="view_window">ICE Brent</a>
                        <span class="p_w50 fcolor_1">49.67</span>
                        <span class="p_w40 fcolor_1">0.62</span>
                    </li>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/18.html" target="view_window">乙烯(CFR东北亚)</a>
                        <span class="p_w50 fcolor_1">1200</span>
                        <span class="p_w40 fcolor_1">20</span>
                    </li>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/19.html" target="view_window">乙烯(CFR东南亚)</a>
                        <span class="p_w50 fcolor_1">1070</span>
                        <span class="p_w40 fcolor_1">0</span>
                    </li>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/20.html" target="view_window">丙烯(FOB韩国)</a>
                        <span class="p_w50 fcolor_1">800</span>
                        <span class="p_w40 fcolor_1">0</span>
                    </li>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/24.html" target="view_window">苯乙烯(FOB韩国)</a>
                        <span class="p_w50 fcolor_2">1023.5</span>
                        <span class="p_w40 fcolor_2">-2</span>
                    </li>
                    <li>
                        <a class="p_w100" href="zixun/dtjg/17.html" target="view_window">美元指数</a>
                        <span class="p_w50 fcolor_2">94.72</span>
                        <span class="p_w40 fcolor_2">-0.05</span>
                    </li>
                </ul>
            </div>
            <div class="banner_img">
                <ul class="img_list">
                        <li><a target="_blank" href="../hq.zhaosuliao.com/pe/pedybg/21028.html"><img alt="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）" src="/Public/pc/upload/gallery/201608/2d55d3da-d23d-4934-8a78-2d6c3b33309b.jpg" width="700" height="270"/></a></li>
                        <li><a target="_blank" href="zixun/gsdt/16683.html"><img alt="找塑料网牵手广和新材料，改性塑料OEM体系又添新成员" src="/Public/pc/upload/gallery/201608/b66de3f1-ec23-4e62-b898-a21ea0cd76f4.jpg" width="700" height="270"/></a></li>
                        <li><a target="_blank" href="zixun/rmhd/16682.html"><img alt="拆超级红包，赚100倍翻倍！" src="/Public/pc/upload/gallery/201608/6bd7526a-33a7-4883-8335-24eb79a8e0a2.jpg" width="700" height="270"/></a></li>
                        <li><a target="_blank" href="huodong/saomachaihongbao"><img alt="【激情奥运季】采购成交，拆取红包，惊喜100%" src="/Public/pc/upload/gallery/201608/365e32a3-6e6a-430c-8f83-1095f8b12c84.jpg" width="700" height="270"/></a></li>
                </ul>
                <p class="banner_focus">
                    <a href="javascript:void(0)"></a>
                    <a href="javascript:void(0)"></a>
                    <a href="javascript:void(0)"></a>
                    <a href="javascript:void(0)"></a>
                </p>
            </div>
            <div class="free_message">
                <p class="free_title">
                    免登录快速发布采购
                    <span class="title_icon"></span>
                </p>
                <div class="free_message_content">
                    <textarea name="purchase_content" id="purchase_content" class="textarea_message" placeholder="写下您的真实需求，包括品种、牌号、厂家等，收到后我们会立即给您回电确认，剩下的就交给我们吧。"></textarea>
                    <img src="/Public/pc/image/index/fbxx.jpg" alt="找塑料网免费委托找货" width="240" height="28"/>
                    <input type="submit" class="free_btn" id="purchase_submit" value=" "/>
                </div>
            </div>
        </div>
    </div>
    <!--banner end-->
    
    <!--石化价格 start-->
    <div class="new_price_content">
        <div class="price_left">
            <div class="price_title">
                <div class="price_title_left">
                    <img src="/Public/pc/image/index/price.jpg" width="80" height="30" alt="找塑料网石化价格"/>
                    <p>最后更新：08月26日 16:55</p>
                </div>
                <div class="price_title_right">
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E7_259F_25B3_25E5_258C_2596_25E5_258D_258E_25E5_258D_2597" title="点击查看更多牌号价格">华南</a>
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E7_259F_25B3_25E5_258C_2596_25E5_258D_258E_25E4_25B8_259C" title="点击查看更多牌号价格">华东</a>
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E7_259F_25B3_25E5_258C_2596_25E5_258D_258E_25E4_25B8_25AD" title="点击查看更多牌号价格">华中</a>
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E7_259F_25B3_25E5_258C_2596_25E5_258D_258E_25E5_258C_2597" title="点击查看更多牌号价格">华北</a>
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E6_25B2_25B9_25E4_25B8_259C_25E5_258C_2597" title="点击查看更多牌号价格">东北</a>
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E6_25B2_25B9_25E8_25A5_25BF_25E5_258C_2597" title="点击查看更多牌号价格">西北</a>
                    <a target="_blank" href="../hq.zhaosuliao.com/center/priceCenter@type=1&salesRegion=_25E4_25B8_25AD_25E6_25B2_25B9_25E8_25A5_25BF_25E5_258D_2597" title="点击查看更多牌号价格">西南</a>
                    <span class="line"></span>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>福建联合</span><span class="sp2">HDPE 8920</span></p>
                    <p class="p2 "><span class="sp1">8900 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>茂名石化</span><span class="sp2">LDPE 951-050</span></p>
                    <p class="p2 up"><span class="sp1">9850 </span><span class="sp2">100</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>广州石化</span><span class="sp2">LLDPE 7042</span></p>
                    <p class="p2 up"><span class="sp1">9600 </span><span class="sp2">50</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>福建联合</span><span class="sp2">均聚PP粒 T30S</span></p>
                    <p class="p2 "><span class="sp1">8450 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>海南炼化</span><span class="sp2">均聚PP粒 Z30S</span></p>
                    <p class="p2 "><span class="sp1">8150 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>扬子石化</span><span class="sp2">HDPE 5000S</span></p>
                    <p class="p2 "><span class="sp1">10000 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>上海石化</span><span class="sp2">LDPE Q281</span></p>
                    <p class="p2 "><span class="sp1">10250 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>扬子石化</span><span class="sp2">LLDPE 7042</span></p>
                    <p class="p2 "><span class="sp1">9350 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>LG大沽</span><span class="sp2">PVC粉 S-1000</span></p>
                    <p class="p2 "><span class="sp1">5700 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>上海石化</span><span class="sp2">均聚PP粒 T300</span></p>
                    <p class="p2 "><span class="sp1">8450 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>齐鲁石化</span><span class="sp2">HDPE 6098</span></p>
                    <p class="p2 "><span class="sp1">9600 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>齐鲁石化</span><span class="sp2">LDPE 2100TN00</span></p>
                    <p class="p2 "><span class="sp1">10450 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>中原石化</span><span class="sp2">LLDPE 7050</span></p>
                    <p class="p2 up"><span class="sp1">9250 </span><span class="sp2">50</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>河南宇航</span><span class="sp2">PVC粉 SG-5</span></p>
                    <p class="p2 "><span class="sp1">6000 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>中原石化</span><span class="sp2">均聚PP粒 T30S</span></p>
                    <p class="p2 "><span class="sp1">8150 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>中沙天津石化</span><span class="sp2">HDPE 5502XA</span></p>
                    <p class="p2 "><span class="sp1">9200 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>燕山石化</span><span class="sp2">LDPE 1C7A</span></p>
                    <p class="p2 "><span class="sp1">11500 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>天津石化</span><span class="sp2">LLDPE 9020</span></p>
                    <p class="p2 "><span class="sp1">9350 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>山东信发</span><span class="sp2">PVC粉 SG-5</span></p>
                    <p class="p2 "><span class="sp1">5950 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>燕山石化</span><span class="sp2">均聚PP粒 S1003</span></p>
                    <p class="p2 "><span class="sp1">7900 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>大庆石化</span><span class="sp2">HDPE 5000S</span></p>
                    <p class="p2 "><span class="sp1">10000 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>大庆石化</span><span class="sp2">LDPE 18D</span></p>
                    <p class="p2 up"><span class="sp1">10000 </span><span class="sp2">100</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>抚顺石化</span><span class="sp2">LLDPE 7042</span></p>
                    <p class="p2 "><span class="sp1">9150 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>大庆炼化</span><span class="sp2">均聚PP粒 T30S</span></p>
                    <p class="p2 "><span class="sp1">8200 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>大庆炼化</span><span class="sp2">均聚PP粒 Z30S</span></p>
                    <p class="p2 "><span class="sp1">7500 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>独山子石化</span><span class="sp2">HDPE 8008</span></p>
                    <p class="p2 "><span class="sp1">9300 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>兰州石化</span><span class="sp2">LDPE 2426H</span></p>
                    <p class="p2 "><span class="sp1">10050 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>兰州石化</span><span class="sp2">LLDPE 7042</span></p>
                    <p class="p2 "><span class="sp1">9100 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>新疆天业</span><span class="sp2">PVC粉 SG-5</span></p>
                    <p class="p2 "><span class="sp1">5450 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>兰州石化</span><span class="sp2">均聚PP粒 T30S</span></p>
                    <p class="p2 "><span class="sp1">8100 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
            <div class="price_content" style="display:block;">
                <div class="content_block">
                    <p class="p1"><span>大庆石化</span><span class="sp2">HDPE 5000S</span></p>
                    <p class="p2 up"><span class="sp1">10200 </span><span class="sp2">50</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>大庆石化</span><span class="sp2">LDPE 18D</span></p>
                    <p class="p2 up"><span class="sp1">9900 </span><span class="sp2">100</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>独山子石化</span><span class="sp2">LLDPE 7042</span></p>
                    <p class="p2 "><span class="sp1">8950 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>四川金路</span><span class="sp2">PVC粉 SG-5</span></p>
                    <p class="p2 "><span class="sp1">5800 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
                <div class="content_block">
                    <p class="p1"><span>独山子石化</span><span class="sp2">共聚PP粒 K8003</span></p>
                    <p class="p2 "><span class="sp1">8700 </span><span class="sp2">平&nbsp;&nbsp;</span></p>
                </div>
            </div>
        </div>
        <div class="price_right">        
            <form target="_blank" name="form1" action="http://www.dce.com.cn/PublicWeb/MainServlet" method="post">
                <input type="hidden" name="action" value="Pu00011_result">
                <input name="Pu00011_Input.trade_date" type="hidden" value="20160825">
                <input id="variety" name="Pu00011_Input.variety" type="hidden" value="l">
                <input name="Pu00011_Input.trade_type" type="hidden" value="0">
        
                <div class="price_right_title">大商所期货行情</div>
                <a href="javascript:document.form1.variety.value='l';document.form1.submit();">
                <div class="heyue">
                    <p class="p1">LLDPE</p>
                    <!-- <p class="heyue_style">(1601合约)</p> -->
                </div>
                </a>
                <a class="mar_5" href="javascript:document.form1.variety.value='pp';document.form1.submit();">
                    <div class="heyue">
                        <p  class="p1">PP</p>
                        <!-- <p class="heyue_style">(1601合约)</p> -->
                    </div>
                </a>
                <a class="mar_5" href="javascript:document.form1.variety.value='v';document.form1.submit();">
                    <div class="heyue">
                        <p  class="p1">PVC</p>
                        <!-- <p class="heyue_style">(1601合约)</p> -->
                    </div>
                </a>
            </form>
        </div>
    </div>   
    <!--石化价格 end-->

    <!--1f start-->
<!--1f start-->
    <div id="new_onef" class="mar_t20 floor_flag">
    	<div class="new_onef_content">
        	<div class="new_f_title clearfix">
            	<div class="f_title_bg lt"><span class="fcolor_1">1F</span><h2 class="f_title_text">聚乙烯 PE</h2></div>
                <div class="f_title_tab">
                	<a class="selecd" href="javascript:void(0)">华南市场</a>
                    <a  href="javascript:void(0)">华东市场</a>
                </div>
            </div>
            <div class="new_f_content">
            	<div class="f_content_top">
                	<div class="content_top_cgxx">
                    	<h4 class="public_title">
                        	最新<a href="purchaseView/list@name=PE" class="fcolor_1">采购信息</a>
                        </h4>
                        <ul class="content_text_list">
                            <?php if(is_array($purchase)): $i = 0; $__LIST__ = $purchase;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <p class="sp_w85">
                                        <span class="sp1"><?php echo ($vo['varietyname']); ?> &nbsp;<?php echo ($vo['gradename']); ?></span>
                                        <span class="sp2"><?php echo ($vo['factoryname']); ?> &nbsp;<?php echo ($vo['quantity']); echo ($vo['unitname']); ?></span>
                                    </p>
                                    <p class="sp_w63">￥<?php echo ($vo['unitprice']); ?></p>
                                    <p class="sp_w60"><a href="javascript:void(0);" class="supply_button" data-id="<?php echo ($vo['orderid']); ?>_<?php echo ($vo['detailid']); ?>">我要供货</a></p>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>  
                        <ul class="content_text_list" style="display:none;">
                            <?php if(is_array($purchase)): $i = 0; $__LIST__ = $purchase;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <p class="sp_w85">
                                        <span class="sp1"><?php echo ($vo['varietyname']); ?> &nbsp;<?php echo ($vo['gradename']); ?></span>
                                        <span class="sp2"><?php echo ($vo['factoryname']); ?> &nbsp;<?php echo ($vo['quantity']); echo ($vo['unitname']); ?></span>
                                    </p>
                                    <p class="sp_w63">￥<?php echo ($vo['unitprice']); ?></p>
                                    <p class="sp_w60"><a href="javascript:void(0);" class="supply_button" data-id="<?php echo ($vo['orderid']); ?>_<?php echo ($vo['detailid']); ?>">我要供货</a></p>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>          
                    </div>
                    <div class="content_top_xhzy">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_1" href="product/list@cate=PE" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                       
                        <div class="content_public_list">
                            <table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
                                <?php if(is_array($supply)): $i = 0; $__LIST__ = $supply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr_37 open_link" data-cate="<?php echo ($vo['varietyname']); ?>" data-material="<?php echo ($vo['gradename']); ?>" data-manufacturer="<?php echo ($vo['factoryname']); ?>">
                                        <td class="td_w90"><span class="pz"><?php echo ($vo['varietyname']); ?></span></td>
                                        <td class="td_w85"><span class="ph"><?php echo ($vo['gradename']); ?></span></td>
                                        <td class="td_w125"><span class="cj"><?php echo ($vo['factoryname']); ?></span></td>
                                        <td class="fcolor_1 td_w85">￥<?php echo ($vo['unitprice']); ?></td>
                                        <td class=" td_w85"><?php echo ($vo['quantity']); ?></td>
                                        <td class="td_w90"><?php echo ($vo['deliveryplace']); ?></td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65"><?php echo ($vo['updatetime_d']); ?></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                        </div>
                    </div>
                    
                    <div class="content_top_xhzy" style="display:none;">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_1" href="product/list@cate=PE" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                       
                        <div class="content_public_list">
                            <table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
                                    <?php if(is_array($supply)): $i = 0; $__LIST__ = $supply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr_37 open_link" data-cate="<?php echo ($vo['varietyname']); ?>" data-material="<?php echo ($vo['gradename']); ?>" data-manufacturer="<?php echo ($vo['factoryname']); ?>">
                                        <td class="td_w90"><span class="pz"><?php echo ($vo['varietyname']); ?></span></td>
                                        <td class="td_w85"><span class="ph"><?php echo ($vo['gradename']); ?></span></td>
                                        <td class="td_w125"><span class="cj"><?php echo ($vo['factoryname']); ?></span></td>
                                        <td class="fcolor_1 td_w85">￥<?php echo ($vo['unitprice']); ?></td>
                                        <td class=" td_w85"><?php echo ($vo['quantity']); ?></td>
                                        <td class="td_w90"><?php echo ($vo['deliveryplace']); ?></td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65"><?php echo ($vo['updatetime_d']); ?></td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                        </div>
                    </div>
                    <div class="content_top_ddzt">
                    	<h4 class="public_title">
                        	<span class="fcolor_1">订单动态</span>
                        </h4>
                        <div class="mj_content">
                        	<table class="mj_table">
                            	<tr  class="tr_34 fcolor_6">
                                    <td class="td_w40">买家 </td>
                                    <td class="td_w84">采购摘要   </td>
                                    <td class="td_w84">交易状态 </td>
                                    <td class="td_w40">时间</td>
                                </tr>
                            </table>
                            <div class="mj_message_table purchase_scroll1">
                                <table>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">王**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>LDPE FT4119 北欧化工 24.75吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:39">17:39</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">徐**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>HDPE N125Y 马来大腾石化 85.95吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:38">17:38</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">兜**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>LDPE 2119 伊朗国家石化 100吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:27">17:27</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">林**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>HDPE BL3 伊朗国家石化 77吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:26">17:26</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">陆**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>HDPE DMDA8008 中石化福炼 10吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:22">17:22</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">叶**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>LLDPE DFDC-7050 中石化福炼 100吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:22">17:22</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">庄**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>HDPE 52518 伊朗国家石化 297吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:15">17:15</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">林**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>HDPE HD54404 伊朗国家石化 297吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 17:14">17:14</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">李**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>HDPE HF4760(BL3) 伊朗国家石化 306吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 16:53">16:53</td>
	                                   </tr>
	                                   <tr class="tr_30">
	                                        <td class="td_w40">戴**</td>
	                                        <td class="td_w84 fcolor_3 text_hide"><span>LLDPE DFDA-7042 延长榆能化 40吨 </span> </td>
	                                        <td class="td_w84 fcolor_1">交易成功</td>
	                                        <td class="td_w40" title="2016-08-26 16:52">16:52</td>
	                                   </tr>
                                </table> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f_content_bot">
                	<img class="gys_tj" src="/Public/pc/image/index/gys_tj02.png" alt="找塑料网供应商推荐" width="96" height="78"/>
	                    <a target="_blank" href="company/121842.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201606/90155bf1-350f-4e91-80d0-b78d1a5d6ce3.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/787.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/0083ff00-6a63-4567-b5df-0ea5277917e6.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/23552.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/edd0476b-3391-4bdd-903b-a15ef022ea93.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/108240.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/9451da09-4a88-469a-966c-158fe6172ea4.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/2770.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/8ba01702-96de-494c-8ba1-e3bd1da1c032.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/398.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/recomm/398.jpg" width="183" height="78"/></a>
                </div>
            </div>
        </div>
    </div>
<!--1f end-->    <!--1f end-->

    <!--2f start-->   
<!--2f start--> 
	<div id="new_twof" class="mar_t20 floor_flag">
		<div class="new_twof_content">
	    	<div class="new_f_title clearfix">
            	<div class="f_title_bg f_two_bg lt"><span class="fcolor_4">2F</span><h2 class="f_title_text">聚丙烯 PP</h2></div>
                <div class="f_title_tab">
                	<a class="selecd two_selecd" href="javascript:void(0)">华南市场</a>
                    <a class="two_noselecd" href="javascript:void(0)">华东市场</a>
                </div>
            </div>
            <div class="new_f_content top_color2">
            	<div class="f_content_top">
                	<div class="content_top_cgxx">
                    	<h4 class="public_title">
							最新<a href="purchaseView/list@name=PP" class="fcolor_4">采购信息</a>
						</h4>
                        <ul class="content_text_list">
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;S1003</span>
		                                    <span class="sp2">宁夏宝丰 &nbsp;200吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8200</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231210">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;S1003</span>
		                                    <span class="sp2">中石化茂名 &nbsp;15吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8320</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231195">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;K8003</span>
		                                    <span class="sp2">中石化茂名 &nbsp;20吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8100</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231189">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;PPH-T03</span>
		                                    <span class="sp2">中石化茂名 &nbsp;10吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8200</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231188">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;PPB-M09</span>
		                                    <span class="sp2">中石化茂名 &nbsp;10吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8450</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231184">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;T30S</span>
		                                    <span class="sp2">延炼 &nbsp;10吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8200</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231176">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PP &nbsp;S1003</span>
		                                    <span class="sp2">中石化茂名 &nbsp;10吨</span>
	                                	</p>
		                                <p class="sp_w63">￥8230</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231138">我要供货</a></p>
		                            </li>
                        </ul>
                        
                        <ul class="content_text_list" style="display:none;">
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;T30S</span>
	                                    <span class="sp2">宁波禾元化学  200吨</span>
	                                </p>
	                                <p class="sp_w63">￥8000</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231166">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;K8303</span>
	                                    <span class="sp2">中石化燕山  10吨</span>
	                                </p>
	                                <p class="sp_w63">￥10250</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231124">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;1120</span>
	                                    <span class="sp2">宁波台塑  20吨</span>
	                                </p>
	                                <p class="sp_w63">￥8850</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231121">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;L5E89</span>
	                                    <span class="sp2">中煤  100吨</span>
	                                </p>
	                                <p class="sp_w63">￥8100</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231098">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;S1003</span>
	                                    <span class="sp2">宁夏宝丰  100吨</span>
	                                </p>
	                                <p class="sp_w63">￥8100</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231096">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;T30S</span>
	                                    <span class="sp2">宁波禾元化学  100吨</span>
	                                </p>
	                                <p class="sp_w63">￥8120</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="231095">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PP &nbsp;T30S</span>
	                                    <span class="sp2">浙江三圆石化  30吨</span>
	                                </p>
	                                <p class="sp_w63">￥8100</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="two_a supply_button" data-id="230917">我要供货</a></p>
	                            </li>
                        </ul>
                    
                    </div>
                    <div class="content_top_xhzy">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_4" href="product/list@cate=PP" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                        <div class="content_public_list">
                         	<table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="PPH-T03" data-manufacturer="中石化北海">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">PPH-T03</span></td>
                                        <td class="td_w125"><span class="cj">中石化北海</span></td>
                                        <td class="fcolor_1 td_w85">￥8200</td>
                                        <td class=" td_w85">10</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="T30S" data-manufacturer="中石化湛江东兴">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">T30S</span></td>
                                        <td class="td_w125"><span class="cj">中石化湛江东兴</span></td>
                                        <td class="fcolor_1 td_w85">￥8200</td>
                                        <td class=" td_w85">20</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="PPM-T03" data-manufacturer="中石化湛江东兴">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">PPM-T03</span></td>
                                        <td class="td_w125"><span class="cj">中石化湛江东兴</span></td>
                                        <td class="fcolor_1 td_w85">￥8200</td>
                                        <td class=" td_w85">20</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="PPH-T03" data-manufacturer="中石化湛江东兴">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">PPH-T03</span></td>
                                        <td class="td_w125"><span class="cj">中石化湛江东兴</span></td>
                                        <td class="fcolor_1 td_w85">￥8200</td>
                                        <td class=" td_w85">20</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="J801" data-manufacturer="韩国晓星">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">J801</span></td>
                                        <td class="td_w125"><span class="cj">韩国晓星</span></td>
                                        <td class="fcolor_1 td_w85">￥9700</td>
                                        <td class=" td_w85">10</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="K8003" data-manufacturer="中石油独山子">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">K8003</span></td>
                                        <td class="td_w125"><span class="cj">中石油独山子</span></td>
                                        <td class="fcolor_1 td_w85">￥8200</td>
                                        <td class=" td_w85">10</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PP" data-material="V30G" data-manufacturer="中石化湛江东兴">
                                        <td class="td_w90"><span class="pz">PP</span></td>
                                        <td class="td_w85"><span class="ph">V30G</span></td>
                                        <td class="td_w125"><span class="cj">中石化湛江东兴</span></td>
                                        <td class="fcolor_1 td_w85">￥8200</td>
                                        <td class=" td_w85">10</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    <div class="content_top_xhzy" style="display:none;">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_4" href="product/list@cate=PP" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                       
                        <div class="content_public_list">
                         	<table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="5250T" data-manufacturer="台塑">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">5250T</span></td>
	                                        <td class="td_w125"><span class="cj">台塑</span></td>
                                         	<td class="fcolor_1 td_w85">￥11000</td>
                                        	<td class="td_w85">24</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="H4540" data-manufacturer="韩国现代">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">H4540</span></td>
	                                        <td class="td_w125"><span class="cj">韩国现代</span></td>
                                         	<td class="fcolor_1 td_w85">￥9600</td>
                                        	<td class="td_w85">24</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="H730F" data-manufacturer="韩国SK">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">H730F</span></td>
	                                        <td class="td_w125"><span class="cj">韩国SK</span></td>
                                         	<td class="fcolor_1 td_w85">￥10700</td>
                                        	<td class="td_w85">24</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="H870F" data-manufacturer="韩国SK">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">H870F</span></td>
	                                        <td class="td_w125"><span class="cj">韩国SK</span></td>
                                         	<td class="fcolor_1 td_w85">￥10400</td>
                                        	<td class="td_w85">25</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="1005" data-manufacturer="台湾永嘉">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">1005</span></td>
	                                        <td class="td_w125"><span class="cj">台湾永嘉</span></td>
                                         	<td class="fcolor_1 td_w85">￥9000</td>
                                        	<td class="td_w85">25</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="1040" data-manufacturer="台湾台塑">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">1040</span></td>
	                                        <td class="td_w125"><span class="cj">台湾台塑</span></td>
                                         	<td class="fcolor_1 td_w85">￥9670</td>
                                        	<td class="td_w85">31</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PP" data-material="1120D" data-manufacturer="台湾永嘉">
	                                        <td class="td_w90"><span class="pz">PP</span></td>
	                                        <td class="td_w85"><span class="ph">1120D</span></td>
	                                        <td class="td_w125"><span class="cj">台湾永嘉</span></td>
                                         	<td class="fcolor_1 td_w85">￥9200</td>
                                        	<td class="td_w85">30</td>
                                        	<td class="td_w90">华南华东配送</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">7小时前</td>
	                                    </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="content_top_ddzt">
                    	<h4 class="public_title">
                        	<span class="fcolor_4">订单动态</span>
                        </h4>
                        <div class="mj_content">
                        	<table class="mj_table">
                            	<tr class="tr_34 fcolor_6">
                                    <td class="td_w40">买家 </td>
                                    <td class="td_w84">采购摘要   </td>
                                    <td class="td_w84">交易状态 </td>
                                    <td class="td_w40">时间</td>
                                </tr>
                            </table>
                            <div class="mj_message_table purchase_scroll2">
                                <table>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">黎**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP S1003 宁夏宝丰 200吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 17:22">17:22</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">秦**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP K8003 中石化扬子 15吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 17:02">17:02</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">唐**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP S1003 中石化茂名 15吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 16:22">16:22</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">崔**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP K8003 中石化扬子 20吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 16:01">16:01</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">崔**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP K8003 中石化扬子 20吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:56">15:56</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">秦**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP EPS30R 延长榆能化 3吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:52">15:52</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">陆**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP T30S 延炼 6.5吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:49">15:49</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">郭**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP K8003 中石化茂名 20吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 15:48">15:48</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">梁**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP PPH-T03 中石化茂名 10吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 15:47">15:47</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">卢**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PP PPB-M09 中石化茂名 10吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:46">15:46</td>
		                                    </tr>
                                </table>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="f_content_bot">
                	<img class="gys_tj" src="/Public/pc/image/index/tj_03.jpg" alt="找塑料网供应商推荐" width="96" height="78"/>
	                    <a target="_blank" href="company/143687.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201604/61640b8a-0594-47c1-9ee0-ed6c1abe89b6.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/55681.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201604/efb82bac-4c03-4e6a-b33d-427352f9a607.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/328.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201507/58858210-7719-4efb-aa8c-06fe262f16a6.png" width="183" height="78"/></a>
	                    <a target="_blank" href="company/5030.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/8805ec32-cfe6-464f-8732-7f04cc9ae145.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/4829.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/871de69d-6ad3-4ad1-a484-56918a39515f.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/3641.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/940edb29-0cad-45cd-ac14-1d66b9fd5e70.jpg" width="183" height="78"/></a>
                </div>
            </div>
    	</div>
	</div>
<!--2f end-->    <!--2f end-->

    <!--3f start-->
<!--3f start-->
	<div id="new_threef" class="mar_t20 floor_flag">
		<div class="new_threef_content">
    		<div class="new_f_title clearfix">
            	<div class="f_title_bg f_three_bg lt"><span class="fcolor_5">3F</span><h2 class="f_title_text">聚氯乙烯 PVC</h2></div>
                <div class="f_title_tab">
                	<a class="selecd three_selecd" href="javascript:void(0)">华南市场</a>
                    <a class="three_noselecd" href="javascript:void(0)">华东市场</a>
                </div>
            </div>
            <div class="new_f_content top_color3">
            	<div class="f_content_top">
                	<div class="content_top_cgxx">
                    	<h4 class="public_title">
                        	最新<a href="purchaseView/list@name=PVC" class="fcolor_5">采购信息</a>
                        </h4>
                        <ul class="content_text_list">
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-5</span>
		                                    <span class="sp2">新疆圣雄能源 &nbsp;30吨</span>
	                                	</p>
		                                <p class="sp_w63">￥5550</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231206">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-5</span>
		                                    <span class="sp2">新疆中泰 &nbsp;30吨</span>
	                                	</p>
		                                <p class="sp_w63">￥6060</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231203">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-5</span>
		                                    <span class="sp2">内蒙天湖 &nbsp;28.25吨</span>
	                                	</p>
		                                <p class="sp_w63">￥6080</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231202">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-8</span>
		                                    <span class="sp2">新疆天辰 &nbsp;15吨</span>
	                                	</p>
		                                <p class="sp_w63">￥6200</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231183">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-5</span>
		                                    <span class="sp2">新疆中泰 &nbsp;30吨</span>
	                                	</p>
		                                <p class="sp_w63">￥6080</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231182">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-5</span>
		                                    <span class="sp2">新疆圣雄能源 &nbsp;30吨</span>
	                                	</p>
		                                <p class="sp_w63">￥6000</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231180">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">PVC &nbsp;SG-5</span>
		                                    <span class="sp2">新疆圣雄能源 &nbsp;30吨</span>
	                                	</p>
		                                <p class="sp_w63">￥6040</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231169">我要供货</a></p>
		                            </li>
                        </ul>
                        <ul class="content_text_list" style="display:none;">
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">内蒙古君正（老）  28吨</span>
	                                </p>
	                                <p class="sp_w63">￥5950</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231123">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">内蒙古君正（新）  20吨</span>
	                                </p>
	                                <p class="sp_w63">￥5940</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231119">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">新疆圣雄能源  40吨</span>
	                                </p>
	                                <p class="sp_w63">￥5900</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231118">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">新疆圣雄能源  40吨</span>
	                                </p>
	                                <p class="sp_w63">￥5900</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231115">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">湖北宜化  40吨</span>
	                                </p>
	                                <p class="sp_w63">￥5940</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231111">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">宜宾天原  40吨</span>
	                                </p>
	                                <p class="sp_w63">￥6000</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231101">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">PVC &nbsp;SG-5</span>
	                                    <span class="sp2">新疆天业  40吨</span>
	                                </p>
	                                <p class="sp_w63">￥6000</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="three_a supply_button" data-id="231100">我要供货</a></p>
	                            </li>
                        </ul>
                    
                    </div>
                    <div class="content_top_xhzy">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_5" href="product/list@cate=PVC" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                        <div class="content_public_list">
                         	<table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="DG-700" data-manufacturer="天津大沽化工">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">DG-700</span></td>
	                                        <td class="td_w125"><span class="cj">天津大沽化工</span></td>
	                                        <td class="fcolor_1 td_w85">￥6200</td>
	                                        <td class="td_w85">50</td>
	                                        <td class="td_w90">乐从</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">5小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="S-60(粉）" data-manufacturer="宁波台塑">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">S-60(粉）</span></td>
	                                        <td class="td_w125"><span class="cj">宁波台塑</span></td>
	                                        <td class="fcolor_1 td_w85">￥6500</td>
	                                        <td class="td_w85">50</td>
	                                        <td class="td_w90">乐从</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">5小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="s-60" data-manufacturer="宁波台塑">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">s-60</span></td>
	                                        <td class="td_w125"><span class="cj">宁波台塑</span></td>
	                                        <td class="fcolor_1 td_w85">￥7800</td>
	                                        <td class="td_w85">20</td>
	                                        <td class="td_w90">乐从</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">5小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="DG-700" data-manufacturer="天津大沽化工">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">DG-700</span></td>
	                                        <td class="td_w125"><span class="cj">天津大沽化工</span></td>
	                                        <td class="fcolor_1 td_w85">￥6000</td>
	                                        <td class="td_w85">50</td>
	                                        <td class="td_w90">东莞</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">8小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="鄂尔多斯">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">鄂尔多斯</span></td>
	                                        <td class="fcolor_1 td_w85">￥5650</td>
	                                        <td class="td_w85">50</td>
	                                        <td class="td_w90">东莞</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">8小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="新疆圣雄能源">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">新疆圣雄能源</span></td>
	                                        <td class="fcolor_1 td_w85">￥5600</td>
	                                        <td class="td_w85">20</td>
	                                        <td class="td_w90">东莞</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">8小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="DG-1000" data-manufacturer="天津大沽化工">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">DG-1000</span></td>
	                                        <td class="td_w125"><span class="cj">天津大沽化工</span></td>
	                                        <td class="fcolor_1 td_w85">￥6200</td>
	                                        <td class="td_w85">50</td>
	                                        <td class="td_w90">东莞</td>
	                                        <td class="td_w85">现货</td>
	                                        <td class="td_w65">11小时前</td>
	                                    </tr>
                            </table>
                        </div>
                    </div>
                    
                     <div class="content_top_xhzy" style="display:none;">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_5" href="product/list@cate=PVC" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                       
                        <div class="content_public_list">
                         	<table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="天湖">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">天湖</span></td>
                                         	<td class="fcolor_1 td_w85">￥6020</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">金华</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="天湖">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">天湖</span></td>
                                         	<td class="fcolor_1 td_w85">￥6000</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">浦江</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-8" data-manufacturer="北元">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-8</span></td>
	                                        <td class="td_w125"><span class="cj">北元</span></td>
                                         	<td class="fcolor_1 td_w85">￥6250</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">杭州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="天辰">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">天辰</span></td>
                                         	<td class="fcolor_1 td_w85">￥6020</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">杭州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-3" data-manufacturer="天湖">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-3</span></td>
	                                        <td class="td_w125"><span class="cj">天湖</span></td>
                                         	<td class="fcolor_1 td_w85">￥6320</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">杭州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="天湖">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">天湖</span></td>
                                         	<td class="fcolor_1 td_w85">￥6020</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">杭州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PVC" data-material="SG-5" data-manufacturer="东兴">
	                                        <td class="td_w90"><span class="pz">PVC</span></td>
	                                        <td class="td_w85"><span class="ph">SG-5</span></td>
	                                        <td class="td_w125"><span class="cj">东兴</span></td>
                                         	<td class="fcolor_1 td_w85">￥6020</td>
                                        	<td class="td_w85">100</td>
                                        	<td class="td_w90">杭州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">11小时前</td>
	                                    </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="content_top_ddzt">
                    	<h4 class="public_title">
                        	<span class="fcolor_5">订单动态</span>
                        </h4>
                        <div class="mj_content">
                        	<table class="mj_table">
                            	<tr class="tr_34 fcolor_6">
                                    <td class="td_w40">买家 </td>
                                    <td class="td_w84">采购摘要   </td>
                                    <td class="td_w84">交易状态 </td>
                                    <td class="td_w40">时间</td>
                                </tr>
                            </table>
                            <div class="mj_message_table purchase_scroll3">
                                 <table>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">何**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 新疆圣雄能源 30吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 17:05">17:05</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">张**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 新疆中泰 30吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 16:56">16:56</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">严**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 内蒙天湖 28.25吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 16:56">16:56</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">王**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 内蒙天湖 140吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 16:54">16:54</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">姚**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 新疆中泰 400吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 16:53">16:53</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">陈**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-8 新疆天辰 15吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:45">15:45</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">章**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 新疆中泰 30吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 15:43">15:43</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">刘**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 新疆圣雄能源 30吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 15:41">15:41</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">谢**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 内蒙古君正（老） 100吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:35">15:35</td>
		                                   </tr>
		                                   <tr class="tr_30">
		                                        <td class="td_w40">谢**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PVC SG-5 新疆中泰 100吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:13">15:13</td>
		                                   </tr>
                                </table>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="f_content_bot">
                	<img class="gys_tj" src="/Public/pc/image/index/gys_tj03.png" alt="找塑料网供应商推荐" width="96" height="78"/>
	                    <a target="_blank" href="company/1039.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201603/721de1c2-75c2-4a33-b709-a5c28583d7dd.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/71819.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201604/aabfe6ac-f165-44b7-870f-ca53081ab73a.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/9282.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201603/eef82f93-0fab-437c-89c3-8d47a9484a15.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/39738.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201603/221741df-a479-4107-96fa-5777abfa1f6e.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/141796.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201603/faccfbd8-f428-44a9-83cf-f13cc24693b5.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/793.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/recomm/793.jpg" width="183" height="78"/></a>
                </div>
            </div>
    	</div>
	</div>
<!--3f end-->    <!--3f end-->

    <!--4f start-->
<!--4f start-->

<div id="new_fourf" class="mar_t20 floor_flag">
	<div class="new_fourf_content">
    		<div class="new_f_title clearfix">
            	<div class="f_title_bg f_four_bg lt"><span class="fcolor_7">4F</span><h2 class="f_title_text">其它</h2></div>
                <div class="f_title_tab">
                	<a class="selecd four_selecd" href="javascript:void(0)">华南市场</a>
                    <a class="four_noselecd" href="javascript:void(0)">华东市场</a>
                </div>
            </div>
            <div class="new_f_content top_color4">
            	<div class="f_content_top">
                	<div class="content_top_cgxx">
                    	<h4 class="public_title">
                        	最新<a href="purchase" class="fcolor_7">采购信息</a>
                        </h4>
                        <ul class="content_text_list">
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">ABS &nbsp;PA-757</span>
		                                    <span class="sp2">台湾奇美 &nbsp;2吨</span>
	                                	</p>
		                                <p class="sp_w63">￥12050</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231204">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">ABS &nbsp;HI-121H</span>
		                                    <span class="sp2">宁波LG &nbsp;10吨</span>
	                                	</p>
		                                <p class="sp_w63">￥11100</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231186">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">ABS &nbsp;275</span>
		                                    <span class="sp2">盘锦乙烯 &nbsp;30吨</span>
	                                	</p>
		                                <p class="sp_w63">￥9700</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231178">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">ABS &nbsp;275</span>
		                                    <span class="sp2">盘锦乙烯 &nbsp;20吨</span>
	                                	</p>
		                                <p class="sp_w63">￥9750</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231175">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">ABS &nbsp;AG15E1</span>
		                                    <span class="sp2">宁波台化 &nbsp;18吨</span>
	                                	</p>
		                                <p class="sp_w63">￥11300</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231141">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">ABS &nbsp;PA-757</span>
		                                    <span class="sp2">台湾奇美 &nbsp;20吨</span>
	                                	</p>
		                                <p class="sp_w63">￥11850</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231132">我要供货</a></p>
		                            </li>
		                            <li>
		                            	<p class="sp_w85">
		                                    <span class="sp1">GPPS &nbsp;PG-33</span>
		                                    <span class="sp2">镇江奇美 &nbsp;19吨</span>
	                                	</p>
		                                <p class="sp_w63">￥9450</p>
		                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231131">我要供货</a></p>
		                            </li>
                        </ul>
                        <ul class="content_text_list" style="display:none;">
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;920</span>
	                                    <span class="sp2">日本东丽  10吨</span>
	                                </p>
	                                <p class="sp_w63">￥15000</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231080">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;HI-121H</span>
	                                    <span class="sp2">宁波LG  50吨</span>
	                                </p>
	                                <p class="sp_w63">￥11200</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231078">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;700-314</span>
	                                    <span class="sp2">马来西亚东丽  20吨</span>
	                                </p>
	                                <p class="sp_w63">￥10700</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231077">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;PA-757</span>
	                                    <span class="sp2">台湾奇美  100吨</span>
	                                </p>
	                                <p class="sp_w63">￥11500</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="231072">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;TR-557I</span>
	                                    <span class="sp2">韩国LG  20吨</span>
	                                </p>
	                                <p class="sp_w63">￥14300</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="230900">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;TR-558AI</span>
	                                    <span class="sp2">韩国LG  40吨</span>
	                                </p>
	                                <p class="sp_w63">￥14300</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="230899">我要供货</a></p>
	                            </li>
	                            <li>
	                                <p class="sp_w85">
	                                    <span class="sp1">ABS &nbsp;0215A</span>
	                                    <span class="sp2">中石油吉化  30吨</span>
	                                </p>
	                                <p class="sp_w63">￥11000</p>
	                                <p class="sp_w60"><a href="javascript:void(0);" class="four_a supply_button" data-id="230827">我要供货</a></p>
	                            </li>
                        </ul>
                    </div>
                    <div class="content_top_xhzy">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_7" href="product" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                       
                        <div class="content_public_list">
                         	<table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
                                    <tr class="tr_37 open_link" data-cate="PC" data-material="7022J" data-manufacturer="日本三菱工程">
                                        <td class="td_w90"><span class="pz">PC</span></td>
                                        <td class="td_w85"><span class="ph">7022J</span></td>
                                        <td class="td_w125"><span class="cj">日本三菱工程</span></td>
                                        <td class="fcolor_1 td_w85">￥15800</td>
                                        <td class="td_w85">10</td>
                                        <td class="td_w90">东莞</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="GPPS" data-material="PG33" data-manufacturer="镇江奇美">
                                        <td class="td_w90"><span class="pz">GPPS</span></td>
                                        <td class="td_w85"><span class="ph">PG33</span></td>
                                        <td class="td_w125"><span class="cj">镇江奇美</span></td>
                                        <td class="fcolor_1 td_w85">￥9150</td>
                                        <td class="td_w85">10</td>
                                        <td class="td_w90">乐从</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PC" data-material="PC1100" data-manufacturer="韩国乐天化学">
                                        <td class="td_w90"><span class="pz">PC</span></td>
                                        <td class="td_w85"><span class="ph">PC1100</span></td>
                                        <td class="td_w125"><span class="cj">韩国乐天化学</span></td>
                                        <td class="fcolor_1 td_w85">￥16200</td>
                                        <td class="td_w85">100</td>
                                        <td class="td_w90">乐从</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="GPPS" data-material="525" data-manufacturer="中石化广州">
                                        <td class="td_w90"><span class="pz">GPPS</span></td>
                                        <td class="td_w85"><span class="ph">525</span></td>
                                        <td class="td_w125"><span class="cj">中石化广州</span></td>
                                        <td class="fcolor_1 td_w85">￥8450</td>
                                        <td class="td_w85">10</td>
                                        <td class="td_w90">乐从</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">5小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PA6" data-material="K224-G8 BK" data-manufacturer="荷兰DSM">
                                        <td class="td_w90"><span class="pz">PA6</span></td>
                                        <td class="td_w85"><span class="ph">K224-G8 BK</span></td>
                                        <td class="td_w125"><span class="cj">荷兰DSM</span></td>
                                        <td class="fcolor_1 td_w85">￥20000</td>
                                        <td class="td_w85">5</td>
                                        <td class="td_w90">广州市</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">6小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PA6" data-material="B30S" data-manufacturer="德国巴斯夫">
                                        <td class="td_w90"><span class="pz">PA6</span></td>
                                        <td class="td_w85"><span class="ph">B30S</span></td>
                                        <td class="td_w125"><span class="cj">德国巴斯夫</span></td>
                                        <td class="fcolor_1 td_w85">￥16300</td>
                                        <td class="td_w85">10</td>
                                        <td class="td_w90">深圳</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">6小时前</td>
                                    </tr>
                                    <tr class="tr_37 open_link" data-cate="PA6" data-material="1010C2" data-manufacturer="日本三菱工程">
                                        <td class="td_w90"><span class="pz">PA6</span></td>
                                        <td class="td_w85"><span class="ph">1010C2</span></td>
                                        <td class="td_w125"><span class="cj">日本三菱工程</span></td>
                                        <td class="fcolor_1 td_w85">￥17500</td>
                                        <td class="td_w85">18</td>
                                        <td class="td_w90">惠州</td>
                                        <td class="td_w85">现货</td>
                                        <td class="td_w65">6小时前</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="content_top_xhzy" style="display:none;">
                        <div class="public_title2 clearfix">
                            <h4><a class="fcolor_7" href="product" title="点击查看更多现货资源">更多现货资源&gt;&gt;</a></h4>
                        </div>
                       
                        <div class="content_public_list">
                         	<table class="public_list_message">
                                <tr class="tr_37  fcolor_6 bg_f8">
                                    <td class="td_w90">品种 </td>
                                    <td class="td_w85">牌号</td>
                                    <td class="td_w125">厂家</td>
                                    <td class="td_w85">价格/吨</td>
                                    <td class="td_w85">数量（吨）</td>
                                    <td class="td_w90">交货地 </td>
                                    <td class="td_w85">交货时间</td>
                                    <td class="td_w65">更新时间 </td>
                                </tr>
	                                    <tr class="tr_37 open_link" data-cate="PMMA" data-material="8N" data-manufacturer="上海赢创德固赛">
	                                        <td class="td_w90"><span class="pz">PMMA</span></td>
	                                        <td class="td_w85"><span class="ph">8N</span></td>
	                                        <td class="td_w125"><span class="cj">上海赢创德固赛</span></td>
                                         	<td class="fcolor_1 td_w85">￥19100</td>
                                        	<td class="td_w85">8</td>
                                        	<td class="td_w90">苏州市</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PBT" data-material="4130-104F" data-manufacturer="漳州长春">
	                                        <td class="td_w90"><span class="pz">PBT</span></td>
	                                        <td class="td_w85"><span class="ph">4130-104F</span></td>
	                                        <td class="td_w125"><span class="cj">漳州长春</span></td>
                                         	<td class="fcolor_1 td_w85">￥18600</td>
                                        	<td class="td_w85">2</td>
                                        	<td class="td_w90">苏州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PBT" data-material="4820 NCB" data-manufacturer="漳州长春">
	                                        <td class="td_w90"><span class="pz">PBT</span></td>
	                                        <td class="td_w85"><span class="ph">4820 NCB</span></td>
	                                        <td class="td_w125"><span class="cj">漳州长春</span></td>
                                         	<td class="fcolor_1 td_w85">￥15000</td>
                                        	<td class="td_w85">2</td>
                                        	<td class="td_w90">苏州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PBT" data-material="4830 BKF" data-manufacturer="漳州长春">
	                                        <td class="td_w90"><span class="pz">PBT</span></td>
	                                        <td class="td_w85"><span class="ph">4830 BKF</span></td>
	                                        <td class="td_w125"><span class="cj">漳州长春</span></td>
                                         	<td class="fcolor_1 td_w85">￥14200</td>
                                        	<td class="td_w85">2</td>
                                        	<td class="td_w90">苏州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PBT" data-material="4815 BKF" data-manufacturer="漳州长春">
	                                        <td class="td_w90"><span class="pz">PBT</span></td>
	                                        <td class="td_w85"><span class="ph">4815 BKF</span></td>
	                                        <td class="td_w125"><span class="cj">漳州长春</span></td>
                                         	<td class="fcolor_1 td_w85">￥16600</td>
                                        	<td class="td_w85">2</td>
                                        	<td class="td_w90">苏州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PBT" data-material="4815 NCF" data-manufacturer="漳州长春">
	                                        <td class="td_w90"><span class="pz">PBT</span></td>
	                                        <td class="td_w85"><span class="ph">4815 NCF</span></td>
	                                        <td class="td_w125"><span class="cj">漳州长春</span></td>
                                         	<td class="fcolor_1 td_w85">￥16500</td>
                                        	<td class="td_w85">2</td>
                                        	<td class="td_w90">苏州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
	                                    <tr class="tr_37 open_link" data-cate="PC/ABS" data-material="GN5001RFD" data-manufacturer="广州LG">
	                                        <td class="td_w90"><span class="pz">PC/ABS</span></td>
	                                        <td class="td_w85"><span class="ph">GN5001RFD</span></td>
	                                        <td class="td_w125"><span class="cj">广州LG</span></td>
                                         	<td class="fcolor_1 td_w85">￥17000</td>
                                        	<td class="td_w85">4</td>
                                        	<td class="td_w90">苏州</td>
                                        	<td class="td_w85">现货</td>
                                        	<td class="td_w65">6小时前</td>
	                                    </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="content_top_ddzt">
                    	<h4 class="public_title">
                        	<span class="fcolor_7">订单动态</span>
                        </h4>
                        <div class="mj_content">
                        	<table class="mj_table">
                            	<tr class="tr_34 fcolor_6">
                                    <td class="td_w40">买家 </td>
                                    <td class="td_w84">采购摘要   </td>
                                    <td class="td_w84">交易状态 </td>
                                    <td class="td_w40">时间</td>
                                </tr>
                            </table>
                            <div class="mj_message_table purchase_scroll4">
                                <table>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">叶**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS HI-121H 宁波LG 76吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 17:21">17:21</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">徐**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS PA-757 台湾奇美 2吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 16:57">16:57</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">陈**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>PC PC-110 台湾奇美 120吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:48">15:48</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">梁**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS HI-121H 宁波LG 10吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:46">15:46</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">夏**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS 275 盘锦乙烯 30吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 15:33">15:33</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">蔡**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS 275 盘锦乙烯 20吨 </span> </td>
		                                        <td class="td_w84 ">正在洽谈</td>
		                                        <td class="td_w40" title="2016-08-26 15:31">15:31</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">谢**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>DOTP DOTP 惠州盛和 30吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 15:17">15:17</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">叶**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS 275 辽宁华锦化工 90吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 14:28">14:28</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">鲁**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS HI-121 宁波LG 80吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 12:03">12:03</td>
		                                    </tr>
		                                    <tr class="tr_30">
		                                        <td class="td_w40">毛**</td>
		                                        <td class="td_w84 fcolor_3 text_hide"><span>ABS PA-757 台湾奇美 80吨 </span> </td>
		                                        <td class="td_w84 fcolor_1">交易成功</td>
		                                        <td class="td_w40" title="2016-08-26 11:54">11:54</td>
		                                    </tr>
                                </table>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="f_content_bot">
                	<img class="gys_tj" src="/Public/pc/image/index/gys_04.jpg" alt="找塑料网供应商推荐" width="96" height="78"/>
	                    <a target="_blank" href="company/1932.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201604/cf52b7ce-4967-4863-ae0a-b10a4c219f33.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/144570.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201604/a1b1f4e7-df55-4a41-bb08-b5b1de5399b7.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/121185.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201604/fdef7828-4439-4ffd-bba3-0bc92154b045.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/45817.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201602/a75345d7-48c3-43d8-ac1d-fce5311b3659.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/6099.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201509/e69b557b-bebb-4845-a4ab-4d8e9c47c765.jpg" width="183" height="78"/></a>
	                    <a target="_blank" href="company/350.html"><img alt="找塑料网供应商推荐" src="/Public/pc/upload/memberRecommend/201506/c339b555-02ea-44c1-992c-b60790d38c78.jpg" width="183" height="78"/></a>
                </div>
            </div>
    	</div>
	</div>

<!--4f end-->    <!--4f end-->

    <!--资讯动态 satr-->
<!--行情中心 satr-->
	<div id="new_fivef" class="center_wrap floor_flag">
		<div class="new_f_title clearfix">
			<div class="f_title_bg f_four_bg lt"><span class="fcolor_8">5F</span><h2 class="f_title_text"><a href="../hq.zhaosuliao.com/default.htm" title="行情中心" target="_blank">行情中心</a></h2></div>
        	<a href="../hq.zhaosuliao.com/default.htm" class="fr fcolor_8" title="行情中心" target="_blank" style="margin-top:16px;">进入行情中心&gt;&gt;</a>
        </div>
        <div class="wrap">
        	<div class="box1">
        		<div class="img_div"  >
		            <ul class="img_list">
		                <li><a href="../hq.zhaosuliao.com/pe/pedybg/21028.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）"><img src="/Public/pc/upload/gallery/201608/fe9945eb-d3cb-40d4-9375-516a550ff11a.png" width="500" height="240" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）" alt="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）" /></a></li>
		                <li><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21039.html" target="_blank" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹"><img src="/Public/pc/upload/gallery/201608/738e8e1b-8b4e-4c11-ac99-3be39dd6ede4.jpg" width="500" height="240" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹" alt="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹" /></a></li>
		                <li><a href="../hq.zhaosuliao.com/ppl/pplqwzl/20234.html" target="_blank" title="【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）"><img src="/Public/pc/upload/gallery/201608/1aeeb1ee-fc64-43d0-8c3c-a4ac93d498ee.png" width="500" height="240" title="【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）" alt="【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）" /></a></li>
		            </ul>
                		<p class="text"><a href="../hq.zhaosuliao.com/pe/pedybg/21028.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）">中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）</a></p>              
                		              
                		              
		            <p class="dot">
                		<a href="javascript:void(0);" class="on">1</a>
                		<a href="javascript:void(0);">2</a>
                		<a href="javascript:void(0);">3</a>
		            </p>
		            
		            <a href="javascript:void(0);" class="prev"></a>
		            <a href="javascript:void(0);" class="next"></a>
		        </div>
		        <p class="box_title">&nbsp;&nbsp;&nbsp;<a href="../hq.zhaosuliao.com/default.htm" target="_blank">塑料<span class="fcolor_8">头条</span></a></p>
		        <ul class="text_list mar_t10">
		        	<li class="first"><i class="ico">•</i><span class="time">[14:55]</span><a href="../hq.zhaosuliao.com/pe/pedybg/21028.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）">中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）</a></li>
		        	<li><i class="ico">•</i><span class="time">[17:50]</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21044.html" target="_blank" title="【价差分析】PP现货＆期货：基差小幅调整">【价差分析】PP现货＆期货：基差小幅调整</a></li>
		        	<li><i class="ico">•</i><span class="time">[17:03]</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21042.html" target="_blank" title="【下游分析】PP下游开工降低，BOPP最为明显">【下游分析】PP下游开工降低，BOPP最为明显</a></li>
		        	<li><i class="ico">•</i><span class="time">[16:57]</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21041.html" target="_blank" title="【产量估算】PP检修较多，产量继续下降">【产量估算】PP检修较多，产量继续下降</a></li>
		        	<li><i class="ico">•</i><span class="time">[16:40]</span><a href="../hq.zhaosuliao.com/pvc/pvcqwzl/21040.html" target="_blank" title="【产量估算】本周PVC产量较上周略有下降">【产量估算】本周PVC产量较上周略有下降</a></li>
		        	<li><i class="ico">•</i><span class="time">[16:32]</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21039.html" target="_blank" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹">【宏观塑评】伊朗参会欧佩克 国际油价迎反弹</a></li>
		        	<li><i class="ico">•</i><span class="time">[15:57]</span><a href="../hq.zhaosuliao.com/pe/peqwzl/21036.html" target="_blank" title="【价差分析】PE现货＆期货：基差由强转弱">【价差分析】PE现货＆期货：基差由强转弱</a></li>
		        </ul>
        	</div>
        	<div class="box2">
        		<p class="box_title">&nbsp;&nbsp;&nbsp;<a href="../hq.zhaosuliao.com/hqzb.html" target="_blank">行情<span class="fcolor_8">直播</span></a></p>
        		<ul class="text_list">
                <li><span class="time">17:03:14</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21042.html" title="本周国内聚丙烯下游行业明显回落，其中塑编开行业工率在55%，共聚注塑开工率在50%左右，BOPP开工率在56%。" target="_blank" class="intercept_text">本周国内聚丙烯下游行业明显回落，其中塑编开行业工率在55%，共聚注塑开工率在50%左右，BOPP开工率在56%。</a></li>
                <li><span class="time">16:57:55</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21041.html" title="本周国内产量约29.5万吨，环比下降1%。其中拉丝产量约9.5万吨，占比32.27%，环比减少5%；共聚注塑产量3.8万吨，占比13%，环比持平。" target="_blank" class="intercept_text">本周国内产量约29.5万吨，环比下降1%。其中拉丝产量约9.5万吨，占比32.27%，环比减少5%；共聚注塑产量3.8万吨，占比13%，环比持平。</a></li>
                <li><span class="time">16:40:33</span><a href="../hq.zhaosuliao.com/pvc/pvcqwzl/21040.html" title="本周PVC企业开工率略有下调，内蒙宜化8月19日晚开始检修计划检修一周，信发装置停一条线，其他企业暂稳为主，故本周产量较上周略有下跌。" target="_blank" class="intercept_text">本周PVC企业开工率略有下调，内蒙宜化8月19日晚开始检修计划检修一周，信发装置停一条线，其他企业暂稳为主，故本周产量较上周略有下跌。</a></li>
                <li><span class="time">16:32:17</span><a href="../hq.zhaosuliao.com/ppl/pplqwzl/21039.html" title="OPEC第三大产油国伊朗已经确定，将参加在阿尔及利亚召开的OPEC会议。此前四月的冻产会议伊朗没有参加，最后无果而终。在9月底的会议上，OPEC有可能会重启冻产谈判。" target="_blank" class="intercept_text">OPEC第三大产油国伊朗已经确定，将参加在阿尔及利亚召开的OPEC会议。此前四月的冻产会议伊朗没有参加，最后无果而终。在9月底的会议上，OPEC有可能会重启冻产谈判。</a></li>
                <li><span class="time">16:19:52</span><a href="../hq.zhaosuliao.com/pe/pesccjjc/21037.html" title="下午濮阳PE市场报价窄幅盘整。有贸易商表示，尽管上午中石化华中上调LLDPE出厂价，但是下游厂家询盘气氛一般，贸易商高价出货不畅。市场参考报价：7050报9200元/吨左右。" target="_blank" class="intercept_text">下午濮阳PE市场报价窄幅盘整。有贸易商表示，尽管上午中石化华中上调LLDPE出厂价，但是下游厂家询盘气氛一般，贸易商高价出货不畅。市场参考报价：7050报9200元/吨左右。</a></li>
                <li><span class="time">15:57:14</span><a href="../hq.zhaosuliao.com/pe/peqwzl/21036.html" title="【价差分析】PE现货＆期货基差由强转弱。预计短线LLDPE1701合约继续上涨空间有限，对现货市场利好支撑不足。" target="_blank" class="intercept_text">【价差分析】PE现货＆期货基差由强转弱。预计短线LLDPE1701合约继续上涨空间有限，对现货市场利好支撑不足。</a></li>
        		</ul>
        		<a href="../hq.zhaosuliao.com/hqzb.html" target="_blank" class="btn">进入直播室</a>
        	</div>
        	<div class="box3">
        		<p class="box_title">&nbsp;&nbsp;&nbsp;<a href="../hq.zhaosuliao.com/zzrl.html" target="_blank" class="btn">装置<span class="fcolor_8">日历</span></a></p>
        		<div class="list_div" id="device_list">
        			<div class="title">
                        		<a href="javascript:;" class="s">23</a>
                        		<a href="javascript:;" class="s">24</a>
                        		<a href="javascript:;" class="s">25</a>
                        		<a href="javascript:;" class="s on">今天</a>
                        		<a href="javascript:;" class="s">27</a>
                        		<a href="javascript:;" class="s">28</a>
                        		<a href="javascript:;" class="s">29</a>
        			</div>
                        <div class="content" style="display:none">
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工">沈阳化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。">沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_25BA_2586_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="大庆炼化">大庆炼化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_25BA_2586_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="大庆炼化PP老装置（30万吨/年）7月20日晚间开始停车检修，部分炼油装置尚未运转正常，本周开车计划或将再度搁置；新装置（30万吨/年）生产HP500P。">大庆炼化PP老装置（30万吨/年）7月20日晚间开始停车检修，部分炼油装置尚未运转正常，本周开车计划或将再度搁置；新装置（30万吨/年）生产HP500P。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合">福建联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合PP老装置（12万吨/年）7月18日起生产T30S；新装置一线（33万吨/年）8月8日起停车检修中，具体时间待定；新二线（22万吨/年）8月2日起生产1100N。目前厂家库存不高，销售情况正常。">福建联合PP老装置（12万吨/年）7月18日起生产T30S；新装置一线（33万吨/年）8月8日起停车检修中，具体时间待定；新二线（22万吨/年）8月2日起生产1100N。目前厂家库存不高，销售情况正常。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_25B2_25B3_25E5_258C_2597_25E6_25B5_25B7_25E4_25BC_259F_0_0_0_0_0.html" target="_blank" title="河北海伟">河北海伟</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_25B2_25B3_25E5_258C_2597_25E6_25B5_25B7_25E4_25BC_259F_0_0_0_0_0.html" target="_blank" title="河北海伟PP装置（30万吨/年）8月22日起停车检修，开车日期待定。">河北海伟PP装置（30万吨/年）8月22日起停车检修，开车日期待定。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化">扬子石化</a>
                                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。">扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合">福建联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合PP老装置（12万吨/年）7月18日起生产T30S；新装置一线（33万吨/年）8月8日起停车检修中，具体时间待定；新二线（22万吨/年）8月2日起生产1100N。目前厂家库存不高，销售情况正常。">福建联合PP老装置（12万吨/年）7月18日起生产T30S；新装置一线（33万吨/年）8月8日起停车检修中，具体时间待定；新二线（22万吨/年）8月2日起生产1100N。目前厂家库存不高，销售情况正常。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_2594_2590_25E5_25A4_259A_25E4_25BC_25A6_25E7_2585_25A4_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="大唐多伦煤化工">大唐多伦煤化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_2594_2590_25E5_25A4_259A_25E4_25BC_25A6_25E7_2585_25A4_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="大唐多伦煤化工PP装置两条线（46万吨/年），5月10日起停车检修，开车时间待定。">大唐多伦煤化工PP装置两条线（46万吨/年），5月10日起停车检修，开车时间待定。</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content" style="display:none">
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工">沈阳化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。">沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_25BA_2586_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="大庆炼化">大庆炼化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_25BA_2586_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="大庆炼化PP老装置（30万吨/年）7月20日晚间开始停车检修，部分炼油装置尚未运转正常，本周开车计划或将再度搁置；新装置（30万吨/年）生产HP500P。">大庆炼化PP老装置（30万吨/年）7月20日晚间开始停车检修，部分炼油装置尚未运转正常，本周开车计划或将再度搁置；新装置（30万吨/年）生产HP500P。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合">福建联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合PP老装置（12万吨/年）7月18日起生产T30S；新装置一线（33万吨/年）8月8日起停车检修中，具体时间待定；新二线（22万吨/年）8月2日起生产1100N。目前厂家库存不高，销售情况正常。">福建联合PP老装置（12万吨/年）7月18日起生产T30S；新装置一线（33万吨/年）8月8日起停车检修中，具体时间待定；新二线（22万吨/年）8月2日起生产1100N。目前厂家库存不高，销售情况正常。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_25B2_25B3_25E5_258C_2597_25E6_25B5_25B7_25E4_25BC_259F_0_0_0_0_0.html" target="_blank" title="河北海伟">河北海伟</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_25B2_25B3_25E5_258C_2597_25E6_25B5_25B7_25E4_25BC_259F_0_0_0_0_0.html" target="_blank" title="河北海伟PP装置（30万吨/年）8月22日起停车检修，开车日期待定。">河北海伟PP装置（30万吨/年）8月22日起停车检修，开车日期待定。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A5_259E_25E5_258D_258E_25E6_25A6_2586_25E6_259E_2597_0_0_0_0_0.html" target="_blank" title="神华榆林">神华榆林</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25A5_259E_25E5_258D_258E_25E6_25A6_2586_25E6_259E_2597_0_0_0_0_0.html" target="_blank" title="神华榆林PP装置（30万吨/年）7月22日起生产S1003。目前运行正常，全部采用网上竞拍的模式销售。">神华榆林PP装置（30万吨/年）7月22日起生产S1003。目前运行正常，全部采用网上竞拍的模式销售。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_259B_259B_25E5_25B7_259D_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="四川石化">四川石化</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_259B_259B_25E5_25B7_259D_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="四川石化PP装置（45万吨/年）生产L5E89。">四川石化PP装置（45万吨/年）生产L5E89。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化">扬子石化</a>
                                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。">扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content" style="display:none">
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工">沈阳化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。">沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_25BA_2586_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="大庆炼化">大庆炼化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A7_25E5_25BA_2586_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="大庆炼化PP老装置（30万吨/年）7月20日晚间开始停车检修，部分炼油装置尚未运转正常，本周开车计划或将再度搁置；新装置（30万吨/年）生产HP500P。">大庆炼化PP老装置（30万吨/年）7月20日晚间开始停车检修，部分炼油装置尚未运转正常，本周开车计划或将再度搁置；新装置（30万吨/年）生产HP500P。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E9_259F_25A9_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中韩石化">中韩石化</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E9_259F_25A9_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中韩石化HDPE装置生产5502W，LLDPE装置生产35B。">中韩石化HDPE装置生产5502W，LLDPE装置生产35B。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_2590_2589_25E6_259E_2597_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="吉林石化">吉林石化</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_2590_2589_25E6_259E_2597_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="吉林石化HDPE装置（30万吨/年）生产GC100S，线性装置（27.5万吨/年）生产7042。">吉林石化HDPE装置（30万吨/年）生产GC100S，线性装置（27.5万吨/年）生产7042。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_258A_259A_25E9_25A1_25BA_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="抚顺石化">抚顺石化</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_258A_259A_25E9_25A1_25BA_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="抚顺石化老HDPE装置生产2911，LLDPE装置生产7050；新HDPE装置产7750M。">抚顺石化老HDPE装置生产2911，LLDPE装置生产7050；新HDPE装置产7750M。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E9_2595_2587_25E6_25B5_25B7_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="镇海炼化">镇海炼化</a>
                                        <span class="s" style="border:1px solid #0066ff; color:#0066ff;">转产</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E9_2595_2587_25E6_25B5_25B7_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="镇海炼化PE全密度装置转产7042，目前装置运行正常。">镇海炼化PE全密度装置转产7042，目前装置运行正常。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E8_2592_25B2_25E5_259F_258E_25E6_25B8_2585_25E6_25B4_2581_25E8_2583_25BD_25E6_25BA_2590_0_0_0_0_0.html" target="_blank" title="蒲城清洁能源">蒲城清洁能源</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E8_2592_25B2_25E5_259F_258E_25E6_25B8_2585_25E6_25B4_2581_25E8_2583_25BD_25E6_25BA_2590_0_0_0_0_0.html" target="_blank" title="蒲城清洁能源PE全密度装置生产7042。">蒲城清洁能源PE全密度装置生产7042。</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content" >
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_258A_25E6_25B5_25B7_25E9_2587_2591_25E8_258F_25B2_0_0_0_0_0.html" target="_blank" title="上海金菲">上海金菲</a>
                                        <span class="s" style="border:1px solid #0066ff; color:#0066ff;">转产</span>
                                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_258A_25E6_25B5_25B7_25E9_2587_2591_25E8_258F_25B2_0_0_0_0_0.html" target="_blank" title="上海金菲HDPE装置8月26日转产50100。据悉受G20峰会影响，8月底至9月初上海金菲PE装置负荷计划下降50%左右。">上海金菲HDPE装置8月26日转产50100。据悉受G20峰会影响，8月底至9月初上海金菲PE装置负荷计划下降50%左右。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E9_2595_2587_25E6_25B5_25B7_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="镇海炼化">镇海炼化</a>
                                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E9_2595_2587_25E6_25B5_25B7_25E7_2582_25BC_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="镇海炼化PE全密度装置生产7042，目前装置运行正常。据悉受G20峰会影响，8月底至9月初镇海炼化PE装置负荷计划下降50%左右。">镇海炼化PE全密度装置生产7042，目前装置运行正常。据悉受G20峰会影响，8月底至9月初镇海炼化PE装置负荷计划下降50%左右。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_258A_25E6_25B5_25B7_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="上海石化">上海石化</a>
                                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_258A_25E6_25B5_25B7_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="上海石化1PE一线装置产Q210，二线装置生产N210；2PE装置产DJ200A；4PE装置产YGH041。据悉受G20峰会影响，8月底至9月初上海石化PE装置负荷计划下降50%左右。">上海石化1PE一线装置产Q210，二线装置生产N210；2PE装置产DJ200A；4PE装置产YGH041。据悉受G20峰会影响，8月底至9月初上海石化PE装置负荷计划下降50%左右。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_25AF_258C_25E5_25BE_25B7_0_0_0_0_0.html" target="_blank" title="宁波富德">宁波富德</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_25AF_258C_25E5_25BE_25B7_0_0_0_0_0.html" target="_blank" title="宁波富德PP装置（40万吨/年）降负荷生产，开工率约在90%，生产拉丝T30S。计划9月第一周停车检修。">宁波富德PP装置（40万吨/年）降负荷生产，开工率约在90%，生产拉丝T30S。计划9月第一周停车检修。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25BB_258D_25E5_2585_25B4_25E4_25B8_2589_25E5_259C_2586_0_0_0_0_0.html" target="_blank" title="绍兴三圆">绍兴三圆</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E7_25BB_258D_25E5_2585_25B4_25E4_25B8_2589_25E5_259C_2586_0_0_0_0_0.html" target="_blank" title="绍兴三圆PP老装置（20万吨/年）生产Y16SY；新装置绍兴三锦（30万吨/年）8月16日起生产F280F。计划9月1日-7日停车检修。目前厂家库存不高，销售情况尚可。">绍兴三圆PP老装置（20万吨/年）生产Y16SY；新装置绍兴三锦（30万吨/年）8月16日起生产F280F。计划9月1日-7日停车检修。目前厂家库存不高，销售情况尚可。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_25AD_25A6_25E6_25B1_2589_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="武汉石化">武汉石化</a>
                                        <span class="s" style="border:1px solid #0066ff; color:#0066ff;">转产</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_25AD_25A6_25E6_25B1_2589_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="武汉石化PP装置（10万吨/年）8月26日计划转产PPH-T03。">武汉石化PP装置（10万吨/年）8月26日计划转产PPH-T03。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合">福建联合</a>
                                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E7_25A6_258F_25E5_25BB_25BA_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="福建联合PE装置全密度一线8月26日恢复正常，生产7042，由中方排产。另一线生产2220BS,由外方阿美排产。">福建联合PE装置全密度一线8月26日恢复正常，生产7042，由中方排产。另一线生产2220BS,由外方阿美排产。</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content" style="display:none">
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工">沈阳化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。">沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化">扬子石化</a>
                                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。">扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_2585_25B0_25E5_25B7_259E_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="兰州石化">兰州石化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_2585_25B0_25E5_25B7_259E_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="兰州石化高压8月11日停车，计划10月1日开车；老全密度装置继续停车；新全密度装置于8月5日停车，计划10月2日开车；低压装置老/新线8月11日停车，计划10月9日开车。">兰州石化高压8月11日停车，计划10月1日开车；老全密度装置继续停车；新全密度装置于8月5日停车，计划10月2日开车；低压装置老/新线8月11日停车，计划10月9日开车。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合">天津联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合PP装置（7万吨/年）8月15日停车检修，预计9月26日开车。">天津联合PP装置（7万吨/年）8月15日停车检修，预计9月26日开车。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_258F_25B0_25E5_25A1_2591_0_0_0_0_0.html" target="_blank" title="宁波台塑">宁波台塑</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_258F_25B0_25E5_25A1_2591_0_0_0_0_0.html" target="_blank" title="宁波台塑PP装置小线（17万吨/年）8月16日晚间停车检修；大线（28万吨/年）8月17日停车检修。大约检修30-45天。">宁波台塑PP装置小线（17万吨/年）8月16日晚间停车检修；大线（28万吨/年）8月17日停车检修。大约检修30-45天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合">天津联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合PE线性装置8月13日停车，计划检修40天左右。">天津联合PE线性装置8月13日停车，计划检修40天左右。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E6_25B2_2599_25E5_25A4_25A9_25E6_25B4_25A5_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中沙天津石化">中沙天津石化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E6_25B2_2599_25E5_25A4_25A9_25E6_25B4_25A5_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中沙天津LLDPE装置8月13日停车检修；HDPE装置8月13日停车检修，检修时间在40天左右。库存情况一般。">中沙天津LLDPE装置8月13日停车检修；HDPE装置8月13日停车检修，检修时间在40天左右。库存情况一般。</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content" style="display:none">
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工">沈阳化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。">沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化">扬子石化</a>
                                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。">扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_2585_25B0_25E5_25B7_259E_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="兰州石化">兰州石化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_2585_25B0_25E5_25B7_259E_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="兰州石化高压8月11日停车，计划10月1日开车；老全密度装置继续停车；新全密度装置于8月5日停车，计划10月2日开车；低压装置老/新线8月11日停车，计划10月9日开车。">兰州石化高压8月11日停车，计划10月1日开车；老全密度装置继续停车；新全密度装置于8月5日停车，计划10月2日开车；低压装置老/新线8月11日停车，计划10月9日开车。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合">天津联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合PP装置（7万吨/年）8月15日停车检修，预计9月26日开车。">天津联合PP装置（7万吨/年）8月15日停车检修，预计9月26日开车。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_258F_25B0_25E5_25A1_2591_0_0_0_0_0.html" target="_blank" title="宁波台塑">宁波台塑</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_258F_25B0_25E5_25A1_2591_0_0_0_0_0.html" target="_blank" title="宁波台塑PP装置小线（17万吨/年）8月16日晚间停车检修；大线（28万吨/年）8月17日停车检修。大约检修30-45天。">宁波台塑PP装置小线（17万吨/年）8月16日晚间停车检修；大线（28万吨/年）8月17日停车检修。大约检修30-45天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合">天津联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合PE线性装置8月13日停车，计划检修40天左右。">天津联合PE线性装置8月13日停车，计划检修40天左右。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E6_25B2_2599_25E5_25A4_25A9_25E6_25B4_25A5_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中沙天津石化">中沙天津石化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E6_25B2_2599_25E5_25A4_25A9_25E6_25B4_25A5_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中沙天津LLDPE装置8月13日停车检修；HDPE装置8月13日停车检修，检修时间在40天左右。库存情况一般。">中沙天津LLDPE装置8月13日停车检修；HDPE装置8月13日停车检修，检修时间在40天左右。库存情况一般。</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="content" style="display:none">
                            <ul>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工">沈阳化工</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E6_25B2_2588_25E9_2598_25B3_25E5_258C_2596_25E5_25B7_25A5_0_0_0_0_0.html" target="_blank" title="沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。">沈阳化工LLDPE装置（10万吨/年）15日停车，计划停车时间为30天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化">扬子石化</a>
                                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E6_2589_25AC_25E5_25AD_2590_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。">扬子石化1PPA线（10万吨/年）8月15日起生产YPR-503，B线（10万吨/年）8月20日起生产J340；2PP装置（20万吨/年）8月18日起生产K8003。8月排产计划：1PPA线：8.15-31计划产YPR-503；B线：8.20-31计划产J340；2PP：8.18-31计划产K8003。以上排产计划仅供参考。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_2585_25B0_25E5_25B7_259E_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="兰州石化">兰州石化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_2585_25B0_25E5_25B7_259E_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="兰州石化高压8月11日停车，计划10月1日开车；老全密度装置继续停车；新全密度装置于8月5日停车，计划10月2日开车；低压装置老/新线8月11日停车，计划10月9日开车。">兰州石化高压8月11日停车，计划10月1日开车；老全密度装置继续停车；新全密度装置于8月5日停车，计划10月2日开车；低压装置老/新线8月11日停车，计划10月9日开车。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合">天津联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合PP装置（7万吨/年）8月15日停车检修，预计9月26日开车。">天津联合PP装置（7万吨/年）8月15日停车检修，预计9月26日开车。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_258F_25B0_25E5_25A1_2591_0_0_0_0_0.html" target="_blank" title="宁波台塑">宁波台塑</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PP_25E7_25B2_2592__25E5_25AE_2581_25E6_25B3_25A2_25E5_258F_25B0_25E5_25A1_2591_0_0_0_0_0.html" target="_blank" title="宁波台塑PP装置小线（17万吨/年）8月16日晚间停车检修；大线（28万吨/年）8月17日停车检修。大约检修30-45天。">宁波台塑PP装置小线（17万吨/年）8月16日晚间停车检修；大线（28万吨/年）8月17日停车检修。大约检修30-45天。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合">天津联合</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E5_25A4_25A9_25E6_25B4_25A5_25E8_2581_2594_25E5_2590_2588_0_0_0_0_0.html" target="_blank" title="天津联合PE线性装置8月13日停车，计划检修40天左右。">天津联合PE线性装置8月13日停车，计划检修40天左右。</a></p>
                                </li>
                                <li>
                                    <p class="p1">
                                        <a class="co" href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E6_25B2_2599_25E5_25A4_25A9_25E6_25B4_25A5_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中沙天津石化">中沙天津石化</a>
                                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                                    </p>
                                    <p class="p2"><a href="../hq.zhaosuliao.com/zzrl_PE__25E4_25B8_25AD_25E6_25B2_2599_25E5_25A4_25A9_25E6_25B4_25A5_25E7_259F_25B3_25E5_258C_2596_0_0_0_0_0.html" target="_blank" title="中沙天津LLDPE装置8月13日停车检修；HDPE装置8月13日停车检修，检修时间在40天左右。库存情况一般。">中沙天津LLDPE装置8月13日停车检修；HDPE装置8月13日停车检修，检修时间在40天左右。库存情况一般。</a></p>
                                </li>
                            </ul>
                        </div>
        		</div>
        		<div class="gg_div" id="gg_div">
        			<p class="box_title title">&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="on">活动</a>&nbsp;&nbsp;&nbsp;<a href="javascript:;">专题</a></p>
        			<div class="content" id="gg_scroll1">
			            <ul class="img_list">
                            <li><a href="zixun/rmhd/16682.html" target="_blank"><img src="/Public/pc/upload/gallery/201608/f8213faf-01f5-4789-af63-9a2cd0666136.jpg" width="326" height="210" /></a></li>
                            <li><a href="huodong/saomachaihongbao" target="_blank"><img src="/Public/pc/upload/gallery/201608/a260ce1f-a603-4567-85bb-901b36e01a7c.jpg" width="326" height="210" /></a></li>
                            <li><a href="zixun/rmhd/16679.html" target="_blank"><img src="/Public/pc/upload/gallery/201608/b5412a3e-ef61-4b95-982e-4683fffdde07.jpg" width="326" height="210" /></a></li>
			            </ul>
			            <p class="dot">
                            <a href="javascript:void(0);" class="on"></a>
                            <a href="javascript:void(0);" ></a>
                            <a href="javascript:void(0);" ></a>
			            </p>
			            <a href="javascript:void(0);" class="prev"></a>
			            <a href="javascript:void(0);" class="next"></a>
                        <span class="icon"><a href="../hq.zhaosuliao.com/activitycenter" target="_blank">精彩活动</a></span>
        			</div>
        			<div class="content" id="gg_scroll2" style="display:none;">
			            <ul class="img_list">
			                <li><a href="web/subject/expansion" target="_blank" title="找塑料网2016团队拓展暨周年庆活动"><img src="/Public/pc/upload/gallery/201608/025f88de-a6ea-4293-a7ce-4e8a0de99739.jpg" width="326" height="210" title="找塑料网2016团队拓展暨周年庆活动" alt="找塑料网2016团队拓展暨周年庆活动" /></a></li>
			                <li><a href="huodong/exhibition_2016" target="_blank" title="共襄盛会 塑造未来  找塑料网与您相约2016国际橡塑展"><img src="/Public/pc/upload/gallery/201608/114c66ef-d6c5-46a6-8016-ad80eddd97df.jpg" width="326" height="210" title="共襄盛会 塑造未来  找塑料网与您相约2016国际橡塑展" alt="共襄盛会 塑造未来  找塑料网与您相约2016国际橡塑展" /></a></li>
			                <li><a href="article/train" target="_blank" title="找塑料网打造巅峰团队铸就辉煌未来"><img src="/Public/pc/upload/gallery/201608/0ccdfd25-138d-4221-8461-adb28154c774.jpg" width="326" height="210" title="找塑料网打造巅峰团队铸就辉煌未来" alt="找塑料网打造巅峰团队铸就辉煌未来" /></a></li>
			            </ul>
			            <p class="dot">
                            <a href="javascript:void(0);" class="on"></a>
                            <a href="javascript:void(0);"></a>
                            <a href="javascript:void(0);"></a>
			            </p>
			            <a href="javascript:void(0);" class="prev"></a>
			            <a href="javascript:void(0);" class="next"></a>
                        <span class="icon"><a href="../hq.zhaosuliao.com/subject" target="_blank">精彩专题</a></span>
        			</div>
        		</div>
        	</div>
        </div>
	</div>
<!--行情中心 end-->    <!--资讯动态 end-->
</div>

<!--电梯-开始-->
<div class="lift">
    <ul class="floor">
        <li class="f1">PE</li>
        <li class="f2">PP</li>
        <li class="f3">PVC</li>
        <li class="f4">其他</li>
        <li class="f5">行情</li>
    </ul>
    <!-- <div class="go_top"><a href="javascript:void(0);"></a></div> -->
    <div class="arrow"></div>
</div>
<!--电梯-结束-->

<!--移入提示层 end-->
<div id="tip_message"></div>

<!--发布成功弹出框start-->
<div class="Dwt" style="display: none;">
    <p class="title"><a href="javascript:void(0)" id="close_purchase"><!--关闭--></a>&nbsp;&nbsp;&nbsp;&nbsp;采购单：<span id="purchase_sn"></span>&nbsp;成功发布</p>
    <div class="d">
        <p class="p1">&nbsp;&nbsp;您的委托采购内容：</p>
        <p class="p2" id="issue_content"></p>
        <p><i></i>您的以下委托已成功发布，请等待交易员为您审核采购内容，您的委托通过审核后将开始接受报价并由交易员为您找货。</p>
        <p style="padding-left:36px; margin-top:10px;">您可以从会员中心“我的采购”中了解您的委托进度 </p>
        <p style="padding-left:36px;">&gt;&gt; 点击查看"<a href='member/purchase/list' style='color:#08d;'>我的采购</a>"</p>
    </div>
</div>
<!--发布成功弹出end框-->

<!-- 在线客服start -->
<div class="kf">
    <ul>
        <li class="one">
            <div class="on" style="display:none;">服务<br />时间</div>
            <div class="other" style="display:none;">9:00-17:30</div>
        </li>
        <li class="two">
            <div class="on" style="display:none;">在线<br />客服</div>
            <div class="other" style="display:none;"><a target="_blank" href="../wpa.qq.com/msgrd@v=3&uin=3115678895&site=qq&menu=yes"><img border="0" src="../wpa.qq.com/pa@p=2_3A3115678895_3A51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></div>
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