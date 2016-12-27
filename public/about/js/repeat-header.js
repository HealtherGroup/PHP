/*nav*/
$('.nav-ul-1>li:eq(0)').click(function(){
	
})



/*语言*/
$('.nav-ul-1>li:eq(4)').click(function(){
	if($('.my-nav-yuyan').css('display') == 'none' && $('.my-nav-sousuo').css('display') == 'block'){
		setTimeout(function(){
			$('.my-nav-yuyan').slideDown()
		},500);
			$('.my-nav-sousuo').slideUp()
	}
	if($('.my-nav-yuyan').css('display') == 'none' && $('.my-nav-sousuo').css('display') == 'none' ){
		$('.my-nav-yuyan').slideDown()
	}else{
		$('.my-nav-yuyan').slideUp()
	}

})

// 更换国旗
	$('.my-nav-yuyan>div>ul>li>a>img').click(function(){
		$('.guoqi').attr('src',$(this).attr('src'));
		$('.my-nav-yuyan').slideUp()
	})



/*搜索*/
$('.nav-ul-1>li:eq(1)').click(function(){

	if($('.my-nav-sousuo').css('display') == 'none' && $('.my-nav-yuyan').css('display') == 'block'){
		$('.my-nav-yuyan').slideUp()
		setTimeout(function(){
			$('.my-nav-sousuo').slideDown()	
		},500)			
	}

	if($('.my-nav-sousuo').css('display') == 'none' && $('.my-nav-yuyan').css('display') == 'none'){
		$('.my-nav-sousuo').slideDown()	
	}else{
		$('.my-nav-sousuo').slideUp()
		$('.my-nav-sousuo>div>input').val('');
	}

});



//关闭搜索
$('.my-nav-sousuo-img1').click(function(){
	$('.my-nav-sousuo>div>input').val('');
	$('.my-nav-sousuo').slideUp()
})



// 二级菜单

$('.header>div>ul>li').click(function(){
	$(this).css({
		"color":"#89C86D",
  		"background-color":"#fafafa",
	})

	$('.header-ul1').css('display','block')
	$('.header-div2').css('display','block')	
})
$('.header>div>ul>li:eq(0)').click(function(){
	$('.header>div>ul>li:eq(1)').css({
		"color":"#fafafa",
  		"background-color":"#89C86D",
	})
	$('.header>div>ul>li:eq(2)').css({
		"color":"#fafafa",
  		"background-color":"#89C86D",
	})
})
$('.header>div>ul>li:eq(1)').click(function(){
	$('.header>div>ul>li:eq(0)').css({
		"color":"#fafafa",
  		"background-color":"#89C86D",
	})
	$('.header>div>ul>li:eq(2)').css({
		"color":"#fafafa",
  		"background-color":"#89C86D",
	})
})
$('.header>div>ul>li:eq(2)').click(function(){
	$('.header>div>ul>li:eq(1)').css({
		"color":"#fafafa",
  		"background-color":"#89C86D",
	})
	$('.header>div>ul>li:eq(0)').css({
		"color":"#fafafa",
  		"background-color":"#89C86D",
	})
})
// $('.header>div>ul>li').mouseover(function(){
// 	$('.header-ul1').css('display','block')
// 	$('.header-div2').css('display','block')
// })
// $('.header-ul1').mouseover(function(){
// 	$('.header-ul1').css('display','block')
// })
// $('.header>div>ul>li').mouseout(function(){
// 	$('.header-ul1').css('display','none')
// })
// $('.header-ul1').mouseout(function(){
// 	$('.header-ul1').css('display','none')
// })
// $('.header-div2').mouseover(function(){
// 	$('.header-ul1').css('display','block')
// })
// $('.header-div2').mouseout(function(){
// 	$('.header-ul1').css('display','none')
// })



// $('.header-ul1>li:eq(0)').mouseover(function(){
// 	$('.header-div2').css('display','block')
// })
// $('.header-ul1>li:eq(0)').mouseout(function(){
// 	$('.header-div2').css('display','none')
// })
// $('.header-div2').mouseover(function(){
// 	$(this).css('display','block')
// })
// $('.header-div2').mouseout(function(){
// 	$(this).css('display','none')
// })


$('.header').mouseover(function(){
	$('.header-ul1').css('display','block')
	$('.header-div2').css('display','block')
})
$('.header').mouseout(function(){
	$('.header-ul1').css('display','none')
	$('.header-div2').css('display','none')
})



/*搜索里面字体*/
$('.my-nav-sousuo-input').focus(function(){
	$(this).attr('placeholder','')
})
$('.my-nav-sousuo-input').blur(function(){
	$(this).attr('placeholder','想找什么随便搜')
})
// 监听滚动条距离

	$(window).scroll(function(){
		var h = $(document).scrollTop();
		if(h>600){
			$('.header-div1').css('line-height','42px')
	 	}
	 	if(h<600){
	 		$('.header-div1').css('line-height','56px')
	 	}
	})