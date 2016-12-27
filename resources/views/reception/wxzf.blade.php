
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>微信支付</title>
<script>document.domain="qcloud.com";</script>
<link href="{{ asset('reception/css/1.css') }}" rel="stylesheet" media="screen"/>
<script src="{{ asset('reception/js/jquery-1.8.3.min.js') }}"></script>
</head>
<body>
<div class="body">
    <h1 class="mod-title">
        <span class="text">微信支付</span>
    </h1>
    <div class="mod-ct">
        <div class="order">
        </div>
        <div class="amount">

        </div>
        <div class="qr-image" >
            <a><img src="http://www.kuaizhan.com/common/encode-png?large=true&data={{ $img->code_url }}" /></a>
        </div>
        <!--detail-open 加上这个类是展示订单信息，不加不展示-->
        <div class="tip">
            <div class="tip-text">
                <p>请使用微信扫一扫</p>
                <p>扫描二维码完成支付</p>
                <p><a href="{{ asset('/Orderlist') }}">已支付点这里</a></p>
            </div>
        </div>
     </div>
</div>
</body>
</html>