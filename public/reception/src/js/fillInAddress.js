//alert($(".checkbox").prop("checked"));
$(".label:after").css("display","none");

$(".label").click(function(){
	
	if(!$(".checkbox").prop("checked")){
		$(".label").addClass("label-after");
		$(".label").removeClass("label-before");
	}else{
		$(".label").addClass("label-before");
		$(".label").removeClass("label-after");
	}
})

