
$(function(){
	var h=window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
//	alert(h);

	$(".side-bar").height(h);
})


//获取视窗宽高的方法
window.onresize = function(){
//var w=window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
var h=window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

$(".side-bar").height(h);
//console.log(w);
//console.log(h);

//document.getElementById("这里放id").style.width = w+"px";
//document.getElementById("这里放id").style.height = h+"px";
}

$(".cart").mouseover(function(){
	$(".cart").css("background","#000000");
})

$(".cart").mouseout(function(){
	$(".cart").css("background","#313030");
})


