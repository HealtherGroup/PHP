@extends('reception.public.public')
@section('title','支付成功')
@section('style')

@show
@section('content')
    <!-- 支付信息 -->
      <div class="container">
        <div class="row clearfix">
          <div class="column" style="padding: 0 10%;">
            <h3 style="color:#000">
              支付结果
            </h3>
            <div id="xiangqing">
				<img class="img-suc" src="{{ asset('reception/images/success.png') }}" alt="">
              <div class="img-wrap">
                <p><b>支付成功，已成功付款<?php echo $_GET['total_fee'];?>元！</b></p>
                <p>对方将立即收到您的付款。</p>
                <p>订单详情内容可通过查看<a href="/Orderlist" style="color:green;">我的订单</a>进行核对处理</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- 支付信息 end -->
@endsection
