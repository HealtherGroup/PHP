window.onresize = function(){
	var w=window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
//	var h=window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
	//console.log(w);
	//console.log(h);
//	document.getElementById("这里放id").style.width = w+"px";
//	document.getElementById("这里放id").style.height = h+"px";
	console.log(w);
	
	if(w <= 1170){
		clearInterval(t);
	}
}

$(function(){
	var w=window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	if(w <= 1170){
		clearInterval(t);
	}
})


var t = setInterval("play()",3000);


$(".tier img").click(function(){
	clearInterval(t);
	
	var right = parseInt($(this).css("right"));
   	var left = parseInt($(this).css("left"));
   	
   	var w=window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
   	if(w <= 1170){
   		return;
   	}
// 	alert(right);
// 	alert(left);

	   	if(right < 435 && left > 435 && left-right > 3 || right == -300){
	   		$(this).animate({zIndex:"8"},10);
	   		$(this).animate({
	   			width:"478px",
	   			height:"319px",
	   			left: "0",
				top: "0",
				right: "0",
				bottom: "0"
	   		},200)
	   		
	   		$(".tier img").each(function(){
	   			
	   			if($(this).css("zIndex") !=8 && parseInt($(this).css("right")) > 435 || parseInt($(this).css("right")) == 300){
					$(this).animate({zIndex:"0"},10);
					$(this).animate({
					   			width:"379px",
					   			height:"252px",
					   			left: "300",
								top: "0",
								right: "-300",
								bottom: "0"
					},200)
				}
	   			
				if($(this).css("zIndex") >= 8){
				$(this).animate({zIndex:"5"},10);
				$(this).animate({
				   			width:"379px",
				   			height:"252px",
				   			left: "-300",
							top: "0",
							right: "300",
							bottom: "0"
					},200)
				}
				
				
			});
	   	}
	   	
	   	if(right > 435 && left < 435 && right-left > 3 || right == 300){
	   		$(this).animate({zIndex:"8"},10);
	   		$(this).animate({
	   			width:"478px",
	   			height:"319px",
	   			left: "0",
				top: "0",
				right: "0",
				bottom: "0"
	   		},200)
	   		
	   		$(".tier img").each(function(){
				
				
				if($(this).css("zIndex") !=8 && parseInt($(this).css("left")) > 435 || parseInt($(this).css("left")) == 300 ){
					$(this).animate({zIndex:"0"},10);
					$(this).animate({
					   			width:"379px",
					   			height:"252px",
					   			left: "-300",
								top: "0",
								right: "300",
								bottom: "0"
					},200)
				}
				
				if($(this).css("zIndex") >= 8){
					$(this).animate({zIndex:"5"},10);
					$(this).animate({
					   			width:"379px",
					   			height:"252px",
					   			left: "300",
								top: "0",
								right: "-300",
								bottom: "0"
					},200)
				}
			});
	   	}
	// 	t = setInterval("play()",1500);
   	
})





function play(){
	$(".tier img").each(function(){
		if(parseInt($(this).css("right")) < 435 && parseInt($(this).css("left")) > 435 || parseInt($(this).css("right")) == -300){
			$(this).animate({zIndex:"8"},10);
			$(this).animate({
			   			width:"478px",
			   			height:"319px",
			   			left: "0",
						top: "0",
						right: "0",
						bottom: "0"
			},500)
		}else if($(this).css("zIndex") >= 8){
			$(this).animate({zIndex:"5"},10);
			$(this).animate({
			   			width:"379px",
			   			height:"252px",
			   			left: "-300",
						top: "0",
						right: "300",
						bottom: "0"
			},500)
		}else if(parseInt($(this).css("right")) > 435 && parseInt($(this).css("left")) < 435 || parseInt($(this).css("right")) == 300){
			$(this).animate({zIndex:"0"},10);
			$(this).animate({
			   			width:"379px",
			   			height:"252px",
			   			left: "300",
						top: "0",
						right: "-300",
						bottom: "0"
			},500)
		}
	})
}

//轮播特效 (循环调用函数)
//var t = timedCount();
//function timedCount(){
// 	play();
// 	setTimeout("timedCount()",2000);
//}

$(".tier img").mouseover(function(){
	clearInterval(t);
});

$(".tier img").mouseout(function(){
	clearInterval(t);
	t = setInterval("play()",3000);
});

