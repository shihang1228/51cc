<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="baidu-site-verification" content="GEYeUSYelI" />
        <meta property="qc:admins" content="1376034076620173541176375" />
        <meta property="wb:webmaster" content="98f17058f76adb4c" />
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="0">
        <title>【行情中心】PE/PP/PVC塑料原料实时成交价格_行情资讯_数据分析_调研报告 - 找塑料网</title>
        <meta name="keywords" content='PE,PP颗粒,PP粉料,PVC塑料原料价格行情,塑料资讯,塑料数据,塑料成交价'/>
        <meta name="description" content='找塑料网行情中心提供PE、PP颗粒、PP粉料、PVC行情资讯、价格走势、数据分析、市场分析预测、调研报告、实盘成交价等数据。找塑料网行情中心，基于海量成交数据的行情资讯。' />
    
        <link href="/Public/pc/css/center.css" rel="stylesheet" type="text/css" />
        <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
        <script src="/Public/pc/plugin/laydate/laydate.js" type="text/javascript"></script>
        <script src="/Public/pc/js/center.js" type="text/javascript"></script>
        <script src="/Public/pc/plugin/highcharts.js" type="text/javascript"></script>
		<script type="text/javascript" src="/Public/pc/js/common.js"></script>
    </head>
<body>
<div id="header">
    <div class="top">
        <div class="w1200" id="js-login-info">
            <a class="icon3" href="javascript:;" onclick="AddFavorite(window.location,document.title)">加入收藏</a>
            <span class="icon2">0533-6094105</span>
            <a class="icon1" target="_blank" href="../wpa.qq.com/msgrd@v=3&uin=573522264&site=qq&menu=yes">573522264</a>
            <a href="../www.zhaosuliao.com/member" class="fr">会员中心</a>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            var linkman = getCookie("linkman");
            if (linkman != "" && linkman != "null" && linkman != null) {
                $("#js-login-info").prepend('<div style="float:left;">尊敬的<a href="../www.zhaosuliao.com/member" style="color: red;">&nbsp;'+ linkman +'&nbsp;</a><a href="../www.zhaosuliao.com/logout">【退出】</a>&nbsp;&nbsp;欢迎来到找塑料网!&nbsp;&nbsp;</div>');
            }else{
                $("#js-login-info").prepend('<div style="float:left;"><span class="login fl">您好，欢迎来到找塑料网!  【<a href="../www.zhaosuliao.com/user/login">会员登录</a> | <a href="../www.zhaosuliao.com/user/register">免费注册</a>】</span></div>');
            }
        });
        </script>
    </div>
    <div class="logo_div">
        <div class="w1200">
            <a href="../www.zhaosuliao.com/default.htm" class="logo" title="找塑料网"><img src="/Public/pc/image/common/logo3.png" width="160" height="55" alt="找塑料网" title="找塑料网" /></a>
            <a href="default.htm" class="logo" title="找塑料网行情中心"><img src="/Public/pc/image/center/logo_hq.jpg" width="170" height="53" alt="找塑料网行情中心" title="找塑料网行情中心" /></a>
            <div class="serch">
                <form id="myform">
                    <input type="text" class="input" name="search" value="请输入要搜索的关键字" />
                    <input type="text" style="display:none" />
                    <input class="serch_b" value="搜&nbsp;索" type="button" />
                </form>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="w1200">
            <a href="default.htm" class="on">首页</a>
            <a href="pe.html"  >PE / 聚乙烯</a>
            <a href="ppl.html" >PP粒料 / 聚丙烯粒料</a>
            <a href="ppf.html" >PP粉料 / 聚丙烯粉料</a>
            <a href="pvc.html" >PVC / 聚氯乙烯</a>
        </div>
    </div>
    <div class="indicators">
        <div class="w1200">
            <div class="wa">
                <a href="javascript:;" onclick="methodName('28','PE成交指数')" class="check_zs">PE成交指数：942&nbsp;&nbsp;&nbsp;<span class="red">↑&nbsp;2</span></a>
                <a href="javascript:;" onclick="methodName('27','PP成交指数')" class="check_zs">PP成交指数：1113&nbsp;&nbsp;&nbsp;<span class="green">↓&nbsp;0</span></a>
                <a href="javascript:;" onclick="methodName('26','PVC成交指数')" class="check_zs">PVC成交指数：1020.2&nbsp;&nbsp;&nbsp;<span class="green">↓&nbsp;0</span></a>
                <a href="javascript:;" onclick="methodName('23','ICE Brent')" class="check_zs">ICE Brent：49.67&nbsp;&nbsp;&nbsp;<span class="red">↑&nbsp;0.62</span></a>
                <a href="javascript:;" onclick="methodName('22','Nymex WTI')" class="check_zs">Nymex WTI：47.33&nbsp;&nbsp;&nbsp;<span class="red">↑&nbsp;0.56</span></a>
                <a href="javascript:;" onclick="methodName('17','美元指数')" class="check_zs">美元指数：94.72&nbsp;&nbsp;&nbsp;<span class="green">↓&nbsp;-0.05</span></a>
            </div>
        </div>
    </div>
</div>

<!-- 指数弹窗 -->
<div class="zs_mask" style="display: none;">
    <div class="zs_mask_c">
        <a href="javascript:void(0);" class="close"></a>
        <div id="zs_container"></div>
    </div>
</div><script type="text/javascript">
function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}

if(!IsPC()){
	window.location.href = SITE_URL+'center/analysis';
}
function isWeiXin(){
    var ua = window.navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){
        return true;
    }else{
        return false;
    }
} 
if(isWeiXin()){
	window.location.href = SITE_URL+'center/analysis';
}

</script>

