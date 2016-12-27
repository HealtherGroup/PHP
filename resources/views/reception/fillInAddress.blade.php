@extends('reception.public.public')
@section('title','添加收货地址')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/Accountinformation.css') }}">
@endsection
@section('content')
   <div class="Account-body width-auto">
        <div class="Account-body-header width-auto text-center">
            <img src="{{ asset('reception/images/yuanguoqi.png') }}" alt="">
            <p class="">昵称：{{ session('username') }}</p>
        </div>
        <div class="Account-body-nav area container">
            <ul class="row">
                <li class="col-lg-1 col-md-1"></li>
                <li class="col-lg-2 col-md-2"><a href="{{ asset('/PersonalCenter') }}">账户信息</a></li>
                <li class="col-lg-2 col-md-2"><a href="{{ asset('/Orderlist') }}">我的订单</a>

                </li>
                <li class="col-lg-2 col-md-2"><a href="{{ asset('/bespokeorderlist') }}">预约订单</a></li>
                <li class="col-lg-2 col-md-2"><a href="{{ asset('/addresslist') }}">地址管理</a>
                                      <div class="Account-body-nav-div1"></div>
                </li>
                <li class="col-lg-1 col-md-1"></li>
            </ul>
        </div>
        <div class="Account-body-subnav area">
            <div class="Account-order-nav width-auto overflow-h">
                <span class="float-left"><a href="{{ asset('/addresslist') }}">地址管理</a></span>
                <span class="zwq-active float-left"><a href="{{ asset('/address') }}">新增地址</a></span>
            </div>
        </div>
        <div class="Account-body-address-main area padding-bottom-40">
            <form action="{{ asset('/doaddress') }}" method="post" class="margin-top-20">
             {{ csrf_field() }}
                <div class="width-90-auto">
                    <div class="Account-body-address-main-div padding-20">
                        <p><b>请添加收货地址</b></p>
                        收　货　人：<input type="text" name="name">
                        <br>
                        所 在 国 家 ：<input type="text" name="country">
                        <br>
                        收 货 地 址 ：<input type="text" name="address">
                        <br>
                        联 系 电 话 ：<input type="text" name="phone">
                        <br>
                        <p class="Account-body-address-main-div-edit btn-group"><button>保存</button></p>
                        <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
