$(function(){
    /*工具条的增删改查 start*/
    manager_tool = {
            reload : function (id) {
                $('#'+id).datagrid('reload');
            },
            redo : function (id) {
                $('#'+id).datagrid('unselectAll');
            },
            add : function(id,title){
                $('#'+id+"_add").form('clear');
                $("input[type='hidden']").attr("value",'');
                $("#"+id).datagrid("unselectAll");
                $('#'+id+'_add').dialog('open').dialog('setTitle',title);
                //$('input[name="manager"]').focus();
            },
            doSearch:function(id){
                var serialize = $("."+id+"-tool-form").serializeJson();
                $("#"+id).datagrid({queryParams: serialize });
            },
            showdetail : function(id,url,paramid,col_array){
                var rows = $('#'+id).datagrid('getSelections');
                if (rows.length > 1) {
                    $.messager.alert('警告操作！', '只能选定一条数据！', 'warning');
                }else if(rows.length == 1){
                    $('#'+id+'_detail').dialog('open').dialog('setTitle','明细详情');
                    //$('#'+id+'_detail').datagrid('load',{});//清空下方DateGrid 
                     
                    $('#'+id+'_detail').datagrid({
                        url : url,
                        queryParams:{orderid:rows[0][paramid]},
                        fit : false,
                        fitColumns : true,//自适应，自动展开收缩大小，防止水平滚动
                        striped : true,//是否显示斑马效果
                        rownumbers : true,//显示行数
                        singleSelect:true,//选中一行还是多行，true是选中一行
                        border : false,
                        pagination : true,
                        pageSize : 10,
                        pageList : [10, 20, 30, 40, 50],
                        pageNumber : 1,
                        columns : col_array
                    })
                    
                }else if (rows.length == 0) {
                    $.messager.alert('警告操作！', '查看至少选定一条数据！', 'warning');
                }
            },
            resultdetail : function(id,url,paramid,col_array){
                var rows = $('#'+id).datagrid('getSelections');
                if (rows.length > 1) {
                    $.messager.alert('警告操作！', '只能选定一条数据！', 'warning');
                }else if(rows.length == 1){
                    $('#'+id+'_detail').dialog('open').dialog('setTitle','明细详情');
                    //$('#'+id+'_detail').datagrid('load',{});//清空下方DateGrid 
                     
                    $('#'+id+'_detail').datagrid({
                        url : url,
                        queryParams:{orderid:rows[0][paramid]},
                        fit : false,
                        fitColumns : true,//自适应，自动展开收缩大小，防止水平滚动
                        striped : true,//是否显示斑马效果
                        rownumbers : true,//显示行数
                        singleSelect:true,//选中一行还是多行，true是选中一行
                        border : false,
                        pagination : false,
                        columns : col_array
                    })
                    
                }else if (rows.length == 0) {
                    $.messager.alert('警告操作！', '查看至少选定一条数据！', 'warning');
                }
            },
            remove : function (id,url,attr) {
                var rows = $('#'+id).datagrid('getSelections');
                if (rows.length > 0) {
                    $.messager.confirm('确定操作', '确定要删除所选的记录吗？', function (flag) {
                        if (flag) {
                            var ids = [];
                            for (var i = 0; i < rows.length; i ++) {
                                ids.push(rows[i][attr]);
                            }
                            //console.log(ids.join(','));
                            $.ajax({
                                type : 'POST',
                                url : url,
                                data : {
                                    ids : ids.join(','),
                                },
                                beforeSend : function () {
                                    $('#'+id).datagrid('loading');
                                },
                                success : function (data) {
                                    if (data['result']) {
                                        $('#'+id).datagrid('loaded');
                                        $('#'+id).datagrid('load');
                                        $('#'+id).datagrid('unselectAll');
                                        $.messager.show({
                                            title : '提示',
                                            msg : data['msg'] + '条记录被删除成功！',
                                        });
                                    }else{
                                        $.messager.alert({
                                            title : '提示',
                                            msg : data['msg'],
                                        });
                                        $('#'+id).datagrid('loaded');
                                    }
                                },
                            });
                        }
                    });
                } else {
                    $.messager.alert('提示', '请选择要删除的记录！', 'info');
                }
            },
            edit : function(id,url,attr,attr1,attr2,func){
                var rows = $('#'+id).datagrid('getSelections');
                if (rows.length > 1) {
                    $.messager.alert('警告操作！', '编辑记录只能选定一条数据！', 'warning');
                }else if(rows.length == 1){
                    $('#'+id+'_add').form('load',url+rows[0][attr]).dialog('open');
                    func(rows[0][attr1],rows[0][attr2]);
                    
                }else if (rows.length == 0) {
                    $.messager.alert('警告操作！', '编辑记录至少选定一条数据！', 'warning');
                }
            },
            /*余额充值*/
            recharge : function(id,url,attr){
                var rows = $("#"+id).datagrid('getSelections');
                if(rows.length >1){
                    $.messager.alert('警告操作！', '余额充值只能选定一条数据！', 'warning');
                }else if(rows.length == 1){
                    $('#'+id+'_recharge').form('load',{customerid:rows[0][attr]}).dialog('open');
                    var departId = $('#departId').combobox({
                        url:'index.php/Home/Customer/getDepartment',
                        editable:false,
                        valueField:'deptid',
                        textField:'deptname',
                        onSelect:function(record){
                            liandong("customer_recharge","employeeId",'/index.php/Home/Customer/getEmployee?deptid='+record.deptid,'employeeid','employeename');
                        }
                    });
                    liandong("customer_recharge","employeeId",'/index.php/Home/Customer/getEmployee?deptid='+$("#departId").val(),'employeeid','employeename');
                }else if (rows.length == 0) {
                    $.messager.alert('警告操作！', '余额充值至少选定一条数据！', 'warning');
                }
            }
        }
    /*工具条的增删改查 end*/

    /*添加设备-适用lease*/
    $(".add-shebei").on("click",function(){
        var muban_tr = $(this).siblings(".table-muban").find("tr").clone();
        $(this).siblings("#guige").find("tbody").append(muban_tr);
    })
    /*新增按钮新增一行规格*/
    $(".icon-add-spec").on("click",function(e){
        var muban_tr = $(this).closest("#guige").siblings(".table-muban").find("tr").clone();
        $(this).closest("#guige").find("tbody").append(muban_tr);
    })
    /*点击减号删除本条记录*/
    $("#guige").on("click",".icon-jian",function(e){
        e.preventDefault();
        $(this).closest("tr").remove();
    })
    /*规格名称触发change事件填充整行*/
        $("#guige").on("change",".td2",function(e){
            e.preventDefault();
            var code = $(this).val();
            var $this = $(this);
            var $siblings = $this.parent().siblings();
            var url = $this.closest("#guige").data("url");
           $.ajax({
                url:url,
                data:"code="+code,
                type:'POST',
                dataType:'json',
                success:function(data){
                    if(data['rows'].length != 0){
                        
                        $siblings.find(".td1").val(data['rows'][0].goodscode);
                        $siblings.find(".td3").val(data['rows'][0].goodsspec);
                        $siblings.find(".td4").val(data['rows'][0].goodsprice);
                        $siblings.find(".td5").val(data['rows'][0].goodsnum);
                        $siblings.find(".td6").val(data['rows'][0].sumofmoney);
                    }
                    
                }
           })
        })
        /*规格名称触发change事件填充整行 end*/

})
/*回车事件*/
$('#guige').on("keydown",".td1",function (e){
    if (e.keyCode == 13) {
       var code = $(this).val();
       var $this = $(this);
       var $siblings = $this.parent().siblings();
       var url = $(this).closest("#guige").data("url");
       $.ajax({
            url:url,
            data:"code="+code,
            type:'POST',
            dataType:'json',
            success:function(data){
                if(data['rows'].length != 0){
                    $this.val(data['rows'][0].goodscode);
                    
                    $siblings.find(".td2").val(data['rows'][0].goodsid);
                    $siblings.find(".td3").val(data['rows'][0].goodsspec);
                    $siblings.find(".td4").val(data['rows'][0].goodsprice);
                    $siblings.find(".td5").val(data['rows'][0].goodsnum);
                    $siblings.find(".td6").val(data['rows'][0].sumofmoney);
                }
                
            }
       })
    }
});
function liandong(parentid,id,url,valurField,textField){
    $("#"+parentid).find("#"+id).combobox({
        width:322,
        height:32,
        editable:false,
        url:url,
        method:'GET',
        valueField:valurField,
        textField:textField
    })
}
// function liandong(id,url,valurField,textField){
// 	$("#"+id).combobox({
// 		editable:false,
// 		url:url,
//         method:'GET',
// 		valueField:valurField,
// 		textField:textField
// 	})
// }
/*保存*/
function savePro(id,option,url){
    if ($('#'+id+"_"+option).form('validate')){
        $('#'+id+"_"+option).form('submit',{
            url: url,
            onSubmit: function(){
                $.messager.progress({
                    text : '正在处理中...',
                });
                return $(this).form('validate');
            },
            onBeforeLoad:function(){
                $.messager.progress({
                    text : '正在处理中...',
                });
            },
            success: function(data){
                $.messager.progress('close');
                var newdata = jQuery.parseJSON(data);
                if(newdata['result']){
                    $.messager.alert({
                        title : '提示',
                        msg : '提交成功',
                    });
                    $('#'+id+"_"+option).dialog('close').form('reset');
                    $('#'+id).datagrid('reload');
                }else{
                    $.messager.alert({
                        title : '提示',
                        msg : newdata['msg'],
                    });
                }
            }
        });
    }
}
/*数组打印*/
function writeObj(obj){ 
    var description = ""; 
    for(var i in obj){   
        var property=obj[i];   
        description+=i+" = "+property+"\n";  
    }   
    alert(description); 
} 
/*数据表格封装*/
function public_datagrid(id,col_array,url){
    /*列表展示*/
    $('#'+id).datagrid({
        url : url,
        fit : true,
        fitColumns : true,//自适应，自动展开收缩大小，防止水平滚动
        striped : true,//是否显示斑马效果
        rownumbers : true,//显示行数
        singleSelect:true,//选中一行还是多行，true是选中一行
        border : false,
        pagination : true,
        pageSize : 10,
        pageList : [10, 20, 30, 40, 50],
        pageNumber : 1,
        sortName : 'date',//哪些列可以进行排序
        sortOrder : 'desc',
        toolbar : '#'+id+'_tool',//顶部工具栏
        columns : col_array
    });
}
/*新增弹窗*/
function addDialog(id,option,title){
    $('#'+id+"_"+option).dialog({
        width : 750,
        title : title,
        modal : true,
        closed : true,
        iconCls : 'icon-user-add',
        buttons: [{
            id:'btnsubmit_'+id+'_'+option,
            text:'提交',
            iconCls:'icon-add-new'
        },{
            id:'btnreset_'+id+'_'+option,
            text:'取消',
            iconCls:'icon-redo',
            handler : function () {
                $.messager.progress('close');
                $('#'+id+'_'+option).dialog('close').form('reset');
            },
        }]
    });
}
 /*城市联动*/
