$(function() {
	(function($) {
		$.fn.Tab2 = function(idName, selecd, noselecd) {
			$("#" + idName).find(".f_title_tab a").each(function(i) {
				$(this).mouseover(function() {
					$("#" + idName).find(".f_title_tab a").removeClass(selecd);
					$("#" + idName).find(".f_title_tab a").addClass(noselecd);
					$(this).removeClass(noselecd);
					$(this).addClass(selecd);
					$("#" + idName).find(".content_top_xhzy").hide();
					$("#" + idName).find(".content_top_xhzy").eq(i).show();
					$("#" + idName).find(".content_text_list").hide();
					$("#" + idName).find(".content_text_list").eq(i).show();
				});
			});
		};
	})(jQuery);
	$().Tab2('new_fourf', 'four_selecd', 'four_noselecd');
	$().Tab2('new_threef', 'three_selecd', 'three_noselecd');
	$().Tab2('new_twof', 'two_selecd', 'two_noselecd');
	(function($) {
		$.fn.tab = function(idName, selecdName) {
			$("#" + idName).find(".f_title_tab a").each(function(i) {
				$(this).mouseover(function() {
					$("#" + idName).find(".f_title_tab a").removeClass(selecdName);
					$(this).addClass(selecdName);
					$("#" + idName).find(".content_top_xhzy").hide();
					$("#" + idName).find(".content_top_xhzy").eq(i).show();
					$("#" + idName).find(".content_text_list").hide();
					$("#" + idName).find(".content_text_list").eq(i).show();
				});
			});
		};
	})(jQuery);
	$().tab('new_onef', 'selecd');
	$(".sear_cont .sear_inp").focus(function() {
		$(this).css({
			border: '1px solid #3399EE'
		}).css({
			'border-right': 0
		});
	});
	$(".sear_cont .sear_inp").blur(function() {
		$(this).css({
			border: '1px solid #ddd'
		}).css({
			'border-right': 0
		});
	});
	$(".price_title_right a").each(function(i) {
		$(this).mouseover(function() {
			$(".price_content").hide();
			$(".price_content").eq(i).show();
			$(".price_title_right .line").stop();
			var w = $(".price_title_right .line").width();
			$(".price_title_right .line").animate({
				left: w * i
			}, 300);
		});
	});
	$(".price_content").each(function() {
		$(this).find(".content_block").last().css({
			"border": '0'
		});
	})
	$(".zixun_box").each(function(i) {
		$(this).mouseover(function() {
			$(".zixun_box").css('background', '#f8f8f8');
			$(this).css('background', '#fff');
			$(".zixundt .line").stop();
			$(".zixundt .line").animate({
				'left': $(".zixun_box").width() * (i + 1)
			}, 200);
		});
	});
	$(".content_text_list li ").each(function(i) {
		$(this).mousemove(function(ev) {
			var str = $(this).find('p').eq(0).html() + '&nbsp;' + $(this).find('p').eq(1).html();
			$("#tip_message").show();
			$("#tip_message").html(str);
			var t = $(window).scrollTop();
			var x = ev.clientX - $("#tip_message").width() - 40;
			var y = ev.clientY + t - 15;
			$("#tip_message").css({
				left: x,
				top: y
			});
		});
		$(this).mouseout(function() {
			$("#tip_message").hide();
		});
	});
	$(".mj_message_table").on('mousemove', '.td_w84', function(ev) {
		var str = $(this).parent().find('span').html();
		$("#tip_message").show();
		$("#tip_message").html(str);
		var t = $(window).scrollTop();
		var x = ev.clientX + 20;
		var y = ev.clientY + t - 15;
		$("#tip_message").css({
			left: x,
			top: y
		});
	});
	$(".mj_message_table").on('mouseout', '.td_w84', function(ev) {
		$("#tip_message").hide();
	});
	var searchToggle = {
		tab: function() {
			$(window).scroll(function() {
				if ($(window).scrollTop() > 100) {
					$("#search").show().css({
						position: 'fixed'
					});
					$(".lift").css({
						"top": "72px"
					});
				} else {
					$("#search").hide().css({
						position: ''
					});
					$(".lift").css({
						"top": "192px"
					});
				};
			});
		}
	};
	searchToggle.tab();
	var lift = {
		pos: {},
		get_pos: function() {
			$("body").find(".floor_flag").each(function(index) {
				lift.pos[index] = $(this).offset().top;
			});
		},
		style: function(index) {
			var $this = $(".lift ul").find("li").eq(index);
			var color = $this.css("borderLeftColor");
			$this.css({
				"background": color,
				"color": "#FFFFFF"
			}).siblings("li").each(function() {
				$(this).css({
					"background": "#FFFFFF",
					"color": $(this).css("border-color")
				});
			});
			$(".lift").find(".arrow").css({
				"top": (19 + 52 * index) + "px",
				"border-left-color": color
			});
		},
		go: function() {
			$(".lift ul").find("li").on("click", function() {
				$(window).off("scroll", lift.scroll);
				var index = $(this).index();
				$("html,body").animate({
					scrollTop: lift.pos[index] - 60
				}, 500, function() {
					lift.style(index);
					$(window).on("scroll", lift.scroll);
				});
			});
		},
		scroll: function() {
			var s_top = $(window).scrollTop();
			if (s_top > lift.pos[0] - 100) {
				$(".lift").fadeIn(500);
				var n = $(".lift ul").find("li").length;
				for (i = 0; i < n; i++) {
					if ($("body").find(".floor_flag").eq(i).offset().top - 60 <= s_top) {
						lift.style(i);
					};
				};
			} else {
				$(".lift").fadeOut(500);
			}
		},
		init: function() {
			lift.get_pos();
			lift.go();
			$(window).on("scroll", lift.scroll);
		}
	};
	lift.init();
	var gallery = {
		i: 0,
		n: $(".banner_img .banner_focus").find("a").length,
		timer: null,
		change: function(index) {
			$(".banner_img .img_list").find("li").eq(index).show().siblings().hide();
			$(".banner_img .banner_focus").find("a").eq(index).addClass("on").siblings().removeClass("on");
		},
		start: function() {
			gallery.timer = setInterval(function() {
				gallery.i == gallery.n - 1 ? gallery.i = 0 : ++gallery.i
				gallery.change(gallery.i);
			}, 3000);
		},
		stop: function() {
			clearInterval(gallery.timer);
		},
		event: function() {
			$(".banner_img .banner_focus").find("a").on("mouseover", function() {
				gallery.change($(this).index());
				gallery.stop();
			}).on("mouseout", gallery.start);
			$(".banner_img .img_list").find("li").on("mouseover", gallery.stop).on("mouseout", gallery.start);
		},
		init: function() {
			gallery.change(0);
			gallery.start();
			gallery.event();
		}
	};
	gallery.init();
	$("#login_index").on("click", function() {
		show_dialog_login();
	});
	$(".purchase_scroll1").find("table").scrollcontent(50);
	$(".purchase_scroll2").find("table").scrollcontent(50);
	$(".purchase_scroll3").find("table").scrollcontent(50);
	$(".purchase_scroll4").find("table").scrollcontent(50);
	$(".search_div").find(".search_input").on("focus", function() {
		var emptyStr0 = "请输入品种/牌号/厂家/公司进行搜索";
		var emptyStr1 = "请输入品种/牌号/厂家进行搜索";
		if ($(this).val() == emptyStr0 || $(this).val() == emptyStr1) {
			$(this).val("").css({
				"color": "#000"
			});
		}
	}).on("blur", function() {
		var index = $(".search_div .selecd_btn").find("span").text();
		var emptyStr = index == "物性表" ? "请输入品种/牌号/厂家进行搜索" : "请输入品种/牌号/厂家/公司进行搜索";
		if ($.trim($(this).val()) == "") {
			$(this).val(emptyStr).css({
				"color": "#999"
			});
		};
	});
	$(".search_div").find(".search_sub").on("click", function() {
		var emptyStr0 = "请输入品种/牌号/厂家/公司进行搜索";
		var emptyStr1 = "请输入品种/牌号/厂家进行搜索";
		var word = $.trim($(".search_div").find("input[name='keyword']").val());
		if (word == emptyStr0 || word == emptyStr1 || word == '') {
			alert("请输入搜索条件");
			$("input[name='keyword']").focus();
			return false;
		} else {
			var index = $(".search_div .selecd_btn").find("span").text();
			if (index == "物性表") {
				location.href = SITE_URL + "wuxingbiao/search@word=" + word;
			} else {
				location.href = SITE_URL + "product/list@keyword=" + word;
			};
		};
	});
	$(".search_div").on("keydown", function(e) {
		if (e.keyCode == "13") {
			$(".search_div").find(".search_sub").trigger("click");
		};
	});
	$(".selecd_btn").hover(function() {
		$(".selecd_btn2").show();
	}, function() {
		$(".selecd_btn2").hide();
	});
	$(".selecd_btn2 li").each(function() {
		$(this).click(function() {
			$(".selecd_btn span").html('');
			var str = $(this).html();
			$(".selecd_btn span").html(str);
			$(".selecd_btn2").hide();
			var index = $(".search_div .selecd_btn").find("span").text();
			var emptyStr0 = "请输入品种/牌号/厂家/公司进行搜索";
			var emptyStr1 = "请输入品种/牌号/厂家进行搜索";
			var emptyStr = index == "物性表" ? emptyStr1 : emptyStr0;
			var input = $(".search_div").find(".search_input");
			if ($.trim(input.val()) == "" || $.trim(input.val()) == emptyStr0 || $.trim(input.val()) == emptyStr1) {
				input.val(emptyStr).css({
					"color": "#999"
				});
			};
		});
	});
	$(".logoin_before .log").hover(function() {
		$(this).css({
			'border': '1px solid #3399EE'
		});
	}, function() {
		$(this).css({
			'border': '1px solid #ddd'
		});
	});
	$(".logoin_before .lj_reg").hover(function() {
		$(this).css({
			'border': '1px solid #3399EE'
		});
		$(".logoin_before .log").css('borderRight', '0');
	}, function() {
		$(this).css({
			'border': '1px solid #ddd'
		});
		$(".logoin_before .log").css('borderRight', '1px solid #ddd');
		$(this).css({
			'borderLeft': '0'
		});
	});
	$(".span_a .close").click(function(e) {
		$.setcookie('name', 'banner');
		$("#mlzx_a").hide();
		e.preventDefault();
		e.cancelBubble = true;
		e.stopPropagation();
		return false;
	});
	var now_time = $("#now_time").val();

	function set_time() {
		var t = new Date();
		$("#notice .r").html(t.pattern("今天是：yyyy年MM月dd日 EEE HH:mm:ss"));
		now_time++;
	};
	set_time();
	setInterval(set_time, 1000);

	function createQueryStr($target) {
		var queryStr = [];
		$.each(["cate", "material", "manufacturer"], function(i, item) {
			queryStr.push([item, encodeURIComponent($.trim($target.data(item)))].join("="));
		});
		return queryStr.join("&");
	};
	$(document).on("click", "tr.open_link", function(e) {
		window.open("http://" + window.location.host + "/product/list?dayCon=-30&" + createQueryStr($(this)));
	});
	$(".real_time").mouseover(function() {
		$(".real_timeA").show();
	}).mouseout(function() {
		$(".real_timeA").hide();
	});
	$(".left_text_body .intercept_text").each(function() {
		var content = $(this).html();
		content = content.replace(/\s/g, "");
		if (content.length > 70) {
			var content = content.substring(0, 70);
			$(this).html(content + "... ");
		}
	});
	$(".center_wrap .intercept_text").each(function() {
		var $this = $(this);
		var content = $this.html();
		if ($this.length > 0) {
			var content = content.replace(/\s/g, "");
			if (content.length > 40) {
				content = content.substring(0, 40);
				$(this).html(content + "... ");
			};
		};
	});
});
$.fn.Tab = function(idName, selecd) {
	$("#" + idName).find(".title a").each(function(i) {
		$(this).click(function() {
			$("#" + idName).find(".title a").removeClass(selecd);
			$(this).addClass(selecd);
			$("#" + idName).find(".content").hide();
			$("#" + idName).find(".content").eq(i).show();
		});
	});
};
$.fn.adScroll = function() {
	var $this = $(this),
		$imgList = $this.find(".img_list"),
		$dotA = $this.find(".dot a"),
		$prev = $this.find(".prev"),
		$next = $this.find(".next");
	var w = $imgList.find("li").eq(0).width();
	var lis = $imgList.find("li").eq(0).clone(true);
	$imgList.append(lis);
	var len = $imgList.find("li").length;
	$imgList.css("width", len * w);
	var iNow = 0;
	var times = null;
	time();

	function time() {
		times = setInterval(function() {
			iNow++;
			move(iNow);
		}, 5000);
	};

	function move(num) {
		if (num > len - 1) {
			$imgList.css("left", 0);
			num = 1;
			iNow = num;
		};
		if (num < 0) {
			$imgList.css("left", -((len - 1) * w));
			num = len - 2;
			iNow = num;
		};
		$dotA.removeClass("on");
		if (num == len - 1) {
			$dotA.eq(0).addClass("on");
		} else {
			$dotA.eq(num).addClass("on");
		}
		$imgList.stop(true);
		$imgList.animate({
			"left": -(num * w)
		}, 600);
	};
	$this.mouseover(function() {
		clearInterval(times);
	}).mouseout(function() {
		clearInterval(times);
		time();
	});
	$prev.click(function() {
		iNow--;
		move(iNow);
	});
	$next.click(function() {
		iNow++;
		move(iNow);
	});
	$dotA.each(function(i) {
		$(this).mouseover(function() {
			iNow = i;
			move(i);
		});
	});
};