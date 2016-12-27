$('.content1-div5>div').hover(function(){
 	$(this).css('width','38%').siblings().css('width','23%');

})





// 合作伙伴







        
		// 合作伙伴	
        //平台、设备和操作系统
        var system = {
            win: false,
            mac: false,
            xll: false,
            ipad:false
        };
        //检测平台
        var p = navigator.platform;
        system.win = p.indexOf("Win") == 0;
        system.mac = p.indexOf("Mac") == 0;
        system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
        system.ipad = (navigator.userAgent.match(/iPad/i) != null)?true:false;
        if (system.win || system.mac || system.xll) {
	$('.footer-div2>ul>li>a').hover(function(){
	$(this).children('img').eq(0).css('display','none');
 	$(this).children('img').eq(1).css('display','block');
})
$('.footer-div2>ul>li>a').mouseleave(function(){
	$(this).children('img').eq(0).css('display','block');
	$(this).children('img').eq(1).css('display','none');
})
        }









