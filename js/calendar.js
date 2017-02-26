$(function(){
	init_window();
	$("#circle").click(function(e){
		$("#act").removeClass("hide");
		init_window();
		barIn();
	})
	$(".actBg").click(function(e){
		
		barOut();
	})
	
	<!-- 页面改变初始化页面布局 -->
	$(window).resize(function(){
		init_window();
	})
	
	hostChange();
	pageChange();
	<!-- 月份的选择特效 -->
	monthSelect();

	<!-- 圆圈的旋转 -->
	circlerotate();
})
function init_window(){
	$("#body").height($(window).height());
	$(".main").height($(window).height());
	$(".monthSelect").width($(".main").width());
	$(".monthSelect").css("margin-top",$(".main").height()*50/720);
	$(".dateSelect").width($(".main").width());
	$(".dateSelect").css("margin-top",$(".main").height()*200/720);
	$(".branch").width(($(".monthSelect").width())/6);
	$(".branch").height($(".branch").width()*0.5);
	$("#circle").width(($(".dateSelect .row .s7").width()));
	$("#circle").height($("#circle").width());
	$("#date").width(($(".dateSelect .row .s5").width()));
	$(".calendar").width($("#date").width()*0.4);
	$(".calendar").height($(".calendar").width()*516/400);
	$(".calendar").css("margin-left",$("#date").width()*0.3);
	$(".calendar").css("margin-top",$("#circle").height()*0.3);
	// $(".calendarNum").css("left",$(".calendar").width()*1/5);
	$(".calendarNum").css("top",$(".calendar").height()*230/516);
	// $(".calendarNum").width($(".calendar").width()*178/432);
	// $(".calendarNum").height($(".calendar").height()*166/469);

	$("#act").height($(window).height());
	if(hosts[i].length<=6){
		$(".hostcard h1").css("font-size",'40px');
	}
	else if(hosts[i].length<=9){
		$(".hostcard h1").css("font-size",'28px');
	}
	else{
		$(".hostcard h1").css("font-size",'24px');
	}
	$("#actContent").css("top",($(window).height()-$("#actContent").height())/2);
	var pl=$(".classifycard .btn").css("padding-left").split('p');
	var classifycardPaddingLeft=parseInt(pl[0]);
	$(".classifycard .btn").css("margin-right",($(".classifycard").width()-$(".classifycard .btn").width()-classifycardPaddingLeft*2)/2);

}
function barIn(){
	$(".hostcard").jQueryTween({
		from:{
			translate:{y:-500}
		},
		to:{
			translate:{y:0}
		},
		easing: TWEEN.Easing.Circular.Out,
		duration:1000
	},
	function(){
		$(".classifycard").removeClass("hide");
		var pl=$(".classifycard .btn").css("padding-left").split('p');
		var classifycardPaddingLeft=parseInt(pl[0]);
		$(".classifycard .btn").css("margin-right",($(".classifycard").width()-$(".classifycard .btn").width()-classifycardPaddingLeft*2)/2);
	});

	$(".classifycard").jQueryTween({
		from:{
			translate:{
				y:250
			},
			opacity:0
		},
		to:{
			translate:{
				y:0
			},
			opacity:1
		},
		easing:TWEEN.Easing.Circular.Out,
		duration:500,
		delay:950
	},
	function(){
		$(".title-container").removeClass("hide");
	},
	function(){
		
	});

	$(".title-container").jQueryTween({
		from:{
			translate:{
				y:-150
			},
			opacity:0
		},
		to:{
			translate:{
				y:0
			},
			opacity:1
		},
		easing:TWEEN.Easing.Circular.Out,
		duration:500,
		delay:1450
	},
	function(){
		$(".description-container").removeClass("hide");
	},
	function(){
		
	});

	$(".description-container").jQueryTween({
		from:{
			translate:{
				y:250
			},
			opacity:0
		},
		to:{
			translate:{
				y:0
			},
			opacity:1
		},
		easing:TWEEN.Easing.Circular.Out,
		duration:500,
		delay:1900
	},
	function(){},
	function(){
		
	});

}
function barOut(){
	$(".hostcard").jQueryTween({
		from:{
			translate:{y:0}
		},
		to:{
			translate:{y:-500}
		},
		easing: TWEEN.Easing.Circular.Out,
		duration:1000
	},
	function(){
		
	});

	$(".classifycard").jQueryTween({
		from:{
			translate:{
				y:0
			},
			opacity:1
		},
		to:{
			translate:{
				y:250
			},
			opacity:0
		},
		easing:TWEEN.Easing.Circular.Out,
		duration:500,
		delay:450
	},
	function(){
		$(".classifycard").addClass("hide");
	},
	function(){
		
	});

	$(".title-container").jQueryTween({
		from:{
			translate:{
				y:0
			},
			opacity:1
		},
		to:{
			translate:{
				y:-150
			},
			opacity:0
		},
		easing:TWEEN.Easing.Circular.Out,
		duration:500,
		delay:900
	},
	function(){
		$(".title-container").addClass("hide");
	},
	function(){
		
	});

	$(".description-container").jQueryTween({
		from:{
			translate:{
				y:0
			},
			opacity:1
		},
		to:{
			translate:{
				y:250
			},
			opacity:0
		},
		easing:TWEEN.Easing.Circular.Out,
		duration:500,
		delay:1350
	},
	function(){
		$(".description-container").addClass("hide");
		$("#act").addClass("hide");
	},
	function(){
		
	});

}
function monthSelect(){
	var leftPos=null;
	var leftPosTemp=null;
	var monthX=$(".branch").width();
	var monthY=$(".branch").height();
	var oldX=null;
	var isDownMonth=false;
	$(".wrapper").mousedown(function(e){
		isDownMonth=true;
		oldX=e.clientX;
	}
	);
	$("html").mousemove(function(e){
		if(isDownMonth){
			$(".wrapper").css("left",leftPosTemp+e.clientX-oldX+'px');
			leftPos=leftPosTemp+e.clientX-oldX;
			var x=$(".branch1").offset().left;
			console.log(x);
			x=3-Math.floor((x-$(".leftpart").width()+(monthY))/(monthX));
			for(var i=1;i<=12;i++){
				if(i==x){
					$(".branch"+i).css("opacity",1);
					$(".branch"+i).css("width",2*monthX+'px');
					$(".branch"+i).css("height",2*monthY+'px');
					$(".branch"+i).css("margin-top",0+'px');
				}
				else{
					$(".branch"+i).css("opacity",0.1);
					$(".branch"+i).css("width",monthX+'px');
					$(".branch"+i).css("height",monthY+'px');
					$(".branch"+i).css("margin-top",0.5*monthY+'px');
				}
			}
			$(".branch"+i)
			console.log(x);
		}
	});
	$("html").mouseup(function(e){
		leftPosTemp=leftPos;
		isDownMonth=false;
		oldY=null;
	})
}	
function circlerotate(){
	var angleTemp=0;
	var angle=0;
	var oldY= null;
    var isDownCircle = false;
    $("#circle").mousedown(function(e){
        isDownCircle = true;
        oldY = e.clientY;
    });
    $("html").mousemove(function(e){
        if(isDownCircle){
            $("#circle").css("transform","rotate("+((e.clientY-oldY)/2+angleTemp)+"deg)");
            var tr=$("#circle").css("transform");
            var values = tr.split('(')[1].split(')')[0].split(',');
            var a = values[0];
            var b = values[1];
            var c = values[2];
            var d = values[3];

            var scale = Math.sqrt(a * a + b * b);


            var sin = b / scale;
             angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
            
            var  date=0;
            if(angle>=0&&angle<=180){
                date=parseInt(angle/10)+1;
            }
            else{
                date=parseInt(angle/10)+36;
            }
            console.log(date);
            $(".calendarNum").html(date);
            
        }
    });
    $("html").mouseup(function(e){
        angleTemp=angle;
        
        isDownCircle = false;
        oldY = null;
    });

    function show_num(n){
        var len=String(n).length;
        if(len==1){
            $('.calNum0').css("background-position",'0px 0px');
            var numDate=String(n).charAt(0);
            var y=(-parseInt(numDate)*200);
            console.log(y);
            $('.calNum1').css("background-position",'0px '+y+'px');
        }
        if(len==2){
            for(var i=0;i<len;i++){
                var numDate=String(n).charAt(i);
                var y=(-parseInt(numDate)*200);
                var obj=$('.calNum'+i);
                obj.css("background-position",'0px '+y+'px');
            }
        }
        
    }
}
{
var hosts=new Array('计算机学院','信息与通信工程学院','电子工程学院','自动化学院');
var i=0;
var len=hosts.length;
function hostNext(){
	i=(i+1)%len;
	if(hosts[i].length<=6){
		$(".hostcard h1").css("font-size",'40px');
	}
	else if(hosts[i].length<=9){
		$(".hostcard h1").css("font-size",'28px');
	}
	else{
		$(".hostcard h1").css("font-size",'24px');
	}
	
	$(".hostcard h1").jQueryTween({
		from:{
			rotate:{x:0}
		},
		to:{
			rotate:{x:360}
		},
		duration:1500,
	},
	function(){},
	function(){
		$(".hostcard h1").html(hosts[i]);
	});
}
function hostChange(){
	window.setInterval("hostNext()",6000);
}
}	
		