function liandong_provinceId(id){
    $("#"+id).find("#provinceId").combobox({
        width:322,
        height:32,
        url:'/index.php/Home/Address/getprovinceid',
        editable:false,
        valueField:'provincecode',
        textField:'provincename',
        onSelect:function(record){
            liandong(id,"cityId",'/index.php/Home/Address/getcityid?provincecode='+record.provincecode,'citycode','cityname');
        }
    });
    var provinceId = $("#"+id).find("#provinceId").val();
    $("#"+id).find('#cityId').combobox({
        width:322,
        height:32,
        editable:false,
        url:'/index.php/Home/Address/getcityid?provincecode='+provinceId,
        valueField:'citycode',
        textField:'cityname',
        onSelect:function(record){
            liandong(id,"countyId",'/index.php/Home/Address/getcountyid?citycode='+record.citycode,'countycode','countyname');
        }
    });
    var cityId = $("#"+id).find("#cityId").val();
    liandong(id,"countyId",'/index.php/Home/Address/getcountyid?citycode='+cityId,'countycode','countyname');
}
/*serialize封装json对象*/
(function($){  
    $.fn.serializeJson=function(){  
        var serializeObj={};  
        $(this.serializeArray()).each(function(){  
            serializeObj[this.name]=this.value;  
        });  
        return serializeObj;  
    };  
})(jQuery);

 function addTab(text,href){
    if(href){
        if ($('#tabs').tabs('exists', text)){
            $('#tabs').tabs('select', text);
            var tab_select = $('#tabs').tabs('getSelected');
            // $('#tabs').tabs('update', {
            //     tab: tab_select,
            //     options: {
            //         title: text,
            //         content:'<iframe scrolling="yes" frameborder="0" src="'+href+'" style="width:100%;height:100%;"></iframe>'
            //     }
            // });
            refreshTab({tabTitle:text,url:href});

        }else {
            $('#tabs').tabs('add', {
                fit:true,
                cache:true,
                title : text,
                closable : true,
                //href : href
                content:'<iframe scrolling="yes" frameborder="0" src="'+href+'" style="width:100%;height:100%;"></iframe>'
            });
        }
    }
}
/*更新tab*/
function refreshTab(cfg){  
      var refresh_tab = cfg.tabTitle?$('#tabs').tabs('getTab',cfg.tabTitle):$('#tabs').tabs('getSelected');  
      if(refresh_tab && refresh_tab.find('iframe').length > 0){  
      var _refresh_ifram = refresh_tab.find('iframe')[0];  
      var refresh_url = cfg.url?cfg.url:_refresh_ifram.src;  
      _refresh_ifram.contentWindow.location.href=refresh_url;  
      }  
} 

