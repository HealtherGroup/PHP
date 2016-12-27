@extends('reception.public.public')
@section('title','找回密码')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/byphone.css') }}">
@endsection
@section('content')
<div class="by-phone-bg">
    <div class="by-phone-warp clearfix">
        <h3>验证码已发送到{{ $phone->phone }}</h3>

        <form action="{{ asset('/DoCode') }}" method="post">
        {{ csrf_field() }}
            <div class="SMS-icode-warp">
                <input class="SMS-icode" type="text" placeholder="短信验证码" name="code" value="">
                <p>{{ session("msg") }}</p>
                <span class="getSMSicode">
                    <button></button>
                </span>
            </div>
        </form>
    </div>
</div>
@endsection