<div id="main">
    <div id="left" class="mr_10">
        <!-- 操盘早提示 -->
        <div class="index_div01">
            <p class="p1">
                <a href="indexcpzts.html" target="_blank" class="a1" title="操盘早提示"></a>
                <a href="pecpzts.html" target="_blank" class="c_color2" title="PE操盘早提示">【PE】</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="pplcpzts.html" target="_blank" class="c_color2" title="PP粒操盘早提示">【PP粒】</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ppfcpzts.html" target="_blank" class="c_color2" title="PP粉操盘早提示">【PP粉】</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="pvccpzts.html" target="_blank" class="c_color2"title="PVC操盘早提示">【PVC】</a>
            </p>
            <ul class="list_1 list_1_04 mt_10">
              	<li><a href="pe/pecpzts/20971.html" target="_blank" title="【早提示】多空博弈 PE市场涨势放缓">【早提示】多空博弈 PE市场涨势放缓</a><span class="time">[08:53] </span></li>
              	<li><a href="ppl/pplcpzts/20970.html" target="_blank" title="【早提示】缺乏方向指引，PP月底继续纠结">【早提示】缺乏方向指引，PP月底继续纠结</a><span class="time">[08:52] </span></li>
              	<li><a href="pvc/pvccpzts/20961.html" target="_blank" title="【早提示】 今日PVC市场稳定为主">【早提示】 今日PVC市场稳定为主</a><span class="time">[08:33] </span></li>
              	<li><a href="pe/pecpzts/20959.html" target="_blank" title="【行情早报】塑料看涨预期越来越弱 原因都在这儿">【行情早报】塑料看涨预期越来越弱 原因都在这儿</a><span class="time">[07:55] </span></li>
              	<li><a href="pe/pecpzts/20873.html" target="_blank" title="【早提示】PE供应面与需求面的对峙仍将继续">【早提示】PE供应面与需求面的对峙仍将继续</a><span class="time"> [08-25]</span></li>
            </ul>
        </div>
        <!-- banner -->
        <div class="banner">
            <ul class="img_list">
                <li><a href="pe/pedybg/21028.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）"><img src="/Public/pc/upload/gallery/201608/fe9945eb-d3cb-40d4-9375-516a550ff11a.png" width="540" height="260" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）" alt="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）" /></a></li>
                <li><a href="ppl/pplqwzl/21039.html" target="_blank" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹"><img src="/Public/pc/upload/gallery/201608/738e8e1b-8b4e-4c11-ac99-3be39dd6ede4.jpg" width="540" height="260" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹" alt="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹" /></a></li>
                <li><a href="ppl/pplqwzl/20234.html" target="_blank" title="【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）"><img src="/Public/pc/upload/gallery/201608/1aeeb1ee-fc64-43d0-8c3c-a4ac93d498ee.png" width="540" height="260" title="【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）" alt="【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）" /></a></li>
            </ul>
            <p class="dot">
                 <a href="javascript:void(0);" class="on">1</a>
                
                 <a href="javascript:void(0);">2</a>
                 <a href="javascript:void(0);">3</a>
            </p>
                 <p class="text"><a href="pe/pedybg/21028.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）">中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）</a></p>              
                              
                              
        </div>
        <!-- 行情直播 -->
        <div class="div01 studio mt_10">
            <p class="list_title01">
                <a class="s s15" href="hqzb.html" target="_blank" title="行情直播"></a>
                <a href="pehqzb.html" target="_blank" class="c_color2" title="PE行情直播">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplhqzb.html" target="_blank" class="c_color2" title="PP粒行情直播">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfhqzb.html" target="_blank" class="c_color2" title="PP粉行情直播">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvchqzb.html" target="_blank" class="c_color2" title="PVC行情直播">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul>
                <li>
                    <span class="s">17:03:14</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ppl/pplqwzl/21042.html" target="_blank" title="【下游分析】PP下游开工降低，BOPP最为明显"><span class="intercept_text" title="本周国内聚丙烯下游行业明显回落，其中塑编开行业工率在55%，共聚注塑开工率在50%左右，BOPP开工率在56%。">本周国内聚丙烯下游行业明显回落，其中塑编开行业工率在55%，共聚注塑开工率在50%左右，BOPP开工率在56%。</span></a>
                </li>
                <li>
                    <span class="s">16:57:55</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ppl/pplqwzl/21041.html" target="_blank" title="【产量估算】PP检修较多，产量继续下降"><span class="intercept_text" title="本周国内产量约29.5万吨，环比下降1%。其中拉丝产量约9.5万吨，占比32.27%，环比减少5%；共聚注塑产量3.8万吨，占比13%，环比持平。">本周国内产量约29.5万吨，环比下降1%。其中拉丝产量约9.5万吨，占比32.27%，环比减少5%；共聚注塑产量3.8万吨，占比13%，环比持平。</span></a>
                </li>
                <li>
                    <span class="s">16:40:33</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="pvc/pvcqwzl/21040.html" target="_blank" title="【产量估算】本周PVC产量较上周略有下降"><span class="intercept_text" title="本周PVC企业开工率略有下调，内蒙宜化8月19日晚开始检修计划检修一周，信发装置停一条线，其他企业暂稳为主，故本周产量较上周略有下跌。">本周PVC企业开工率略有下调，内蒙宜化8月19日晚开始检修计划检修一周，信发装置停一条线，其他企业暂稳为主，故本周产量较上周略有下跌。</span></a>
                </li>
                <li>
                    <span class="s">16:32:17</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ppl/pplqwzl/21039.html" target="_blank" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹"><span class="intercept_text" title="OPEC第三大产油国伊朗已经确定，将参加在阿尔及利亚召开的OPEC会议。此前四月的冻产会议伊朗没有参加，最后无果而终。在9月底的会议上，OPEC有可能会重启冻产谈判。">OPEC第三大产油国伊朗已经确定，将参加在阿尔及利亚召开的OPEC会议。此前四月的冻产会议伊朗没有参加，最后无果而终。在9月底的会议上，OPEC有可能会重启冻产谈判。</span></a>
                </li>
                <li>
                    <span class="s">16:19:52</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="pe/pesccjjc/21037.html" target="_blank" title="下午濮阳PE市场报价窄幅盘整"><span class="intercept_text" title="下午濮阳PE市场报价窄幅盘整。有贸易商表示，尽管上午中石化华中上调LLDPE出厂价，但是下游厂家询盘气氛一般，贸易商高价出货不畅。市场参考报价：7050报9200元/吨左右。">下午濮阳PE市场报价窄幅盘整。有贸易商表示，尽管上午中石化华中上调LLDPE出厂价，但是下游厂家询盘气氛一般，贸易商高价出货不畅。市场参考报价：7050报9200元/吨左右。</span></a>
                </li>
                <li>
                    <span class="s">15:57:14</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="pe/peqwzl/21036.html" target="_blank" title="【价差分析】PE现货＆期货：基差由强转弱"><span class="intercept_text" title="【价差分析】PE现货＆期货基差由强转弱。预计短线LLDPE1701合约继续上涨空间有限，对现货市场利好支撑不足。">【价差分析】PE现货＆期货基差由强转弱。预计短线LLDPE1701合约继续上涨空间有限，对现货市场利好支撑不足。</span></a>
                </li>
            </ul>
            <a href="hqzb.html" target="_blank" class="btn" title="进入直播室">进入直播室</a>
        </div>
        <div class="">
            <!-- 实时成交 -->
            <div class="div02 h04 mt_10" id="deal_list">
                <p class="list_title01"><a class="s s13" href="finalPrice/HDPE.html" target="_blank" title="实时成交"></a><a href="finalPrice/HDPE.html" target="_blank" class="c_color2 more" title="更多实时成交">查看更多成交价</a>&nbsp;&nbsp;</p>
                <ul class="list_1 list_1_02 mt_10">
               
                    <li class="open_link" data-cate="HDPE" data-material="BL3" data-manufacturer="伊朗国家石化" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">BL3</span><span class="w2">伊朗国家石化</span>
                        <span class="w3"><i class="c_color1">8965元/吨</i></span>
                        <span class="w4">4小时前</span>
                    </li>
                    <li class="open_link" data-cate="HDPE" data-material="BL3" data-manufacturer="伊朗国家石化" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">BL3</span><span class="w2">伊朗国家石化</span>
                        <span class="w3"><i class="c_color1">9000元/吨</i></span>
                        <span class="w4">5小时前</span>
                    </li>
                    <li class="open_link" data-cate="PP" data-material="T30S" data-manufacturer="延炼" data-type="0">
                        <span class="w1">PP</span><span class="w2">T30S</span><span class="w2">延炼</span>
                        <span class="w3"><i class="c_color1">8280元/吨</i></span>
                        <span class="w4">6小时前</span>
                    </li>
                    <li class="open_link" data-cate="LLDPE" data-material="DFDA-7042" data-manufacturer="包头神华" data-type="0">
                        <span class="w1">LLDPE</span><span class="w2">DFDA-7042</span><span class="w2">包头神华</span>
                        <span class="w3"><i class="c_color1">9200元/吨</i></span>
                        <span class="w4">8小时前</span>
                    </li>
                    <li class="open_link" data-cate="HDPE" data-material="BL3" data-manufacturer="伊朗国家石化" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">BL3</span><span class="w2">伊朗国家石化</span>
                        <span class="w3"><i class="c_color1">9010元/吨</i></span>
                        <span class="w4">1天前</span>
                    </li>
                    <li class="open_link" data-cate="HDPE" data-material="BL3" data-manufacturer="伊朗国家石化" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">BL3</span><span class="w2">伊朗国家石化</span>
                        <span class="w3"><i class="c_color1">9010元/吨</i></span>
                        <span class="w4">1天前</span>
                    </li>
                    <li class="open_link" data-cate="HDPE" data-material="TR144" data-manufacturer="中石化茂名" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">TR144</span><span class="w2">中石化茂名</span>
                        <span class="w3"><i class="c_color1">9470元/吨</i></span>
                        <span class="w4">1天前</span>
                    </li>
                    <li class="open_link" data-cate="PP" data-material="K8003" data-manufacturer="中石油独山子" data-type="0">
                        <span class="w1">PP</span><span class="w2">K8003</span><span class="w2">中石油独山子</span>
                        <span class="w3"><i class="c_color1">8600元/吨</i></span>
                        <span class="w4">1天前</span>
                    </li>
                    <li class="open_link" data-cate="HDPE" data-material="BL3" data-manufacturer="伊朗国家石化" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">BL3</span><span class="w2">伊朗国家石化</span>
                        <span class="w3"><i class="c_color1">9010元/吨</i></span>
                        <span class="w4">1天前</span>
                    </li>
                    <li class="open_link" data-cate="HDPE" data-material="BL3" data-manufacturer="伊朗国家石化" data-type="0">
                        <span class="w1">HDPE</span><span class="w2">BL3</span><span class="w2">伊朗国家石化</span>
                        <span class="w3"><i class="c_color1">9000元/吨</i></span>
                        <span class="w4">2天前</span>
                    </li>
    		   	
                </ul>
            </div>
            <!-- 深度观察 -->
            <div class="div02 h05" id="depth_observation">
                <p class="list_title01">
                    <a class="s s07" href="indexsdgc.html" title="深度观察" target="_blank"></a>
                    <a href="pesdgc.html" target="_blank" class="c_color2" title="PE深度观察">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="pplsdgc.html" target="_blank" class="c_color2" title="PP粒深度观察">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="ppfsdgc.html" target="_blank" class="c_color2" title="PP粉深度观察">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="pvcsdgc.html" target="_blank" class="c_color2"title="PVC深度观察">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </p>
                <div class="div02_01 height01">
                    <p class="p1"><a href="pe/pesdgc/20950.html" target="_blank" title="【交易收评】多空交织，塑料市场难涨难跌">【交易收评】多空交织，塑料市场难涨难跌</a></p>
                    <p class="intercept_text">【交易收评】影响整个塑料市场的G20峰会临近，但是并没有预期中行情上涨，是什么原因牵动着PVC的稳定、PPPE的难涨难跌？</p>    		           
                </div>
                <ul class="list_1 list_1_01 fl mt_10">
                	<li class="w1"><a href="ppl/pplsdgc/20953.html" target="_blank" title="【日评】PP消息有多有空，价格有涨有跌">【日评】PP消息有多有空，价格有涨有跌</a><span class="time"> [08-25]</span></li>
                	<li class="w1"><a href="pvc/pvcsdgc/20947.html" target="_blank" title="【日评】今日PVC暂稳运行">【日评】今日PVC暂稳运行</a><span class="time"> [08-25]</span></li>
                	<li class="w1"><a href="pe/pesdgc/20951.html" target="_blank" title="【日评】供应利好升温 PE涨势却明显放缓">【日评】供应利好升温 PE涨势却明显放缓</a><span class="time"> [08-25]</span></li>
                	<li class="w1"><a href="pe/pesdgc/20864.html" target="_blank" title="【交易收评】塑料市场行情“明日复明日”？">【交易收评】塑料市场行情“明日复明日”？</a><span class="time"> [08-24]</span></li>
                	<li class="w1"><a href="ppl/pplsdgc/20862.html" target="_blank" title="【日评】PP跌不动，还得感谢月底效应">【日评】PP跌不动，还得感谢月底效应</a><span class="time"> [08-24]</span></li>
                </ul>
            </div>
        </div>
        <div class="mb_10"><a href="../www.zhaosuliao.com/huodong/saomachaihongbao" target="_blank" title="【激情奥运季】采购成交，拆取红包，惊喜100%"><img src="/Public/pc/upload/gallery/201608/50ecf666-7711-4613-9bb0-5b83a917dc17.jpg" width="860" height="205" alt="【激情奥运季】采购成交，拆取红包，惊喜100%" title="【激情奥运季】采购成交，拆取红包，惊喜100%" /></a></div>
        <!-- 外盘动态 -->
        <div class="div01 h04">
            <p class="list_title01">
                <a class="s s06" href="indexwpdt.html" title="外盘动态" target="_blank"></a>
                <a href="pewpdt.html" target="_blank" class="c_color2" title="PE外盘动态">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplwpdt.html" target="_blank" class="c_color2" title="PP粒外盘动态">PP粒</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul class="list_1 mt_10">
                <li><a href="pe/pewpdt/20960.html" target="_blank" title="外盘早报：PE/PP美金市场8月25日收盘价格">外盘早报：PE/PP美金市场8月25日收盘价格</a><span class="time">[08:19] </span></li>
                <li><a href="pe/pewpdt/20941.html" target="_blank" title="国内PE美金市场报价">国内PE美金市场报价</a><span class="time"> [08-25]</span></li>
                <li><a href="pe/pewpdt/20868.html" target="_blank" title="外盘早报：PE/PP美金市场8月24日收盘价格">外盘早报：PE/PP美金市场8月24日收盘价格</a><span class="time"> [08-25]</span></li>
                <li><a href="pe/pewpdt/20851.html" target="_blank" title="国内PE美金市场高压报价小幅上涨">国内PE美金市场高压报价小幅上涨</a><span class="time"> [08-24]</span></li>
                <li><a href="pe/pewpdt/20794.html" target="_blank" title="外盘早报：PE/PP美金市场8月23日收盘价格">外盘早报：PE/PP美金市场8月23日收盘价格</a><span class="time"> [08-24]</span></li>
                <li><a href="pe/pewpdt/20780.html" target="_blank" title="国内PE美金市场部分报价小幅下滑">国内PE美金市场部分报价小幅下滑</a><span class="time"> [08-23]</span></li>
                <li><a href="pe/pewpdt/20711.html" target="_blank" title="外盘早报：PE/PP美金市场8月22日收盘价格">外盘早报：PE/PP美金市场8月22日收盘价格</a><span class="time"> [08-23]</span></li>
                <li><a href="pe/pewpdt/20689.html" target="_blank" title="国内PE美金市场报价小幅上涨">国内PE美金市场报价小幅上涨</a><span class="time"> [08-22]</span></li>
                <li><a href="pe/pewpdt/20553.html" target="_blank" title="外盘早报：PE/PP美金市场8月18日收盘价格">外盘早报：PE/PP美金市场8月18日收盘价格</a><span class="time"> [08-19]</span></li>
                <li><a href="pe/pewpdt/20536.html" target="_blank" title="国内PE美金市场看涨预期减弱">国内PE美金市场看涨预期减弱</a><span class="time"> [08-18]</span></li>
            </ul>
        </div>
        <!-- 权威专栏 -->
        <div class="div02 h04" id="authoritative_column">
            <p class="list_title01">
                <a class="s s04" href="indexqwzl.html" title="权威专栏" target="_blank"></a>
                <a href="peqwzl.html" target="_blank" class="c_color2" title="PE权威专栏">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplqwzl.html" target="_blank" class="c_color2" title="PP粒权威专栏">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfqwzl.html" target="_blank" class="c_color2" title="PP粉权威专栏">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvcqwzl.html" target="_blank" class="c_color2"title="PVC权威专栏">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <div class="div02_01 height01">
              	<p class="p1"><a href="ppl/pplqwzl/21044.html" target="_blank" title="【价差分析】PP现货＆期货：基差小幅调整">【价差分析】PP现货＆期货：基差小幅调整</a></p>
          		<p class="intercept_text">【价差分析】今天PP基差在765元/吨，绝对值偏高，理论存在一定套利空间，但是近期期货现货均呈现上涨乏力态势，预计近期PP期货现货继续整理为主。</p>
            </div>
            <ul class="list_1 list_1_01">
                <li class="w1"><a href="ppl/pplqwzl/21042.html" target="_blank" title="【下游分析】PP下游开工降低，BOPP最为明显">【下游分析】PP下游开工降低，BOPP最为明显</a><span class="time">[17:03] </span></li>
                <li class="w1"><a href="ppl/pplqwzl/21041.html" target="_blank" title="【产量估算】PP检修较多，产量继续下降">【产量估算】PP检修较多，产量继续下降</a><span class="time">[16:57] </span></li>
                <li class="w1"><a href="pvc/pvcqwzl/21040.html" target="_blank" title="【产量估算】本周PVC产量较上周略有下降">【产量估算】本周PVC产量较上周略有下降</a><span class="time">[16:40] </span></li>
                <li class="w1"><a href="ppl/pplqwzl/21039.html" target="_blank" title="【宏观塑评】伊朗参会欧佩克 国际油价迎反弹">【宏观塑评】伊朗参会欧佩克 国际油价迎反弹</a><span class="time">[16:32] </span></li>
                <li class="w1"><a href="pe/peqwzl/21036.html" target="_blank" title="【价差分析】PE现货＆期货：基差由强转弱">【价差分析】PE现货＆期货：基差由强转弱</a><span class="time">[15:57] </span></li>
                <li class="w1"><a href="pe/peqwzl/21034.html" target="_blank" title="【价差分析】PE美金＆国产：价差变化不大">【价差分析】PE美金＆国产：价差变化不大</a><span class="time">[15:36] </span></li>
                <li class="w1"><a href="ppl/pplqwzl/21033.html" target="_blank" title="【价差分析】PP＆PP粉：粉料价格优势渐增">【价差分析】PP＆PP粉：粉料价格优势渐增</a><span class="time">[15:31] </span></li>
            </ul>
        </div>
        <!-- 制品行业动态 -->
        <div class="div01 h04 mb_0">
            <p class="list_title01">
                <a class="s s14" href="indexzphydt.html" title="制品行业动态" target="_blank"></a>
                <a href="pezphydt.html" target="_blank" class="c_color2" title="PE制品行业动态">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplzphydt.html" target="_blank" class="c_color2" title="PP粒制品行业动态">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfzphydt.html" target="_blank" class="c_color2" title="PP粉制品行业动态">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvczphydt.html" target="_blank" class="c_color2"title="PVC制品行业动态">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul class="list_1 mt_10">
              	<li><a href="pvc/pvczphydt/20967.html" target="_blank" title="湖北沙隆达进驻新区推动产业升级实现节能减排">湖北沙隆达进驻新区推动产业升级实现节能减排</a><span class="time">[08:49] </span></li>
              	<li><a href="pvc/pvczphydt/20966.html" target="_blank" title="新疆天业上半年净利2.5-2.7亿元 增幅85%-120%">新疆天业上半年净利2.5-2.7亿元 增幅85%-120%</a><span class="time">[08:48] </span></li>
              	<li><a href="pvc/pvczphydt/20965.html" target="_blank" title="鲁泰化学PVC车间现场目视管理样板工程初见成效">鲁泰化学PVC车间现场目视管理样板工程初见成效</a><span class="time">[08:47] </span></li>
              	<li><a href="ppf/ppfzphydt/20885.html" target="_blank" title="塑料产业定价方式转变 贸易商洗牌加速">塑料产业定价方式转变 贸易商洗牌加速</a><span class="time"> [08-25]</span></li>
              	<li><a href="pvc/pvczphydt/20876.html" target="_blank" title="国务院印发工作方案 降低实体经济企业六大成本">国务院印发工作方案 降低实体经济企业六大成本</a><span class="time"> [08-25]</span></li>
              	<li><a href="pvc/pvczphydt/20875.html" target="_blank" title="需求不济 未来几年全球石化产品将持续缓慢增长">需求不济 未来几年全球石化产品将持续缓慢增长</a><span class="time"> [08-25]</span></li>
              	<li><a href="pvc/pvczphydt/20874.html" target="_blank" title="内蒙古兰太实业今年上半年净利润实现扭亏为盈">内蒙古兰太实业今年上半年净利润实现扭亏为盈</a><span class="time"> [08-25]</span></li>
              	<li><a href="ppf/ppfzphydt/20816.html" target="_blank" title="喜高设立多米尼加共和国注塑成型培训计划">喜高设立多米尼加共和国注塑成型培训计划</a><span class="time"> [08-24]</span></li>
              	<li><a href="pvc/pvczphydt/20803.html" target="_blank" title="工信部推动落后产能退出 争取到2020年再退一批">工信部推动落后产能退出 争取到2020年再退一批</a><span class="time"> [08-24]</span></li>
              	<li><a href="pvc/pvczphydt/20801.html" target="_blank" title="四部委联合发布工业强基等五个工程实施指南">四部委联合发布工业强基等五个工程实施指南</a><span class="time"> [08-24]</span></li>
            </ul>
        </div>
        <!-- 调研报告 -->
        <div class="div02 h04 mb_0">
            <p class="list_title01">
                <a class="s s09" href="indexdybg.html" title="调研报告" target="_blank"></a>
                <a href="pedybg.html" target="_blank" class="c_color2" title="PE调研报告">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppldybg.html" target="_blank" class="c_color2" title="PP粒调研报告">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfdybg.html" target="_blank" class="c_color2" title="PP粉调研报告">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvcdybg.html" target="_blank" class="c_color2"title="PVC调研报告">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul class="list_1 list_1_01 fl mt_10">
              	<li class="w1"><a href="pe/pedybg/21028.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）">中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）</a><span class="time">[14:55] </span></li>
              	<li class="w1"><a href="ppf/ppfdybg/21030.html" target="_blank" title="中国聚丙烯(PP)周度报告（20160820-0826）">中国聚丙烯(PP)周度报告（20160820-0826）</a><span class="time">[14:47] </span></li>
              	<li class="w1"><a href="pe/pedybg/20615.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160813-0819）">中国塑料市场(PE/PP/PVC)周度报告（20160813-0819）</a><span class="time"> [08-19]</span></li>
              	<li class="w1"><a href="pvc/pvcdybg/20610.html" target="_blank" title="中国聚氯乙烯(PVC)周度报告（20160813-0819）">中国聚氯乙烯(PVC)周度报告（20160813-0819）</a><span class="time"> [08-19]</span></li>
              	<li class="w1"><a href="ppf/ppfdybg/20612.html" target="_blank" title="中国聚丙烯(PP)周度报告（20160813-0819）">中国聚丙烯(PP)周度报告（20160813-0819）</a><span class="time"> [08-19]</span></li>
              	<li class="w1"><a href="pe/pedybg/20219.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160806-0812）">中国塑料市场(PE/PP/PVC)周度报告（20160806-0812）</a><span class="time"> [08-12]</span></li>
              	<li class="w1"><a href="ppf/ppfdybg/20220.html" target="_blank" title="中国聚丙烯(PP)周度报告（20160806-0812）">中国聚丙烯(PP)周度报告（20160806-0812）</a><span class="time"> [08-12]</span></li>
              	<li class="w1"><a href="pvc/pvcdybg/20218.html" target="_blank" title="中国聚氯乙烯(PVC)周度报告（20160806-0812）">中国聚氯乙烯(PVC)周度报告（20160806-0812）</a><span class="time"> [08-12]</span></li>
              	<li class="w1"><a href="pe/pedybg/19626.html" target="_blank" title="中国塑料市场(PE/PP/PVC)周度报告（20160730-0805）">中国塑料市场(PE/PP/PVC)周度报告（20160730-0805）</a><span class="time"> [08-05]</span></li>
              	<li class="w1"><a href="ppf/ppfdybg/19625.html" target="_blank" title="中国聚丙烯(PP)周度报告（20160730-0805）">中国聚丙烯(PP)周度报告（20160730-0805）</a><span class="time"> [08-05]</span></li>
            </ul>
        </div>
    </div>
    <div id="right">
        <!-- 上游动态 -->
        <div class="div01 mb_10">
            <p class="list_title02">
                <a class="s s05" href="indexsydt.html" title="上游动态" target="_blank"></a>
                <a href="pesydt.html" target="_blank" class="c_color2" title="PE上游动态">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplsydt.html" target="_blank" class="c_color2" title="PP粒上游动态">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfsydt.html" target="_blank" class="c_color2" title="PP粉上游动态">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvcsydt.html" target="_blank" class="c_color2"title="PVC上游动态">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul class="list_1 mt_10 mb_5">
              	<li><a href="pe/pesydt/20962.html" target="_blank" title="上游早报：原油及单体8月25日收盘价格">上游早报：原油及单体8月25日收盘价格</a><span class="time">[08:34] </span></li>
              	<li><a href="ppl/pplsydt/20958.html" target="_blank" title="油价早报：8月25日国际油价止跌转涨">油价早报：8月25日国际油价止跌转涨</a><span class="time">[06:17] </span></li>
              	<li><a href="pe/pesydt/20869.html" target="_blank" title="上游早报：原油及单体8月24日收盘价格">上游早报：原油及单体8月24日收盘价格</a><span class="time"> [08-25]</span></li>
              	<li><a href="ppl/pplsydt/20866.html" target="_blank" title="油价早报：8月24日国际油价震荡下滑">油价早报：8月24日国际油价震荡下滑</a><span class="time"> [08-25]</span></li>
              	<li><a href="pe/pesydt/20795.html" target="_blank" title="上游早报：原油及单体8月23日收盘价格">上游早报：原油及单体8月23日收盘价格</a><span class="time"> [08-24]</span></li>
              	<li><a href="ppl/pplsydt/20791.html" target="_blank" title="油价早报：8月23日国际油价止跌转涨">油价早报：8月23日国际油价止跌转涨</a><span class="time"> [08-24]</span></li>
              	<li><a href="pe/pesydt/20712.html" target="_blank" title="上游早报：原油及单体8月22日收盘价格">上游早报：原油及单体8月22日收盘价格</a><span class="time"> [08-23]</span></li>
            </ul>
        </div>
        <!-- 价格中心 -->
        <div class="div01 mb_10">
            <p class="list_title02"><span class="s s04"></span></p>
            <div class="div03 div03A">
                <ul>
                    <li>
                        <p class="p1"><a href="price/cc.html" title="国内出厂价" target="_blank">【国内出厂价】</a></p>
                        <p><a href="price/cc/LDPE.html" target="_blank" title="LDPE国内出厂价">LDPE</a><a href="price/cc/HDPE.html" target="_blank" title="HDPE国内出厂价">HDPE</a><a href="price/cc/LLDPE.html" target="_blank" title="LLDPE国内出厂价">LLDPE</a><a href="price/cc/_25E5_259D_2587_25E8_2581_259APP_25E7_25B2_2592.html" target="_blank" title="均聚PP粒国内出厂价">均聚PP粒</a><a href="price/cc/_25E5_2585_25B1_25E8_2581_259APP_25E7_25B2_2592.html" target="_blank" title="共聚PP粒国内出厂价">共聚PP粒</a><a href="price/cc/PP_25E7_25B2_2589.html" target="_blank" title="PP粉国内出厂价">PP粉</a><a href="price/cc/PVC_25E7_25B2_2589.html" target="_blank" title="PVC粉国内出厂价">PVC粉</a><a href="price/cc/PVC_25E7_25B3_258A.html" target="_blank" title="PVC糊国内出厂价">PVC糊</a></p>
                    </li>
                    <li>
                        <p class="p1"><a href="price/gn.html" title="国内市场价" target="_blank">【国内市场价】</a></p>
                        <p><a href="price/gn/LDPE.html" target="_blank" title="LDPE国内市场价">LDPE</a><a href="price/gn/HDPE.html" target="_blank" title="HDPE国内市场价">HDPE</a><a href="price/gn/LLDPE.html" target="_blank" title="LLDPE国内市场价">LLDPE</a><a href="price/gn/_25E5_259D_2587_25E8_2581_259APP_25E7_25B2_2592.html" target="_blank" title="均聚PP粒国内市场价">均聚PP粒</a><a href="price/gn/_25E5_2585_25B1_25E8_2581_259APP_25E7_25B2_2592.html" target="_blank" title="共聚PP粒国内市场价">共聚PP粒</a><a href="price/gn/PP_25E7_25B2_2589.html" target="_blank" title="PP粉国内市场价">PP粉</a><a href="price/gn/PVC_25E7_25B2_2589.html" target="_blank" title="PVC粉国内市场价">PVC粉</a><a href="price/gn/PVC_25E7_25B3_258A.html" target="_blank" title="PVC糊国内市场价">PVC糊</a></p>
                    </li>
                    <li>
                        <p class="p1"><a href="price/gj.html" title="国际市场价" target="_blank">【国际市场价】</a></p>
                        <p><a href="price/gj/LDPE.html" target="_blank" title="LDPE国际市场价">LDPE</a><a href="price/gj/HDPE.html" target="_blank" title="HDPE国际市场价">HDPE</a><a href="price/gj/LLDPE.html" target="_blank" title="LLDPE国际市场价">LLDPE</a><a href="price/gj/_25E5_259D_2587_25E8_2581_259APP_25E7_25B2_2592.html" target="_blank" title="均聚PP粒国际市场价">均聚PP粒</a><a href="price/gj/_25E5_2585_25B1_25E8_2581_259APP_25E7_25B2_2592.html" target="_blank" title="共聚PP粒国际市场价">共聚PP粒</a><a href="price/gj/PP_25E7_25B2_2589.html" target="_blank" title="PVC粉国际市场价">PVC粉</a></p>
                    </li>
                </ul>
            </div>
        </div>
         <!--装置日历  -->
        <div class="div01 device mb_10"> 
           <p class="list_title02"><a href="zzrl.html" target="_blank" title="更多装置日历"><span class="s s10"></span></a><a href="zzrl.html" target="_blank" class="c_color2 more" title="更多装置日历">更多</a>&nbsp;&nbsp;&nbsp;&nbsp;</p> 
			<div class="device_div" id="device_div">
                <div class="title">
                                		<a href="javascript:;" class="s">29</a>
                		<a href="javascript:;" class="s">28</a>
                		<a href="javascript:;" class="s">27</a>
                		<a href="javascript:;" class="s on">今天</a>
                		<a href="javascript:;" class="s">25</a>
                		<a href="javascript:;" class="s">24</a>
                		<a href="javascript:;" class="s">23</a>
                </div>
                <div class="content" style="display:none">
                    <ul>
                        <li data-href="/zzrl_PE_沈阳化工_0_0_0_0_0.html"><span class="co">沈阳化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_扬子石化_0_0_0_0_0.html"><span class="co">扬子石化</span>
                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_兰州石化_0_0_0_0_0.html"><span class="co">兰州石化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_天津联合_0_0_0_0_0.html"><span class="co">天津联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_宁波台塑_0_0_0_0_0.html"><span class="co">宁波台塑</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_天津联合_0_0_0_0_0.html"><span class="co">天津联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_中沙天津石化_0_0_0_0_0.html"><span class="co">中沙天津石化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                </div>
                <div class="content" style="display:none">
                    <ul>
                        <li data-href="/zzrl_PE_沈阳化工_0_0_0_0_0.html"><span class="co">沈阳化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_扬子石化_0_0_0_0_0.html"><span class="co">扬子石化</span>
                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_兰州石化_0_0_0_0_0.html"><span class="co">兰州石化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_天津联合_0_0_0_0_0.html"><span class="co">天津联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_宁波台塑_0_0_0_0_0.html"><span class="co">宁波台塑</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_天津联合_0_0_0_0_0.html"><span class="co">天津联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_中沙天津石化_0_0_0_0_0.html"><span class="co">中沙天津石化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                </div>
                <div class="content" style="display:none">
                    <ul>
                        <li data-href="/zzrl_PE_沈阳化工_0_0_0_0_0.html"><span class="co">沈阳化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_扬子石化_0_0_0_0_0.html"><span class="co">扬子石化</span>
                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_兰州石化_0_0_0_0_0.html"><span class="co">兰州石化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_天津联合_0_0_0_0_0.html"><span class="co">天津联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_宁波台塑_0_0_0_0_0.html"><span class="co">宁波台塑</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_天津联合_0_0_0_0_0.html"><span class="co">天津联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_中沙天津石化_0_0_0_0_0.html"><span class="co">中沙天津石化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                </div>
                <div class="content" >
                    <ul>
                        <li data-href="/zzrl_PE_上海金菲_0_0_0_0_0.html"><span class="co">上海金菲</span>
                        <span class="s" style="border:1px solid #0066ff; color:#0066ff;">转产</span>
                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_镇海炼化_0_0_0_0_0.html"><span class="co">镇海炼化</span>
                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_上海石化_0_0_0_0_0.html"><span class="co">上海石化</span>
                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_宁波富德_0_0_0_0_0.html"><span class="co">宁波富德</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        <span class="s" style="border:1px solid #cc9900; color:#cc9900;">低负荷</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_绍兴三圆_0_0_0_0_0.html"><span class="co">绍兴三圆</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_武汉石化_0_0_0_0_0.html"><span class="co">武汉石化</span>
                        <span class="s" style="border:1px solid #0066ff; color:#0066ff;">转产</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_福建联合_0_0_0_0_0.html"><span class="co">福建联合</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                </div>
                <div class="content" style="display:none">
                    <ul>
                        <li data-href="/zzrl_PE_沈阳化工_0_0_0_0_0.html"><span class="co">沈阳化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_大庆炼化_0_0_0_0_0.html"><span class="co">大庆炼化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_中韩石化_0_0_0_0_0.html"><span class="co">中韩石化</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_吉林石化_0_0_0_0_0.html"><span class="co">吉林石化</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_抚顺石化_0_0_0_0_0.html"><span class="co">抚顺石化</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_镇海炼化_0_0_0_0_0.html"><span class="co">镇海炼化</span>
                        <span class="s" style="border:1px solid #0066ff; color:#0066ff;">转产</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PE_蒲城清洁能源_0_0_0_0_0.html"><span class="co">蒲城清洁能源</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                </div>
                <div class="content" style="display:none">
                    <ul>
                        <li data-href="/zzrl_PE_沈阳化工_0_0_0_0_0.html"><span class="co">沈阳化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_大庆炼化_0_0_0_0_0.html"><span class="co">大庆炼化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_福建联合_0_0_0_0_0.html"><span class="co">福建联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_河北海伟_0_0_0_0_0.html"><span class="co">河北海伟</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_神华榆林_0_0_0_0_0.html"><span class="co">神华榆林</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_四川石化_0_0_0_0_0.html"><span class="co">四川石化</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_扬子石化_0_0_0_0_0.html"><span class="co">扬子石化</span>
                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                        <span class="s" style="border:1px solid #999999; color:#999999;">稳定</span>
                        </li>
                    </ul>
                </div>
                <div class="content" style="display:none">
                    <ul>
                        <li data-href="/zzrl_PE_沈阳化工_0_0_0_0_0.html"><span class="co">沈阳化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_大庆炼化_0_0_0_0_0.html"><span class="co">大庆炼化</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_福建联合_0_0_0_0_0.html"><span class="co">福建联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_河北海伟_0_0_0_0_0.html"><span class="co">河北海伟</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_扬子石化_0_0_0_0_0.html"><span class="co">扬子石化</span>
                        <span class="s" style="border:1px solid #33cccc; color:#33cccc;">排产</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_福建联合_0_0_0_0_0.html"><span class="co">福建联合</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                    <ul>
                        <li data-href="/zzrl_PP粒_大唐多伦煤化工_0_0_0_0_0.html"><span class="co">大唐多伦煤化工</span>
                        <span class="s" style="border:1px solid #ff0033; color:#ff0033;">停车</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 
        <!-- 数据中心 -->
        <div class="div01 mb_10">
            <p class="list_title02">
                <a class="s s08" href="indexsjzx.html" title="数据中心" target="_blank"></a>
                <a href="pesjzx.html" target="_blank" class="c_color2" title="PE数据中心">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplsjzx.html" target="_blank" class="c_color2" title="PP粒数据中心">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfsjzx.html" target="_blank" class="c_color2" title="PP粉数据中心">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvcsjzx.html" target="_blank" class="c_color2"title="PVC数据中心">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul class="list_1 mt_15 mb_10">
              	<li><a href="ppl/pplsjzx/20901.html" target="_blank" title="2016年7月PP进口数据统计">2016年7月PP进口数据统计</a><span class="time"> [08-25]</span></li>
              	<li><a href="ppl/pplsjzx/20899.html" target="_blank" title="2016年7月PP出口数据统计">2016年7月PP出口数据统计</a><span class="time"> [08-25]</span></li>
              	<li><a href="ppf/ppfsjzx/19529.html" target="_blank" title="2016年6月我国丙烯出口数据">2016年6月我国丙烯出口数据</a><span class="time"> [08-05]</span></li>
              	<li><a href="ppf/ppfsjzx/19530.html" target="_blank" title="2016年6月我国丙烯进口数据">2016年6月我国丙烯进口数据</a><span class="time"> [08-05]</span></li>
              	<li><a href="pe/pesjzx/19521.html" target="_blank" title="2016年7月份国内PE估算产量统计">2016年7月份国内PE估算产量统计</a><span class="time"> [08-04]</span></li>
            </ul>
        </div>
        <!-- 环球财经 -->
        <div class="div01 mb_10" id="global_finance">
            <p class="list_title02">
                <a class="s s09" href="indexhqcj.html" title="环球财经" target="_blank"></a>
                		   &nbsp;&nbsp;<a href="indexhqcj/79.html" target="_blank" class="c_color2" title="经济指标">经济指标</a>&nbsp;&nbsp;|						
                  		   &nbsp;&nbsp;<a href="indexhqcj/80.html" target="_blank" class="c_color2"title="财经要闻">财经要闻</a>&nbsp;&nbsp;&nbsp;&nbsp;
