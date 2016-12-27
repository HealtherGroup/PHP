
$(".del").click(function(){
	
	var r=confirm("确定删除产品此项收获信息？");
	if(r == true){
		$(this).parents(".info-no").remove();
	}
})


var bj = 1;

//收货人名称

$(".consignee").focusout(function(){
	var consignee = $(".consignee").val();
	if(consignee == ""){
		$(this).siblings("span").css("display","block")
		bj = 0;
	}
})


//手机
$(".phone").focusout(function(){
	var consignee = $(".phone").val();
	var phone = /^1[34578]\d{9}$/;
	if(consignee == "" || !phone.test(consignee)){
		$(this).siblings("span").css("display","block")
		bj = 0;
	}
})


//填写省份
$(".province").focusout(function(){
	var consignee = $(".province").val();
	if(consignee == ""){
		$(this).siblings("span").css("display","block")
		bj = 0;
	}
})


//填写详细的地址
$(".location").focusout(function(){
	var consignee = $(".location").val();
	if(consignee == ""){
		$(this).siblings("span").css("display","block")
		bj = 0;
	}
})


//当所有文本框 
var bjl;

$("form").submit(function(){
	$(".input-warp input").focusout();
	bjl = bj && 1;
	if(bjl != 1){
		return false;
	}else{
		return true;
	}
})


//保存收获人信息的按钮
$(".get").click(function(){
	var consignee =" "+$(".consignee").val();
	var phone = " "+$(".phone").val();
	var province = " "+$(".province").val();
	var city = " "+$(".city").val();
	var district = " "+$(".district").val();
	var locat = " "+$(".location").val();
	
	$(".info-box").append("<div class='info'><input type='radio' name='info'>"+consignee+phone+province+city+district+locat+"</div>")
})


//联动插件
$('#dist').distpicker({
	autoSelect: false
});


//radio
$(".radio").click(function(){
	$(this).toggleClass("radio-active");
})


