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
	<script>
	$(function(){
		
		
		/***资源列表 公司移入显示效果***/
		$(".company").mouseover(function(){
			$(this).find('.company_div').show();
			$(this).css('position','relative');
		}).mouseout(function(){
			$(this).find('.company_div').hide();
			$(this).css('position','static');
		});
		
		/*显示条数点击效果**/
		$(".page_limit span").click(function(){
			$(".page_limit span").removeClass('click');
			$(this).addClass('click');
		});
		/******价格范围效果******/
		
		

        //选择价格范围提交
        $(".absolute_span").on("click",function()
        {
            $("#form_filter").submit();
        });

        //排序
        $(".list_content_title .paixu,.list_content_title .paixu2").on("click",function()
        {
            $("#sort").val($(this).data("sort"));
            $("#form_filter").submit();
        });
		$(".jgfw_sub").click(function(){
			 $("#form_filter").submit();
		});
	});
    
    </script>
   	    
    <form method="get" action="/product/list" id="form_filter">
         <div id="xhzysx" class="clearfix">
     		<div class="xhzysx_content">
            	<div class="content_theme">
                        <h3 class="xhzysx_title"><span class="fcolor_0">现货资源</span>筛选</h3>	
<div class="flxz_type">
    <div class="sx_type clearfix">
        <h4><?php echo ($hotcity['name']); ?></h4>
        <p style="display:block;">
            <?php if(is_array($hotcity['city'])): $i = 0; $__LIST__ = $hotcity['city'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Product/product');?>?city=<?php echo ($vo['cityname']); ?>" data-key="city" data-val="<?php echo ($vo['citycode']); ?>" class="f "><?php echo ($vo['cityname']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </p>
    </div>
    
    <?php if(is_array($variety)): $i = 0; $__LIST__ = $variety;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="sx_type clearfix">
        <h4><?php echo ($vo1['varietyname']); ?></h4>
        <p>
            <?php if(is_array($vo1['grade'])): $i = 0; $__LIST__ = $vo1['grade'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Product/product');?>?gradeid=<?php echo ($vo2['gradeid']); ?>" data-key="<?php echo ($vo1['varietyid']); ?>" data-val="<?php echo ($vo2['gradeid']); ?>" class="f"><?php echo ($vo2['gradename']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </p>     
        <span style="display:none" class="down_btn open" href="javascript:void(0)">展开</span>
        <span class="up_btn close" href="javascript:void(0)">收起</span>
    </div><?php endforeach; endif; else: echo "" ;endif; ?> 
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
    <!-----现货资源列表--------> 
     
     <div id="xhzy_list" class="mar_t20">
     	<div class="xhzy_list_content">
        	<div class="list_content">
            	<div class="list_content_title">
                	<div class="list_title fl"><span class="fcolor_0">现货资源</span>列表</div>
                    <div class="limit_su fl">共搜到<span class="fcolor_8"><?php echo ($data_count); ?></span>条数据</div>

                   

                    <div class="paixu fl click" data-sort="0">默认排序</div>
                    <div class="paixu2 fl " data-sort="1">价格从低到高</div>

                    <input type="hidden" name="defaultSort" id="sort" value="" />
                    <div class="jgfw fl">
                    	<p class="jgfw_text">价格范围</p>
                        <p class="jgfw_shuru">
                        	<input type="text" name="price_from" id="price_from" onkeyup="this.value=this.value.replace(/[^\d]/g,'') " placeholder="最低价" value="0" class="on" />
                           	<i>-</i>
                            <input type="text" name="price_to" id="price_to" onkeyup="this.value=this.value.replace(/[^\d]/g,'') " placeholder="最高价" value="0" class="on"/>
                        </p>
                        <a href="javascript:void(0);" class="jgfw_sub">确定</a>
                    </div>
                    <div class="yxsj fl">
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
                        <input id="pageNo" name="pageNo" type="hidden" value="1" />
						<input id="pageSize" name="pageSize" type="hidden" value="20" />
                    </div>
                </div>
            </div>
            <table class="xhzy_table">
            	<tr class="tr_h39">
                	<th class="td_w80">品种 </th>
                    <th class="td_w120">牌号 </th>
                    <th class="td_w130">厂家</th>
                    <th class="td_w100">数量</th>
                    <th class="td_w100">价格</th>
                    <th class="td_w100">交货地</th>
                    <th class="td_w120">交货时间</th>
                    <th class="td_w200">公司</th>
                    <th class="td_w100">更新时间</th>
                    <th class="td_w150">操作</th>
                </tr>
                <?php if(is_array($json_arr)): $i = 0; $__LIST__ = $json_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="tr_h56">
                	<td class="td_w80"><span><?php echo ($vo['varietyname']); ?></span></td>
                    <td class="td_w120"><span><?php echo ($vo['gradename']); ?></span></td>
                    <td class="td_w130"><?php echo ($vo['factoryname']); ?></td>
                    <td class="td_w100"><?php echo ($vo['quantity']); echo ($vo['unitname']); ?></td>
                    <td class="td_w100 fcolor_8">￥<?php echo ($vo['unitprice']); ?></td>
                    <td class="td_w100"><?php echo ($vo['deliveryplace']); ?></td>
                    <td class="td_w120">现货</td>
                    <td class="td_w200">
                    	<div class="company"><p class="gs"><?php echo ($vo['companyname']); ?></p>
                            <div class="company_div">
                            	<p><?php echo ($vo['companyname']); ?></p>
                                <p>江小姐 13723792661</p>
                                <p class="tip">联系我时，请说是在找塑料网上看到的，谢谢！</p>
                            </div>
                        </div>
                    </td>
                    <td class="td_w100">
                        2小时前
                    </td>
                    <td class="td_w150">
                        <img src="/Public/pc/image/main/resource_close.png" />
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                
            </table>
        </div>
     </div>     
    </form>
<!--页码开始-->            
<div class="pager">
    <div class="digg" style="center"><?php echo ($page); ?></div>
</div>
<!--页码结束-->
<!--     <input type="hidden" id="pageUrlPre" value="/product/list?cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo="/>
    <div class="page_a02">
    	<div class="page_box">
<span class="on">1</span>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=2">2</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=3">3</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=4">4</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=5">5</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=6">6</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=7">7</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=2">下一页</a>
<a href="list@cate=&material=&manufacturer=&company=&city=&keyword=&defaultSort=0&price_from=0&price_to=0&dayCon=-5&pageSize=20&pageNo=785">尾页</a>
<span class="total">共 785 页</span>
<span class="to">转到第 <input type="text" value="1" class="n jump_page" /> 页</span>
<span class="go">GO</span>
</div>

	</div> -->
    
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
<script>
    function getInputPage() {
        var page = $("#page-num").val();
        var page_url = decodeURI($("#page-submit").attr("data-page"));
        page_url = page_url.replace('[PAGE]', page)
        location.href = page_url;
    }
    $("#page-num").keydown(function(e) {
        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
        if (key == 13) {
            e.preventDefault();
            getInputPage()
        }
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