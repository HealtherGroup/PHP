@extends('reception.public.public')
@section('title','找回密码')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/reset.css') }}">
@endsection
@section('content')
<div class="reset-bg">
    <div class="reset-warp clearfix">
        <h3>重置密码</h3>

        <form action="/password" method="post">
        {{ csrf_field() }}
            <input class="pwd" type="password" name="password1" placeholder="密码" value="">
            <input class="again-pwd" type="password" name="password2" placeholder="确认密码" value="">
            <p>{{ session("msg") }}</p>
            <button></button>
        </form>
    </div>
</div>
@endsection
