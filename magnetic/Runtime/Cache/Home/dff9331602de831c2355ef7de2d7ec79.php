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
</div>
<div class="member_wrap" >
    <div class="member_content" >
        <!--底部公共部分-->
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
        <p class="welcome">2016年08月28日  尊敬的 <span class="color_f90"><?php echo ($userdata['username']); ?>(<?php echo ($userdata['phone']); ?>)</span>，欢迎来到找塑料网会员中心！<a href="http://jr.zhaosuliao.com/my" style="margin-left: 60px; color: #3232FF;">申请金融服务</a></p>
        <div class="apply_vip">
            <img class="tan" src="http://www.zhaosuliao.com/resources/fore/image/member/tan.png"/>
            <div class="vip_text">
                    <p>您的基本资料未填写完成。</p>
                    <p>请完善您的基本资料并申请正式会员，享受更多会员服务。</p>
                    <a class="vip_btn" href="http://www.zhaosuliao.com/member/account/preAudit">立即申请正式会员</a>
            </div>
        </div>
        <div class="pulic_title">我的专属交易员</div>
            <p class="no_vip">您还未申请正式会员，不能享有专属交易员服务。</p>
            <p class="p_a">
                <a class="btn_a" href="http://www.zhaosuliao.com/member/account/preAudit">立即申请认证</a>
            </p>
        <div class="pulic_title mar_t15">最新采购信息</div>
        <div class="list_div">
            <ul class="list_ul">
                <li>
                    <span class="sp1">采购：</span>
                    <span class="sp2"> DMDA8008 </span>
                    <span class="sp3">中石化福炼 </span>
                    <span class="sp4"> 10吨  </span>
                    <span class="sp5"> 8900 至  8950 元/吨 </span>
                    <span class="sp6">佛山 </span>
                    <span class="sp7">正在洽谈</span>
                    <a class="supply_button" href="javascript:void(0)" data-id="231212">我要供货</a>
                </li>
                <li>
                    <span class="sp1">采购：</span>
                    <span class="sp2"> S1003 </span>
                    <span class="sp3">宁夏宝丰 </span>
                    <span class="sp4"> 200吨  </span>
                    <span class="sp5"> 8200 至  8210 元/吨 </span>
                    <span class="sp6">佛山 </span>
                    <span class="sp7">正在洽谈</span>
                    <a class="supply_button" href="javascript:void(0)" data-id="231210">我要供货</a>
                </li>
                <li>
                    <span class="sp1">采购：</span>
                    <span class="sp2"> SG-5 </span>
                    <span class="sp3">新疆圣雄能源 </span>
                    <span class="sp4"> 30吨  </span>
                    <span class="sp5"> 5550 元/吨 </span>
                    <span class="sp6">佛山 </span>
                    <span class="sp7">正在洽谈</span>
                    <a class="supply_button" href="javascript:void(0)" data-id="231206">我要供货</a>
                </li>
                <li>
                    <span class="sp1">采购：</span>
                    <span class="sp2"> PA-757 </span>
                    <span class="sp3">台湾奇美 </span>
                    <span class="sp4"> 2吨  </span>
                    <span class="sp5"> 12050 至  12100 元/吨 </span>
                    <span class="sp6">中山 </span>
                    <span class="sp7">正在洽谈</span>
                    <a class="supply_button" href="javascript:void(0)" data-id="231204">我要供货</a>
                </li>
                <li>
                    <span class="sp1">采购：</span>
                    <span class="sp2"> SG-5 </span>
                    <span class="sp3">新疆中泰 </span>
                    <span class="sp4"> 30吨  </span>
                    <span class="sp5"> 6060 元/吨 </span>
                    <span class="sp6">佛山 </span>
                    <span class="sp7">正在洽谈</span>
                    <a class="supply_button" href="javascript:void(0)" data-id="231203">我要供货</a>
                </li>
            </ul>
        </div>   
    </div>
</div>
</div>

<!-- <div id="myMask" style="display:block"></div> 
<div id="mysupply" style="display:block;">
    <div class="supply_title">
        <a class="close_supply" href="javascript:void(0)"></a>
    </div>
    <div class="supply_content">
        <p class="supply_p1">采购内容： 采购：LDPE 2102TX00 伊朗国家石化 20吨 9800元 上海</p>
        <p class="supply_p2">请在下方填写您的真实报价（价格必填），并对您的货物描述清楚。</p>
        <p class="supply_p3">例如：ABS HP171 惠州中海油乐金 5吨 13450元 东莞市 东莞塑胶交易市场</p>
        <p class="supply_p4">ABS AG15E1 台湾台化 5吨 13800 东莞塑胶交易市场</p>
        <div class="supply_input">
            <div class="supply_line_input">
                <span class="supply_input_text">公司名称：</span>
                <input type="text" class="supply_input_inp" />
                <span class="supply_input_text">企业类型：</span>
                <select class="supply_select">
                    <option value="">--请选择--</option>
                    <option value="">上游厂家</option>
                    <option value="">贸易商</option>
                    <option value="">终端</option>
                </select>
                  
                <span class="supply_input_text">地区：</span>
                <div class="area_wrapper">
                    <div class="rovince_parent parent_div province_div" data-target="province">
                        <input type="text" readonly class="areapop_input"/>
                        <input type="hidden"  name="provinceId" />
                    </div>
                    <div class="city_parent parent_div city_div" data-target="city">
                        <input type="text" readonly class="areapop_input" />
                        <input type="hidden"  name="cityId" />
                    </div>
                </div>
                
            </div>
            <div class="supply_line_input">
                <span class="supply_input_text">主营品种：</span>
                <input type="text" class="supply_input_inp " />
                
                <span class="supply_input_text">联系人：</span>
                <input type="text" class="supply_input_inp "  />
                
            </div>
        </div>
        
        <div class="supply_textarea_div">
            <div class="textarea_left">货物描述：</div>
            <div class="textarea_right">
                <textarea></textarea>
            </div>
        </div>
        <p class="supply_tips"><span>不合理报价会被系统自动屏蔽</span></p>
        <input class="supply_submit" type="submit" value="我要供货"/>
    </div>
</div>
-->
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