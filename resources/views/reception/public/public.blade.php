<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width" initial-scale="1" user-scalable="no">
	<meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="telephone=no" name="format-detection">
  <meta content="email=no" name="format-detection">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="telephone=no" name="format-detection">
  <link rel="stylesheet" href="{{ asset('reception/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/icon/iconfont.css') }}">
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/index2.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat-header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/test-footer.css') }}">
<style>
			.miaobaoxie>ol>li{
				padding:4px !important;
				float:left !important;
				font-family:'宋体' !important;
			}

</style>
  @section('style')

  @show
</head>
<body>
	<header>
		<nav>
			<div>
			<!-- logo -->
				<a href="/"><img src="{{ asset('reception/images/logo.png') }}"></a>
				<div class="float-left text-center homepage">
					<a href="/">首页</a>
					<a href="{{ asset('/Shoplist') }}">品牌产品</a>
					<a href="{{ asset('/newslist') }}">相关新闻</a>
					<a href="{{ asset('/about/enterprise.html') }}">关于我们</a>
				</div>
				<ul class="nav-ul-1">
          @if(session("username"))
          <li class="nav-ul-1-none1"><a href="{{ asset('/PersonalCenter') }}">{{ session("username") }}</a>|<a href="/Signout">退出</a></li>
          @else
          <li class="nav-ul-1-none1"><a href="{{ asset('/Signin') }}">登录</a>|<a href="{{ asset('/Register') }}">注册</a></li>
          @endif

					<li><a href="####"><img src="{{ asset('reception/images/sousuo.png') }}" alt=""></a></li>
					<li><a  href="{{ asset('/PersonalCenter') }}"><img src="{{ asset('reception/images/gerenzhongxin.png') }}" alt=""></a></li>
					<li><a href="{{ asset('/ShoppingCart') }}"><img src="{{ asset('reception/images/gouwuche.png') }}" alt=""></a></li>
					<li class="nav-ul-1-li"><a href="####"><img class="guoqi" src="{{ asset('reception/images/guoqi/1.png') }}" alt=""></a></li>
					<li class="nav-ul-1-none2"><a href="###"><img src="{{ asset('reception/images/hamburger.png') }}" alt=""></a></li>
				</ul>
				<!-- 面包导航 -->
        <span>
          <ul>
            @if(session("username"))
            <li><a href="/Signout">退出</a></li>
            @else
            <li><a href="{{ asset('/Signin') }}">登录</a></li>
            <li><a href="{{ asset('/Register') }}">注册</a></li>
            @endif()

            <li><a href="{{ asset('/Shoplist') }}" >品牌产品</a></li>
            <li><a href="{{ asset('/newslist') }}">相关新闻</a></li>
            <li><a href="{{ asset('/aboutus') }}">关于我们</a></li>
          </ul>
        </span>
			</div>
		</nav>
		<!-- 搜索菜单 -->
		<div class="my-nav-sousuo">
			<div>
				<input class="my-nav-sousuo-input float-left" type="text" placeholder="想找什么随便搜"/>
				<a href="####"><img class="float-right my-nav-sousuo-img1" src="{{ asset('reception/images/shut.png') }}" alt=""></a>
				<a href="####"><img class="float-right my-nav-sousuo-img" src="{{ asset('reception/images/sousuohui.png') }}" alt=""></a>
			</div>
		</div>
		<!-- 语言 -->
		<div class="my-nav-yuyan">
			<div>
				<ul class="my-nav-yuyan-ul1">
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/1.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/2.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/3.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/4.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/5.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/6.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/7.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/8.png') }}" alt=""></a></li>

					<li><a href="#"><img src="{{ asset('reception/images/guoqi/9.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/10.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/11.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/12.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/13.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/14.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/15.png') }}" alt=""></a></li>
					<li><a href="#"><img src="{{ asset('reception/images/guoqi/16.png') }}" alt=""></a></li>
				</ul>
			</div>
		</div>
		<!-- 二级菜单 -->
 		<div class="header">
			<div class="header-div1">
				<ul>
          @foreach($data as $data)
            <li><a class="aaaa" href="{{ asset('/Shoplist') }}/{{ $data->id }}">{{ $data->name }}</a></li>
          @endforeach
				</ul>
			</div>
		</div>
		<!-- 二级菜单(第二级) -->
	</header>
    @section('content')


    @show
     <div class="container bigfooter">
    <div class="new-footer row">
        <dl class="col-lg-3 col-md-3 max-width-768-none">
            <dt>订阅HealtherGroup的新闻邮件</dt>
            <dd>
                <form action="bbb">
                    <input type="email" placeholder="Email">
                    <button type="submit">提交</button>
                </form>
            </dd>
            <dt>CALL US 24/7</dt>
            <dd><span class="color-green glyphicon glyphicon-earphone"></span> 4006069162</dd>
            <dd><span class="color-green glyphicon glyphicon-envelope"></span> service@healthergroup.com</dd>
        </dl>
        <dl class="col-lg-2 col-md-2 max-width-768-none">
            <dt>客户服务</dt>
            <dd>帮助</dd>
            <dt>合作伙伴</dt>
            <dd>供应商</dd>
        </dl>
        <dl class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
            <dt>HealtherGroup</dt>
            <dd class="max-width-768-none">联系我们</dd>
            <dd>关于我们</dd>
            <dd class="max-width-768-none">欢迎莅临HealtherGroup体验店</dd>
            <dd>HealtherGroup工作机会</dd>
            <dd>隐私权声明</dd>
        </dl>
        <dl  class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
            <dt>在线购物</dt>
            <dd>价格与币种</dd>
            <dd>订单支付方式</dd>
            <dd class="max-width-768-none">配送</dd>
            <dd>退换货政策</dd>
            <dd>交易条款和规定</dd>
        </dl>
        <dl  class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
            <dt>EXTRA</dt>
            <dd>加盟合作方案</dd>
            <dd>礼品卡</dd>
            <dd>VIP积分优惠</dd>
            <dd>Coupon Code</dd>
            <dd class="max-width-768-none">免运费配送</dd>
        </dl>
    </div>
    <div class="new-footer2">
        <h2 class="hide max-width-768-block">400-606-9162</h2>
        <h6 class="hide max-width-768-block">service@healthergroup.com</h6>
        <span class="max-width-768-none">关注我们</span>
        <!-- 新浪微博     -->
        <span class="iconfont icon-xinlangweibo"></span>
        <!-- 腾讯QQ -->
        <span class="iconfont icon-qq"></span>
        <!-- 微信 -->
        <span class="iconfont icon-weixin"></span>
        <!-- 微信朋友圈 -->
        <span class="iconfont icon-weixinpengyouquan"></span>
<span style="float:right;margin-top:20px;">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260899492'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260899492%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
</span>
    </div>
    <div class="new-footer3">
        <p><a>客户隐私政策</a><a>|</a><a>使用条例</a></p>
        <span>京公安网安备 11010500896京ICP备</span>
        <span>|</span>
        <span>Copyringht © 2014 Healther Group Inc 保留所有权利。</span>
    </div>
</div>
 <script src="//cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
		  <script src="{{ asset('reception/js/iconfont.js') }}"></script>
	    <script src="src/js/jquery.min.js') }}" type="text/javascript" charset="utf-8"></script>
	    <script src="src/js/repeat.js') }}" type="text/javascript" charset="utf-8"></script>
	    <script type="text/javascript" src="{{ asset('reception/js/jquery-3.1.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('reception/js/repeat-header.js') }}"></script>
    <script type="text/javascript" src="{{ asset('reception/js/test-footer.js') }}"></script>
    <script src="{{ asset('reception/js/cart.js') }}" ></script>
    <script src="{{ asset('/src/js/fillinorder.js') }}"type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('reception/js/index.js') }}" ></script>

</body>
</html>
