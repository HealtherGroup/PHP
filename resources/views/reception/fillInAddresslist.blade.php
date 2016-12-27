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
                <span class="zwq-active float-left" ><a href="{{ asset('/addresslist') }}">地址管理</a></span>
                <span class="float-left"><a href="{{ asset('/address') }}">新增地址</a></span>
            </div>
        </div>
        <div class="Account-body-address-main area padding-bottom-40">

             {{ csrf_field() }}
             @foreach($list as $list)
                <div class="width-90-auto">
                    <div class="Account-body-address-main-div padding-20">

                        收　货　人：<span>{{ $list->name }}</span>
                        <br>
                        所 在 国 家 ：<span>{{ $list->country }}</span>
                        <br>
                        收 货 地 址 ：<span>{{ $list->address }}</span>
                        <br>
                        联 系 电 话 ：<span>{{ $list->phone }}</span>
                        <br>
                        <p class="Account-body-address-main-div-edit"><a class="Account-address-button" href="{{ asset('/addressdelete') }}/{{ $list->id }}">删除</a></p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
