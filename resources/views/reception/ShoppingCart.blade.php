@extends('reception.public.public')
@section('title','购物车')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/cart.css') }}"/>
	<div class="width-auto miaobaoxie">
		<ol class="area">
  			<li><a href="/">首页</a></li>
  			<li>></li>
  			<li class="color-green"><a href="#" onClick="javascript:history.back(-1);">上一页</a></li>
		</ol>
	</div>
<div class="center-block procedure">
            <div class="flow">
                <div class="flow-active">
                    购物车
                    <span></span>
                </div>
                <div >
                    填写订单
                    <span></span>
                </div>
                <div>
                    完成支付
                    <span></span>
                </div>
            </div>
        </div>
    <div class="width-auto inline-block bgc-b1">
        <div class="center-block cart-procedure">

        </div>

        <div class="bill">
            <div class="bill-head">
                <div class="col-2 pull-left">
                    商品
                </div>

                <ul class="col-10 clearfix pull-left">
                    <li class="col-5"></li>
                    <li class="col-2">价格</li>
                    <li class="col-2">数量</li>
                    <li class="col-2">小计</li>
                    <li class="col-1">操作</li>
                </ul>
            </div>

            @foreach($goodinfo as $key => $value)
            <div class="item-box clearfix">
                <div class="col-2 img">
                    <a href="{{url('/goods',[$value->good_id])}}"><img src="{{ $value->thumbnail }}"/></a>
                </div>

                <ul class="col-10 cart-item clearfix">
                    <li class="col-5 name">
                        <a href="{{url('/goods',[$value->good_id])}}">{{$value->name}}</a>
                    </li>
                    <li class="col-2 price-box">￥<span class="price">{{$value->price}}</span></li>
                    <input type="hidden" name="good_id" id="good_id" value="{{$value->good_id}}">

                    <li class="col-2 quantity">
                        <span class="quantity-change">
                            <span class="quantity-minus">
                                -
                            </span>
                            <span class="quantity-nums">
                                {{$value->num}}
                            </span>
                            <span class="quantity-plus">
                                +
                            </span>
                        </span>
                    </li>
                    <li class="col-2 subtotal">￥<span>{{$value->price*$value->num}}</span></li>
                    <li class="col-1 close-box">
                        <a href="{{ asset('/ShoppingCart/delete') }}/{{$value->car_id}}"><span class="close"></span></a>
                    </li>
                </ul>
            </div>
            @endforeach
            <div class="cart-total clearfix">
                <div class="goods-num">
                    已选择<span> 0 </span>件商品
                </div>

                <div class="total-info clearfix">
                    <dl class="clearfix">
                        <dt>购物车商品小计</dt>
                        <dd>￥<span class="total-price">￥0.00</span></dd>
                        <dt>运费</dt>
                        <dd>￥<span class="fare">0</span></dd>
                    </dl>

                    <dl class="amount-to clearfix">
                        <dl>
                            <dt>总价</dt>
                            <dd class="amount-price">￥0.00</dd>
                        </dl>
                    </dl>

                    <div class="go-on">
                        <a href="{{url('/Shoplist')}}">继续购物</a>
                        <a class="gojz" href="{{ asset('/myOrder') }}">去结账</a>
                        <a class="add" href="{{url('/')}}">购物车内没有商品，快去添加～</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/src/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/src/js/cart.js" type="text/javascript" charset="utf-8"></script>
@endsection
