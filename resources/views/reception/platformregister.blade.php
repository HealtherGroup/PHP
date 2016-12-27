<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台注册</title>
    <meta name="viewport" content="width=device-width" initial-scale="1" user-scalable="no">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('reception/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/iconfont.css') }}">
    <link rel="shortcut icon" href=" favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/BackgroundRegistration.css') }}">
    <style type="text/css">
    .zwq-text-center{
      display:inline  !important;
    }
    .zwq-important-30{
        width:30% !important;
        margin:;
    }
    </style>
</head>
<body>
      <header class="width-auto">
        <div class="personnel-register-header area">
            <span>平台注册</span>
        </div>
      </header>
      <article class="width-auto padding-30">
        <div class="personnel-register-main area">
          <form action="/platformregisterdo" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <span>姓　　名</span><input type="text" name="yusername" class="personnel-register-main-input"><span>*</span>
            <br>
            <span>所属类型</span>
            <select name="class" class="personnel-register-select personnel-select-margin-left-10 zwq-important-30">
              <option value="1">营养师</option>
              <option value="2">医生</option>
              <option value="3">健身教练</option>
            </select>
            <span>*</span>
            <br>
            <span>简　　介</span><input type="text" name="abstract" class="personnel-register-main-input"><span>*</span>
            <br>
            <span>擅　　长</span><input type="text" name="Goodat" class="personnel-register-main-input"><span>*</span>
            <br>
            <span>电子邮箱</span><input type="text" name="email" class="personnel-register-main-input"><span>*</span>
            <br>
            <span>手　　机</span><input type="text" name="phone" class="personnel-register-main-input"><span>*</span>
            <br>
            <span>上传头像</span><input type="file" name="file" class="personnel-register-main-input zwq-text-center"><span>*</span>
            <br>
            <br>
            <span></span><input type="submit" class="personnel-register-main-input zwq-text-center"><span>*</span>
            <br>
          </form>
        </div>
      </article>
      <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="{{ asset('reception/js/jquery-3.1.1.min.js') }}"></script>
      <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('reception/js/BackgroundRegistration.js') }}"></script>
</body>
</html>