<!--                 <a href="/indexhqcj.html" target="_blank" class="c_color2 more" title="更多环球财经">更多</a>&nbsp;&nbsp;&nbsp;&nbsp; -->
            </p>
            <div class="div02">
                <p class="p1"><a href="index/indexhqcj/20891.html" target="_blank" title="负利率政策副作用：欧元区银行业一季度净利润大跌20%！">负利率政策副作用：欧元区银行业一季度净利润大跌20%！</a></p>
                <a href="index/indexhqcj/20891.html" target="_blank" title="负利率政策副作用：欧元区银行业一季度净利润大跌20%！"><img src="/Public/pc/upload/news/201608/38da7e1e-b816-42d9-8fde-664ef47bac6f.jpg" width="160" height="90" class="mr_10 fl" /></a>
                <div class="d">
                    <span class="intercept_text">根据路透，欧洲央行的调查显示，包括借贷、交易以及费用等主要银行盈利来源都较前一年下滑，净利润同比下滑20%至180亿欧元，约合202.5亿美元。</span><a href="index/indexhqcj/20891.html" target="_blank" class="c_color1" title="负利率政策副作用：欧元区银行业一季度净利润大跌20%！">[详细]</a>
                </div>
            </div>
            <ul class="list_1 mb_15">
            	<li><a href="index/indexhqcj/20987.html" target="_blank" title="连续第三天14天期逆回购 央行本周净投放已达3100亿元">连续第三天14天期逆回购 央行本周净投放已达3100亿元</a><span class="time">[09:52] </span></li>
            	<li><a href="index/indexhqcj/20892.html" target="_blank" title="不要怕！央妈没有收紧政策的意思 但宽松确实在延后">不要怕！央妈没有收紧政策的意思 但宽松确实在延后</a><span class="time"> [08-25]</span></li>
            </ul>
        </div>
        <!-- 塑料期货 -->
        <div class="div01 mb_10">
            <p class="list_title02">
                <a class="s s03" href="indexslqh.html" title="塑料期货" target="_blank"></a>
                <a href="peslqh.html" target="_blank" class="c_color2" title="PE塑料期货">PE</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pplslqh.html" target="_blank" class="c_color2" title="PP粒塑料期货">PP粒</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="ppfslqh.html" target="_blank" class="c_color2" title="PP粉塑料期货">PP粉</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="pvcslqh.html" target="_blank" class="c_color2"title="PVC塑料期货">PVC</a>&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
            <ul class="list_1 mt_10 mb_10">
              	<li><a href="ppf/ppfslqh/20975.html" target="_blank" title="8月26日期货开盘宏观参考">8月26日期货开盘宏观参考</a><span class="time">[09:05] </span></li>
              	<li><a href="ppf/ppfslqh/20882.html" target="_blank" title="8月25日期货开盘宏观参考">8月25日期货开盘宏观参考</a><span class="time"> [08-25]</span></li>
              	<li><a href="ppf/ppfslqh/20807.html" target="_blank" title="8月24日期货开盘宏观参考">8月24日期货开盘宏观参考</a><span class="time"> [08-24]</span></li>
              	<li><a href="ppf/ppfslqh/20724.html" target="_blank" title="8月23日期货开盘宏观参考">8月23日期货开盘宏观参考</a><span class="time"> [08-23]</span></li>
              	<li><a href="ppf/ppfslqh/20708.html" target="_blank" title="大商所PP期货主力合约1701持仓情况">大商所PP期货主力合约1701持仓情况</a><span class="time"> [08-22]</span></li>
            </ul>
        </div>
        <!-- 专题图片 -->
        <div class="activity_gallery">
			<ul class="img_list">
				<li><a href="../www.zhaosuliao.com/zixun/rmhd/16682.html" target="_blank"><img src="/Public/pc/upload/gallery/201608/f8213faf-01f5-4789-af63-9a2cd0666136.jpg" /></a></li>
				<li><a href="../www.zhaosuliao.com/huodong/saomachaihongbao" target="_blank"><img src="/Public/pc/upload/gallery/201608/a260ce1f-a603-4567-85bb-901b36e01a7c.jpg" /></a></li>
				<li><a href="../www.zhaosuliao.com/zixun/rmhd/16679.html" target="_blank"><img src="/Public/pc/upload/gallery/201608/b5412a3e-ef61-4b95-982e-4683fffdde07.jpg" /></a></li>
				<li><a href="../www.zhaosuliao.com/huodong/2nd_anniversary_activity3" target="_blank"><img src="/Public/pc/upload/gallery/201607/8fb1d668-b932-4058-977c-4d5792e2d6c7.jpg" /></a></li>
				<li><a href="../www.zhaosuliao.com/huodong/2nd_anniversary_activity4" target="_blank"><img src="/Public/pc/upload/gallery/201607/079b7989-2ef2-4b75-b4ab-44101e46f55c.jpg" /></a></li>
    		</ul>
  			<p class="dot">
				<a href="javascript:void(0);" class="on"><img src="/Public/pc/upload/gallery/201608/f8213faf-01f5-4789-af63-9a2cd0666136.jpg" /><span class="up"></span></a>
				<a href="javascript:void(0);" ><img src="/Public/pc/upload/gallery/201608/a260ce1f-a603-4567-85bb-901b36e01a7c.jpg" /><span class="up"></span></a>
				<a href="javascript:void(0);" ><img src="/Public/pc/upload/gallery/201608/b5412a3e-ef61-4b95-982e-4683fffdde07.jpg" /><span class="up"></span></a>
				<a href="javascript:void(0);" ><img src="/Public/pc/upload/gallery/201607/8fb1d668-b932-4058-977c-4d5792e2d6c7.jpg" /><span class="up"></span></a>
				<a href="javascript:void(0);" ><img src="/Public/pc/upload/gallery/201607/079b7989-2ef2-4b75-b4ab-44101e46f55c.jpg" /><span class="up"></span></a>
   			</p>
			<span class="ico"><a href="activitycenter">精彩活动</a></span>
		</div>
    </div>
