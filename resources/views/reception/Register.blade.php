@extends('reception.public.public')
@section('title','注册')
@section('style')
      <link rel="stylesheet" href="{{ asset('reception/src/css/normalize.css') }}">
      <link rel="stylesheet" href="{{ asset('reception/src/css/repeat.css') }}" />
      <link rel="shortcut icon" href=" favicon.ico" />
      <link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/signup.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat-header.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat-footer.css') }}">

@endsection
@section('content')
    <!-- 注册页面-->
<div class="signup-bg">
        <div class="signup-warp clearfix">
          <div class="user-signup">
            <div class="user-signup-head">
              注册
            </div>
            <form action="registerdo" method="post">
             {{ csrf_field() }}
            <div class="input-warp">
              <input class="PM-name" type="text" name="username" placeholder="手机、邮箱或用户名">111
              <span></span>
            </div>

          <div class="input-warp">
              <input class="pwd" type="password" name="password1" placeholder="密码6～16位，数字与字母的组成">
              <span></span>
          </div>

          <div class="input-warp">
              <input class="pwd-agin" type="password" name="password2" placeholder="确认密码">
              <span></span>
          </div>


            <div class="forget">
              注册即表示您同意Healther group的 <a href="#">用户协议</a>
            </div>


              <div class="confirm"><input type="submit" name="" id="" value=""> </div>
            </form>
            <div class="no-account">
              <a href="/Signin">登录</a>
            </div>
          </div>

          <span class="center-solid"></span>

          <div class="other-signup">
            <div class="other-signup-head">
              选择其他方式登录
            </div>
            <a class="qq" id="qqLoginBtn">QQ快捷登录</a>
            <a class="weibo" href="#">新浪微博快捷登录</a>
          </div>
        </div>
      </div>
      <script>
  function re_captcha() {
    $url = "{{ URL('kit/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
  }
</script>
<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="101371946" data-redirecturi="http://www.healthergroup.cn/qq" charset="utf-8"></script>
@endsection

