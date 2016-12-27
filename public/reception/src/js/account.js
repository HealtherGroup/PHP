$(".account-list ul li").click(function(){
	$(".account-list ul li").css("border","none")
	$(this).css("borderBottom","3px solid #89C86D")
	
	var index = $(this).index();
	
	$(".data-warp .data-item").css("display","none");
	$(".data-warp .data-item").eq(index).css("display","block")
})