</div>

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
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/trade.html#trade2" target="_blank"><b></b>如何委托交易</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/trade.html#trade3" target="_blank"><b></b>如何自己找货</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/trade.html#trade4" target="_blank"><b></b>如何查看采购单状态</a></p>
            </li>
            <li>
                <h3>我要卖塑料</h3>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/trade.html#trade7" target="_blank"><b></b>如何发布报价单</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/trade.html#trade6" target="_blank"><b></b>如何单条发布报价</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/trade.html#trade8" target="_blank"><b></b>如何报价采购信息</a></p>
            </li>
            <li class="list3">
                <h3>常见问题</h3>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/user.html#user1" target="_blank"><b></b>注册流程</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/user.html#user2" target="_blank"><b></b>无法登录/忘记密码</a></p>
                <p><i>▪&nbsp;&nbsp;</i><a href="../www.zhaosuliao.com/help/user.html#user3" target="_blank"><b></b>修改账户信息</a></p>
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
    <div class="in_box">
        <div class="box4">
            <span class="s">热门标签：</span>
            <div class="list">
                <div class="list_div">
                                    <a href="../www.zhaosuliao.com/company" target="_blank" title="塑料价格">塑料价格</a>
                    <a href="zzrl.html" target="_blank" title="最全石化装置动态">最全石化装置动态</a>
                    <a href="../www.zhaosuliao.com/baike/16587.html" target="_blank" title="PP塑料">PP塑料</a>
                    <a href="../www.zhaosuliao.com/baike/16583.html" target="_blank" title="POM塑料">POM塑料</a>
                    <a href="../www.zhaosuliao.com/baike/16595.html" target="_blank" title="通用塑料">通用塑料</a>
                    <a href="../www.zhaosuliao.com/baike/16600.html" target="_blank" title="塑料原料物性">塑料原料物性</a>
                    <a href="../www.zhaosuliao.com/baike/16574.html" target="_blank" title="PE塑料">PE塑料</a>
                    <a href="../www.zhaosuliao.com/baike/16544.html" target="_blank" title="PBT塑料">PBT塑料</a>
                    <a href="../www.zhaosuliao.com/baike/16545.html" target="_blank" title="HDPE塑料">HDPE塑料</a>
                    <a href="../www.zhaosuliao.com/baike/16565.html" target="_blank" title="HIPS塑料">HIPS塑料</a>
                    <a href="price/0_1_0_0_0_1_0_0.html" target="_blank" title="塑料价格行情">塑料价格行情</a>
                    <a href="price/cc.html" target="_blank" title="石化出厂价格查询">石化出厂价格查询</a>
                </div>
            </div>
            <a href="javascript:;" class="close"></a>
        </div>

        <div class="box5">
            <p>
                <a href="../www.zhaosuliao.com/about.html" target="_blank">关于我们</a> | 
                <a href="../www.zhaosuliao.com/zixun/gsdt/default.htm" target="_blank">公司动态</a> | 
                <a href="../www.zhaosuliao.com/zixun/mtbd/default.htm" target="_blank">媒体报道</a> | 
                <a href="../www.zhaosuliao.com/job.html" target="_blank">诚聘英才</a> | 
                <a href="../www.zhaosuliao.com/contact.html" target="_blank">联系我们</a> | 
                <a href="../www.zhaosuliao.com/feedback.html" target="_blank">意见反馈</a> | 
                <!-- <a href="http://www.zhaosuliao.com/ceo_mailbox.html" target="_blank">CEO邮箱</a> |  -->
                <a href="../www.zhaosuliao.com/law.html" target="_blank">法律声明</a> | 
                <a href="../www.zhaosuliao.com/sitemap.html" target="_blank">网站地图</a> | 
                <a href="../www.zhaosuliao.com/links.html" target="_blank">友情链接</a>
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
            <!--<a  key ="54a107ffc274e76dc1035520"  logo_size="124x47"  logo_type="realname"  href="http://www.anquan.org" ><script src="http://static.anquan.org/resources/fore/outer/js/aq_auth.js"></script></a>
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
</body>
</html>

