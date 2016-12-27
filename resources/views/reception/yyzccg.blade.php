<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册成功</title>
    <link href="{{ asset('reception/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


  </head>
  <body><!-- <body onload="countDown()"> -->


    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <h1 id="time" class="text-center text-success" style="margin-top:20%;">
            注册成功！
          </h1>
          <p class="text-center">审核通过后会通知您</p>
        </div>
      </div>
    </div>

<script type="text/javascript">
  var t = 3;
  function countDown(){
  var time = document.getElementById("time");
  t--;
  time.value=t;
  if (t<=0) {
  location.href="/";
  clearInterval(inter);
  };
  }
  var inter = setInterval("countDown()",1000);
  //window.onload=countDown;
</script>



    <script src="bootstrap/js/bootstrap.min.js"></script>


  </body>
</html>









