$.json={"tostring":function(object)
{var string="{";for(var x in object)
{string+='"'+x+'":'+object[x];}
string+="}";return string;},"count":function(object)
{var n=0;for(var x in object)
{++n;}
return n;}};$.setcookie=function(name,value,life)
{var cookie=name+"="+escape(value);if(life>0)
{var date=new Date();date.setTime(date.getTime()+life*1000);cookie+="; expires="+date.toGMTString();}
document.cookie=cookie;}
$.getcookie=function(name)
{var cookie=document.cookie;var array=cookie.split("; ");var n=array.length;for(var i=0;i<n;i++)
{var arr=array[i].split("=");if(arr[0]==name)
{return arr[1];}}
return"";}
$.deletecookie=function(name)
{var date=new Date();date.setTime(date.getTime()-1000);document.cookie=name+"=''; expires="+date.toGMTString();}
$.checkspace=function(string)
{return string.match(/\s+/);};$.ischinese=function(string)
{return string.match(/[\u4E00-\u9FA5]/g);};$.ismobile=function(string)
{return string.match(/^1[34578][0-9]{9}$/);}
$.stripspace=function(string)
{return string.replace(/\s*/g,"");};Date.prototype.pattern=function(fmt)
{var o={"M+":this.getMonth()+1,"d+":this.getDate(),"h+":this.getHours()%12==0?12:this.getHours()%12,"H+":this.getHours(),"m+":this.getMinutes(),"s+":this.getSeconds(),"q+":Math.floor((this.getMonth()+3)/3),//季度"S":this.getMilliseconds()};var week={"0":"\u65e5","1":"\u4e00","2":"\u4e8c","3":"\u4e09","4":"\u56db","5":"\u4e94","6":"\u516d"};if(/(y+)/.test(fmt))
{fmt=fmt.replace(RegExp.$1,(this.getFullYear()+"").substr(4-RegExp.$1.length));}
if(/(E+)/.test(fmt))
{fmt=fmt.replace(RegExp.$1,((RegExp.$1.length>1)?(RegExp.$1.length>2?"\u661f\u671f":"\u5468"):"")+week[this.getDay()+""]);}
for(var k in o)
{if(new RegExp("("+k+")").test(fmt))
{fmt=fmt.replace(RegExp.$1,(RegExp.$1.length==1)?(o[k]):(("00"+o[k]).substr((""+o[k]).length)));}}
return fmt;}
$.fn.scrollcontent=function(interval)
{var $this=$(this);var box=$this.closest("div")
var m=box.height();var n=$this.height();if(n>=m)
{$this.append($this.html());var i=0;var timer;var start=function()
{timer=setInterval(function()
{box.scrollTop(i);i===n?i=0:i++;},interval);}
var stop=function()
{clearInterval(timer);}
start();box.on("mouseover",stop).on("mouseout",start);}};