function getDatagridNum(id){
    var grid = $('#'+id);  
    var options = grid.datagrid('getPager').data("pagination").options;   
    var total = options.total; 
    return total;
}

//初始化左侧
function InitLeftMenu() {
    $("#leftnav").accordion({animate:true,fit:true,border:false});
    var url = $("#input-nav").val();
    $.ajax({
        url:url,
        type:"POST",
        dataType:"json",
        success:function(_menus){
            var selectedPanelname = '';
            $.each(_menus.menus, function(i, n) {
                var menulist ='';
                menulist +='<div title="'+n.menuname+'"  icon="" style="overflow:auto;width: 188px;">';
                menulist += '<ul class="ul_list" id="nav">';
                $.each(n.menus, function(j, o) {
                    menulist += '<li><div><a ref="'+o.menuid+'" href="'+o.url+'" rel="' + o.url + '" target="mainFrame"><span class="icon" ></span><span class="nav">' + o.menuname + '</span></a></div></li>';

                    if(o.child && o.child.length>0)
                    {
                        menulist += '<ul class="third_ul">';
                        $.each(o.child,function(k,p){
                            menulist += '<li><div><a ref="'+p.menuid+'" href="#" rel="' + p.url + '" ><span class="icon '+p.icon+'" >&nbsp;</span><span class="nav">' + p.menuname + '</span></a></div> </li>';
                        });
                        menulist += '</ul>';
                    }

                    //menulist+='</ul>';
                })
                menulist += '</ul></div>';
//console.log(menulist);
                $('#leftnav').accordion('add', {
                    title: n.menuname,
                    content: menulist,
                        border:false,
                    iconCls: 'icon ' + n.icon
                });
                if(i==0)
                    selectedPanelname =n.menuname;

            });
            $('#leftnav').accordion('select',selectedPanelname);
        }//success结束
    })//ajax结束
}

    /*饼状图*/
function piechart(pie_data){
    $('#container-pie').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            height:260
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        colors: ['#f63', '#2ab7ff'],
        exporting:{
            enabled:false
        },
        credits: {
            enabled: false
        },
        series: [{
            type: 'pie',
            name: '百分比',
            data: pie_data
        }]
    });
}