@extends('reception.public.public')
@section('title','确认订单')
@section('style')
    <link rel="stylesheet" href="{{ asset('reception/css/shouhuo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/cart.css') }}"/>
    <link rel="stylesheet" href="{{ asset('reception/css/pay2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/pay.css') }}"/>
    <style type="text/css">
        #myspan{
            display: none;
        }
    </style>
@endsection
@section('content')
<div class="center-block procedure">
            <div class="flow">
                <div >
                    购物车
                    <span></span>
                </div>
                <div class="flow-active">
                    确认订单
                    <span></span>
                </div>
                <div>
                    完成支付
                    <span></span>
                </div>
            </div>
        </div>
<div class="container" style="background:white;margin-top:30px;">
        <div class="row clearfix">
            <div class="col-md-12 column" style="background:white;border-bottom:1px solid #A9A9A9;">
                <h5>
                    收货人信息
                </h5>
            </div>
        </div>
@foreach($add as $add)
<div class="row clearfix" style="margin-top:20px;border:1px solid #A9A9A9;background:white;margin-left:30px;margin-right:30px;">
<input onclick="dz({{ $add->id }})" name="Fruit" style="margin-top:42px;float:left;margin-left:10px;" type="radio" value=""/>
        <div class="col-md-10 column" style="margin-top: 20px;">

            姓名:<span>{{ $add->name }}</span><br>
            电话:<span>{{ $add->phone }}</span><br>
            地址:<span>{{ $add->address }}</span><br>

            <a href="{{ $add->id }}" style="margin-top:20px;border-top:1px solid #A9A9A9;">默认地址</a>
        </div>

</div>
@endforeach
        <div class="row clearfix" style="border:2px solid #A9A9A9;width:300px;height:50px;margin-top: 20px;background: #EDEEEE;margin-left:30px;margin-bottom:50px;">
            <div class="col-md-12 column">
                <a href="{{ asset('/address') }}" style="text-align:center;line-height:50px;">+填写新的收货人地址</a>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12 column">
                <h5 style="margin-left:30px;">
                    配送方式
                </h5>
                <p style="border-top:1px solid #A9A9A9;">快递送货(免费)，48小时内发货，快递送货。</p>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12 column" style="margin-left: 30px;">
                <h5>
                    商品清单
                </h5>
            </div>
            <?php $a = 0?>
            @foreach($goodinfo as $goodinfo)
            <p style="color:white;">{{ $a+= $goodinfo->price*$goodinfo->num }}</p>
            <div class="row clearfix">
            <hr style="border-top:1px solid #A9A9A9;width:96%">
                <div class="col-md-2 col-sm-3 col-xs-3 column" style="margin-left:3%;">
                    <img style="width:100px;height:100px;" src="{{ $goodinfo->thumbnail }}" alt="">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 column" style="line-height:200px;">
                    <p>{{ $goodinfo->name }}</p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 column" style="line-height:200px;">
                    <p>￥{{ $goodinfo->price }}</p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 column" style="line-height:200px;">
                    <p>数量{{ $goodinfo->num }}</p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 column" style="line-height:200px;">
                    <li class="col-2 subtotal">￥<span>{{ $goodinfo->price*$goodinfo->num }}</span></li>
                </div>
                <hr style="border-top:1px solid #A9A9A9;width:96%">
            </div>
            @endforeach
        </div>

        <div class="row clearfix">
            <div class="col-md-8 column">
                <p style="color:#B0ADAE;margin-left:50px;">(选填) 订单备注：限45字。</p>
                <p style="margin-left:50px;">需要发票</p>
            </div>
            <div class="col-md-4 column">
                <p class="text-right" style="color:green;">
                    <a href="#">返回购物车修改</a>
                </p>

            </div>
            <div class="col-md-12 column">
                <div class="col-md-10 col-sm-7 col-xs-7 column">
                    <ul style="margin-left:10%;margin-top:50px;">
                        <li style="float:left;padding-left:3%;">支付方式：在线支付</li>
                    </ul>

                    <ul></ul>

                </div>
                <p style="float:right;padding-top:30px;">应付总额 <strong style="font-size:20px;"><?php echo $a?>.00</strong></p>
                <div class="col-md-4 col-sm-6 col-xs-6 column" style="float:right;margin-top:50px;">


                <ul class="clearfix m-b20 ">
                    <a id="wx" href="{{ asset('/ioo') }}">
                        <li style="float:right;" class="w140 h50-lh50 pay-no pay-active">
                            <span class="i-pay wxpay">

                            </span>
                        </li>
                    </a>
                    <a id="zfb" href="{{ asset('/alipay/ipay') }}">
                        <li style="float:right;" class="w140 h50-lh50 pay-no">
                            <span class="i-pay alipay">
                                <img src="" alt="">
                            </span>
                        </li>
                    </a>
                </ul>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{ asset('reception/js/jquery-3.1.1.min.js') }}"></script>
    <script>
        function dz(id){
            $("#wx").attr("href","{{ asset('/ioo') }}/?sid="+id+"");
            $("#zfb").attr("href","{{ asset('/alipay/ipay') }}/?sid="+id+"");
        }
    </script>
@endsection
