
var	bj = 1;

$(".show-logistics").click(function(){
	if(bj == 1){
		$(this).siblings().show();
		bj = 0;
	}else{
		$(this).siblings().hide();
		bj = 1;
	}
	
})





