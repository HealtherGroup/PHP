var bj = 1;

$(".side-btn").click(function(){
	if( bj == 1){
		if($(".classify-list").css("width") == "-150px"){
			$(".classify-list").animate({
				left: "0px"
			},300)
		}else{
			$(".classify-list").animate({
				left: "0"
			},300)
		}
		
		
		
		bj = 0;
	}else{
		if($(".classify-list").css("width") == "150px"){
			$(".classify-list").animate({
				left: "-150px"
			},300)
		}else{
			$(".classify-list").animate({
				left: "-50%"
			},300)
		}
		
		bj = 1;
	}
	
	
	
	
})