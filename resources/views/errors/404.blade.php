<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>404页面自动跳转</title>
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/error.css') }}">
<script type="text/javascript">
    var num=6;
    function redirect(){
        num--;
        document.getElementById("num").innerHTML=num;
        if(num<0){
            document.getElementById("num").innerHTML=0;
            location.href="/";
            }
        }
    setInterval("redirect()", 1000);
</script>
</head>
<body onLoad="redirect();">
<div class="whole">
    <img src="{{ asset('reception/images/back.jpg') }}" />
    <div class="mask"></div>
</div>
<div class="b">
        <img src="{{ asset('reception/images/404.png') }}" class="center"/>
        <p>
            暂时未能找到您查找的页面<br>
            可能输入的网址错误或此页面不存在<br>
            <span id="num"></span>秒后自动跳转到主页
        </p>
    </div>

</body>
</html>
