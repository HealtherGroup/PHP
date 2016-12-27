@extends('reception.public.public')
@section('title','登录')
@section('style')

        <link rel="stylesheet" href="{{ asset('reception/src/css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('reception/src/css/repeat.css') }}" />
        <link rel="shortcut icon" href=" favicon.ic1o" />
        <link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/login.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat-header.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat-footer.css') }}">
@endsection
@section('content')
    <!-- 登录页面-->
<div class="login-bg">
            <div class="login-warp clearfix">
                <div class="user-login">
                    <div class="user-login-head">
                        登录
                    </div>
                    <form method="post" action="/Signindo">
                    {{ csrf_field() }}
                    <input class="input-mail" type="text" name="username" placeholder="手机、邮箱或用户名">
                    <input class="input-pwd" type="password" name="password" placeholder="密码">

                    <div class="forget">
                        <a href="{{ asset('/ForgotPassword') }}">忘记密码?</a>
                    </div>

                    <input class="confirm" type="submit" value="登录"/>


                    </form>

                    <div class="no-account">
                        没有Healther Group账户?<a href="{{ asset('/Register') }}">立即注册</a>
                    </div>
                </div>

                <span class="center-solid"></span>

                <div class="other-login">
                    <div class="other-login-head">
                        选择其他方式登录
                    </div>
                    <a class="qq" href="#">QQ快捷登录</a>
                    <a class="weibo" href="#">新浪微博快捷登录</a>
                </div>
            </div>
        </div>
    <!-- end -->
@endsection