<script type="text/javascript">
$(function(){
    function leftscroll(){
        var $imgList=$(".banner .img_list");
        var titleList =[{"title":"中国塑料市场(PE/PP/PVC)周度报告（20160820-0826）","url":"pe/pedybg/21028.html"},{"title":"【宏观塑评】伊朗参会欧佩克 国际油价迎反弹","url":"ppl/pplqwzl/21039.html"},{"title":"【装置扩能】2016年下半年PP装置投产计划（最新跟踪统计）","url":"ppl/pplqwzl/20234.html"}];
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

            $(".banner .dot a").removeClass("on");
            $(".banner .text").html(arr[0]);
            if (num == len - 1) {
                $(".banner .text").html(arr[0]);
                $(".banner .dot a").eq(0).addClass("on");
            } else {
                $(".banner .text").html(arr[num]);
                $(".banner .dot a").eq(num).addClass("on");
            }
            $imgList.stop(true);
            $imgList.animate({
                "left":-(num*w)
            },600);
        };

        $(".banner").mouseover(function() {
            clearInterval(times);
        }).mouseout(function() {
            clearInterval(times);
            time();
        });

        $(".banner .dot a").each(function(i){
            $(this).mouseover(function(){
                iNow=i;
                move(i);
            });
        });
    };
    leftscroll();


    function createQueryStr($target){
        var queryStr = [];
        $.each(["cate", "type", "material", "manufacturer"], function(i, item){
            queryStr.push([encodeURIComponent($.trim($target.data(item)))]);
        });
        return queryStr.join("_");
    };
    $(document)
        .on("click", "li.open_link", function(e){
            window.open("http://"+window.location.host+"/finalPrice/" + createQueryStr($(this)) + ".html");
        });


    
    //限制文字
    $("#real_time_news .intercept_text").interceptText(60);
    $("#depth_observation .intercept_text").interceptText(80);
    $("#authoritative_column .intercept_text").interceptText(80);
    $("#global_finance .intercept_text").interceptText(35);
    $(".studio .intercept_text").each(function(){
        $(this).interceptText(52);
    });
    
});
//装置日历
$().Tab('device_div','on');
</script>
<!--[if lte IE 8]>
<script type="text/javascript">
$(function(){
    $(".banner .dot").addClass("black");
});
</script>  
<![endif]-->