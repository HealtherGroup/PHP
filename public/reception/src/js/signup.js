var bj = 1;

//隐藏遮盖,并使文本框获得焦点
$(".input-warp span").click(function(){
	$(this).css("display","none").siblings().focus();
})


//手机,邮箱和用户名
$(".PM-name").focusout(function(){
	var Email = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	var phone = /^1[34578]\d{9}$/;
	var userName = /^[a-z][a-z0-9_]{2,16}$/;
	var PMNval = $(this).val();
	if(!Email.test(PMNval) && !phone.test(PMNval) && !userName.test(PMNval)){
		$(this).siblings("span").css("display","block");
		$(this).siblings("span").text("手机、邮箱或用户名");
		bj = 0;
	}
})


//验证码
$(".icode").focusout(function(){
	$(this)
	.siblings("span")
	.css("display","block")
	.load("bool.txt",function(responseTxt,statusTxt,xhr){
		if(statusTxt=="success"){
			var icode = $(".icode").siblings("span").html();
		}
	});
})


//密码
$(".pwd").focusout(function(){
	var pwdLength = /^[a-z0-9][a-z0-9]{5,15}$/;
	var pwdWord = /[a-z]/g;
	var pwdNum = /[0-9]/g;
	var pwdval = $(this).val();
	var pwdAginVal = $(".pwd-agin").val();
	if(!pwdWord.test(pwdval) || !pwdNum.test(pwdval) || !pwdLength.test(pwdval)){
		$(this).siblings("span").css("display","block");
		$(this).siblings("span").text("密码6～16位，数字与字母的组成");
		bj = 0;
	}
	
	if(pwdAginVal.length>0 && pwdval != pwdAginVal && pwdval.length > 5){
		$(this).siblings("span").css("display","block");
		$(this).siblings("span").text("两次密码不一致");
		bj = 0;
	}
})


//确认密码
$(".pwd-agin").focusout(function(){
	var pwd = $(".pwd").val();
	var pwdAgin = $(this).val();
	if(pwd == "" || pwdAgin == ""){
		$(this).siblings("span").css("display","block");
		$(this).siblings("span").text("确认密码");
		bj = 0;
	}
	
	if(!(pwd == pwdAgin)){
		$(this).siblings("span").css("display","block");
		$(this).siblings("span").text("两次密码不一致");
		bj = 0;
	}
})


//当所有文本框 
var bjl;

//阻止表单提交
$("form").submit(function(){
	$(".input-warp input").focusout();
	bjl = bj && 1;
//	alert(bjl);
	if(bjl != 1){
		return false;
	}else{
		return true;
	}
});

$(".confirm input").click(function(){
	$(".input-warp input").focusout();
})
