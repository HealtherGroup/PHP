@extends('reception.public.public')
@section('title','预约列表')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/Accountinformation1.css') }}">
@endsection
@section('content')
<?php $xz = date('Ymd',time()); ?>
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
                <li class="col-lg-2 col-md-2"><a href="{{ asset('/bespokeorderlist') }}">预约订单</a>
                                      <div class="Account-body-nav-div1"></div>
                </li>
                </li>
                <li class="col-lg-2 col-md-2"><a href="{{ asset('/addresslist') }}">地址管理</a>
                </li>

                <li class="col-lg-1 col-md-1"></li>
            </ul>
        </div>
        @foreach($re as $re)
        <div class="dingdanfuwu-body-main">
            <div class="dingdanfuwu-body-main-div-1 float-left">
                <img class="img-responsive" src="{{ $re->img }}" alt="">
            </div>
            <div class="dingdanfuwu-body-main-div-2 float-left">
                <dl>
                    <dt><b class="font-size-2-rem yisheng">{{ $re->name }} </b>| @if($re->class == 1)营养师@elseif($re->class == 2)医生@else健身教练@endif</dt>
                    <dd><h3>擅长：{{ $re->Goodat }}</h3></dd>
                </dl>
            </div>
            <div class="dingdanfuwu-body-main-div-4 float-left"></div>
            <div class="dingdanfuwu-body-main-div-3 float-left text-center">
                <?php $x = preg_replace('/[-]/','',$re->time)-$xz  ?>
                <dl>
                    <dd>{{ $re->time }}</dd>
                    
                    @if($x < 0)
                    <dd><b class="font-size-3-rem color-green"></b>预约完成</b></dd>
                    @else
                     <dd><b>剩余天数</b></dd>
                    @if($x == 0)
                    <dd><b class="font-size-3-rem color-green"></b><h1>时间到了哦</h1></b></dd>
                    <dd class="btn btn-default btn-md bg-CDCAC9"><a href="{{ asset('/private') }}/{{ $re->yid }}" class="glyphicon color-fff">进入</a></dd>
                    @else
                    <dd><b class="font-size-3-rem color-green"></b><h1>{{ $x }}天</h1></b></dd>
                    <dd class="btn btn-default btn-md bg-CDCAC9"><a href="{{ asset('/private') }}/{{ $re->yid }}" class="glyphicon color-fff">进入</a></dd>
                    @endif
                    @endif

                </dl>
            </div>
        </div>
        @endforeach
@endsection
