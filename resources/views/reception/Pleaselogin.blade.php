@extends('reception.public.public')
@section('title','请登录')
@section('style')
    <link rel="stylesheet" href="{{ asset('reception/css/qingdenglu.css') }}">
@endsection
@section('content')
    <!--请登录 -->
     <div class="container" style="margin-top: 100px;margin-bottom: 50px;">
       <div class="row clearfix">
         <div class="column" style="padding: 0 10%;">
           <div id="qingdenglu">
              <img class="img-suc" src="{{ asset('reception/images/denglu.png') }}" alt="">
              <div class="img-wrap" style="margin-top: 20px;">
                <h1><a href="/Signin">请登录</a></h1>
              </div>
           </div>
         </div>
       </div>
     </div>
    <!-- 请登录 end -->
@endsection
