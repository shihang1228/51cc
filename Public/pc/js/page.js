function page(n,s){$("#pageNo").val(n);$("#pageSize").val(s);$("#form_filter").submit();return;};$(function(){$('input.jump_page').bind("keyup",function(event){if(event&&event.keyCode==13){$(this).parent().next(".go").click();}})
$("span.go").click(function(){var $input=$(this).prev(".to").children("input");var num=$input.val();var baike=$("#pageUrlPrebaike").val();var amount_num=$(this).prev(".to").prev(".total").val().split(" ")[1];var reg='^\\d+$';if(isNaN(num)){alert("只能输入数字");$input.val(1);return false;}
if(!num.match(reg)){alert("只能输入数字");$input.val(1);return false;}
if(num<1){alert("请输入大于1的数字");$input.val(1);return false;}
if(num>amount_num){num=amount_num;}
if(baike!='.html'){baike='';}
location.href=$("#pageUrlPre").val()+num+baike;});});