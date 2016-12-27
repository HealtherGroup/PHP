@extends('reception.public.public')
@section('title','找回密码')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/forget.css') }}">
@endsection
@section('content')
        <div class="forget-bg">
            <div class="forget-warp clearfix">
                <h3>找回密码</h3>

                <form action="{{ asset('/doForgotPassword') }}" method="post">
                    {{ csrf_field() }}
                    <input class="phone-mail" type="text" name="phone" placeholder="手机" value="">
                    <p>{{ session("msg") }}</p>
                    <button type="submit">下一步</button>
                </form>
            </div>
        </div>
@endsection
