
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
	$(".total-price").text(sum+".00");
	
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
	$(".amount-price").text("￥"+sum+".00");
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

