$(function(){$(".open_1").click(function(){$(this).hide();$(".close_1").show();$(".rmdq_fl").show();$(this).siblings('p').hide();$(".sx_type").eq(0).addClass('bottom_line');})
$(".close_1").click(function(){$(this).hide();$(".open_1").show();$(".rmdq_fl").hide();$(this).siblings('p').show();$(".sx_type").eq(0).removeClass('bottom_line');})
$(".content_theme").on('click','.open',function(){var w=0;$(this).hide().siblings('.close').show();$(this).siblings('p').find('a').each(function(i){w+=$(this).width()+25;})
var bei=Math.ceil(w/$(this).siblings('p').width());var h=$(this).siblings('p').height();$(this).siblings('p').css({'height':bei*h});w=0;})
$(".content_theme").on('click','.close',function(){$(this).hide().siblings('.open').show();$(this).siblings('p').css('height','31');})
$(".yxsj .select").mouseover(function(){$(".select_list").show();}).mouseout(function(){$(".select_list").hide();})
$(".sxtj_qb").on("click",function()
{$("#form_filter :input").val("");$("#pageNo").val(1);$("#pageSize").val(20);$("#form_filter").submit();});$(".sx_type").find(".f").on("click",function()
{$("#"+$(this).data("key")).val($(this).data("val"));$("#price_from,#price_to,#sort,#sortmode").val("");$("#form_filter").submit();});$(".sxtj").find("em").on("click",function()
{$("#"+$(this).data("key")).val("");$("#price_from,#price_to,#time,#sort,#sortmode").val("");$("#form_filter").submit();});$(".yxsj").find("li").on("click",function()
{$("#time").val($(this).data("val"));$("#form_filter").submit();});$(".page_limit").find("span").on("click",function()
{$("#pageSize").val($(this).data("val"));$("#form_filter").submit();});});