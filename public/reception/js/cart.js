
$(function(){
	var index = $(this).parents(".item-box").index()-1;
	totalPrice(index);
	goodsNum();
})

$(".quantity-minus").click(function(){
	var index = $(this).parents(".item-box").index()-1;
	var numVal = parseFloat($(".item-box").eq(index).find(".quantity-nums").text());
	var pricelVal = parseFloat($(".item-box").eq(index).find(".price").text());

	if(numVal > 0 && numVal != 1){
		numVal--;
		$(".item-box").eq(index).find(".quantity-nums").text(numVal);
		var subtotal = numVal*pricelVal;
		$(".item-box").eq(index).find(".subtotal span").text(subtotal+".00");
	}
	totalPrice(index);
})

$(".quantity-plus").click(function(){
	var index = $(this).parents(".item-box").index()-1;
	var numVal = parseFloat($(".item-box").eq(index).find(".quantity-nums").text());
	var pricelVal = parseFloat($(".item-box").eq(index).find(".price").text());

	if(numVal != 0){
		numVal++;
		$(".item-box").eq(index).find(".quantity-nums").text(numVal);
		var subtotal = numVal*pricelVal;
		$(".item-box").eq(index).find(".subtotal span").text(subtotal+".00");
	}
	totalPrice(index);
})

//购物车商品小计函数
function totalPrice(index){
	var length = $(".item-box").length;
	var sum = 0;
	for(var i = 0;i < length;i++){
		sum += parseFloat($(".item-box").eq(i).find(".subtotal span").text());
//		alert(sum);
	}
	$(".total-price").text(sum);

	amountPrice(sum);
}

//商品总数
function goodsNum(){
	var length = $(".item-box").length;
	$(".goods-num span").text(" "+length+" ");

	addShow(length);
}

//当商品为空时
function addShow(length){
	if(length<1){
		$(".go-on a").css("display","none");
		$(".go-on .add").css("display","block");
	}
}

//总结算价格(含运费)
function amountPrice(sum){
	var fare = parseFloat($(".fare").text());
	parseInt(sum += fare);
	$(".amount-price").text("￥"+sum);
}

//取消商品
$(".close").click(function(){

	var r=confirm("确定删除产品此商品？");
	if(r == true){
		$(this).parents(".item-box").remove();
	}

	totalPrice();
	goodsNum();
})


//全都选中
$(".all").click(function(){
	$("[name='checkbox']").prop("checked",$(".all").prop("checked"));
})


$("#del").click(function(){

	var r=confirm("确定删除产品这些商品？");
	if(r == true){
		$("[name='checkbox']").each(function(){

			if($(this).prop("checked")){
				var index = $(this).parents(".item-box").remove();
				goodsNum();
				totalPrice();
			}
		})
	}
})


//地址

$("#tianjia,#bianji").click(function(){
	$("#address-big").css("display","none");
	$('#address-new').css("display","block");
})

// 姓名 获取对象
    var Name = document.getElementById('name');
    var nameInfo = document.getElementById('nameInfo');
    // 得到焦点
    Name.onfocus = function(){
      nameInfo.className = 'mo';
      nameInfo.innerHTML = '请输入正确的姓名';
    }
    // 失去焦点
    Name.onblur = function(){
      if(Name.value.match(/^([\u4e00-\u9fa5]){2,7}$/)){
        nameInfo.className = 'ok';
        nameInfo.innerHTML = '输入正确';
        return true;
      }else{
        nameInfo.className = 'no';
        nameInfo.innerHTML = '姓名格式不正确';
        return false;
      }
    }

 // 手机号码 获取对象
    var Phone = document.getElementById('phone');
    var phoneInfo = document.getElementById('phoneInfo');
    // 得到焦点
    Phone.onfocus = function(){
      phoneInfo.className = 'mo';
      phoneInfo.innerHTML = '请输入正确的手机号码';
    }
    // 失去焦点[\u4E00-\u9FA5]{2,5}(?:·[\u4E00-\u9FA5]{2,5})*
    Phone.onblur = function(){
      if(Phone.value.match(/^1[3578][0-9]{9}$/)){
        phoneInfo.className = 'ok';
        phoneInfo.innerHTML = '输入正确';
        return true;
      }else{
        phoneInfo.className = 'no';
        phoneInfo.innerHTML = '手机号码格式不正确';
        return false;
      }
    }

//更改地址


	function check(){
		document.getElementById("mycheck").checked = true;
		/*alert($("#mycheck").attr("checked"));*/
	}

/*
	function check(){
		if($('#mycheck').checked = false){
			document.getElementById("mycheck").checked = true;
		}else{
			document.getElementById("mycheck").checked = false;
		}
		if($("#xxx").attr("checked")==true)
	}*/




