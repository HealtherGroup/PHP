
$(function(){
	$(".i-listbtn").prop("hide",true);
})

$(".i-listbtn").click(function(){
	if($(".i-listbtn").prop("hide")){
		$(".hide-list").css("display","block");
		$(".i-listbtn").prop("hide",false);
	}else{
		$(".hide-list").css("display","none");
		$(".i-listbtn").prop("hide",true);
	}
})

$(function(){
	$(".i-search").prop("hide",true);
})

$(".i-search").click(function(){
//	alert($(".i-search").prop("hide"));
	if($(".i-search").prop("hide")){
		$(".nav-list").css("display","none");
		$(".search-case").css("display","block")
		$(this).addClass("i-close");
		$(".i-search").prop("hide",false);
	}else{
		$(".nav-list").css("display","inline-block");
		$(".search-case").css("display","none")
		$(this).removeClass("i-close");
		$(".i-search").prop("hide",true);
	}
})



/*隐藏列表按钮*/
function TT(){
	$(".hide-list").css("display","none");
}


//切换class的函数 有则去 无则添
function toggleBA(){
	$(".i-personal").toggleClass("i-personal-after");
}


