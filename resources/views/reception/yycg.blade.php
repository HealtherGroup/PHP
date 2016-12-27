@extends('reception.public.public')
@section('title','预约成功')
@section('style')

@show
@section('content')
    <!-- 支付信息 -->
      <div class="container">
        <div class="row clearfix">
          <div class="column" style="padding: 0 10%;">
            <h3 style="color:#000">
              预约成功
            </h3>
            <div id="xiangqing">
                <img class="img-suc" src="{{ asset('reception/images/success.png') }}" alt="">
              <div class="img-wrap">
                <h2><p>预约详情内容可通过查看<a href="/bespokeorderlist" style="color:green;">我的预约</a>进行核对处理</p></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- 支付信息 end -->
@endsection