function pageChange(){
	$(".nav-button").on('click',function(e){
		$(".description-container").css("z-index",'1');
		var $this=$(this);
		showPage($this.attr("id"));
	}
	)
	function showPage(pageId){
		$(".nav-button").removeClass("selected");
		$("#"+pageId).addClass("selected");
		// $(".page-container-branch").addClass("hide");
		// $("#page-container-"+pageId).removeClass("hide");
		// $("#page-container-"+pageId).addClass("selected");

		var pageSelected=$(".page-container-branch.selected"),
			pageSelectId=$("#page-container-"+pageId),
			pageSelectIdTitle=pageSelectId.find(".title-container"),
			pageSelectIdDesc=pageSelectId.find(".description-container");

		$(".page-container-branch.selected .description-container").jQueryTween({
			from:{
				height:475
			},
			to:{
				height:0
			},
			duration:400,
			easing: TWEEN.Easing.Sinusoidal.Out
		},
		function(){
			pageSelected.addClass("hide");
			$(".page-container-branch.selected .description-container").css("height",'475px');
			pageSelected.removeClass("selected");
			pageSelectId.removeClass("hide");
			pageSelectId.addClass("selected");
		});

		$(".selected .title-container").jQueryTween({
			from:{
				translate:{
					y:0
				}
			},
			to:{
				translate:{
					y:140
				}
			},
			duration:400,
			easing:TWEEN.Easing.Sinusoidal.Out
		});

		pageSelectIdDesc.jQueryTween({
			from:{
				height:0
			},
			to:{
				height:475
			},
			duration:1000,
			delay:350,
			easing:TWEEN.Easing.Sinusoidal.Out
		});

		pageSelectIdTitle.jQueryTween({
			from:{
				translate:{
					y:150
				}
			},
			to:{
				translate:{
					y:0
				}
			},
			duration:1000,
			delay:350,
			easing:TWEEN.Easing.Sinusoidal.Out
		},
		function(){
			$(".description-container").css("z-index",'2');
		});
	}
}