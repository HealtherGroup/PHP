$(".payment li").click(function(){
	$(".payment li ").removeClass("pay-active");
	$(this).toggleClass("pay-active");
})
