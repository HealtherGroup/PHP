
// var bj = 0;
// document.onscroll=function(){
// 	var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
// 	var cHeight=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;
// 	var oMenu = document.getElementById("menu");
// 	console.log(scrollTop);
// 	if(scrollTop>oMenu.offsetTop-150 && scrollTop<oMenu.offsetTop+150 && bj == 0){
// 		bj = 1;
// 		$(".menu-left-list").show();
// 		$(".menu-left-list").animate({
// 		    left: "27%"
// 		}, 600);
// 		$(".menu-right-list").show();
// 		$(".menu-right-list").animate({
// 		    right: "27%"
// 		}, 600);
		
// 		$(".btn").animate({
// 		    width: "69px"
// 		}, 600);
// 	}
// }

$("#login").click(function(){
	$(".drift").css("display","block");
})

$("#off").click(function(){
	$(".drift").css("display","none");
})

var inputbj = 0; 

//input框获取焦点时,值为空






var spanTab = $("#Tab span");
spanTab.eq(1).css({background:"#a4a4a4"});
//$("#Tab span").click(function(){
////	alert();
////	this.play();
//
//	spanTab.css({background:"#000"});
//	var index = spanTab.index(this);
//	$("#Tab span")
//	.eq(index)
//	.css({background:"#000"})
//	.siblings()
//	.css({background:"#a4a4a4"});
//	
//	$("video").hide()
//	.eq(index)
//	.show();
//})
//
//var video1 = document.getElementById("video1");
//var video2 = document.getElementById("video2");
//
//function pause1(){
//	video1.pause();
//}
//
//function pause2(){
//	video2.pause();
//}

