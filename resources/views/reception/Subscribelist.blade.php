@extends('reception.public.public')
@section('title','预约列表')
@section('content')
<style type="text/css">
p{font-size: 12px;}
.yy-list li a{color:#000;}
.yy-list li a:hover{background: #89c86d;}
.yy-btn{position:absolute;top:4%;right:12%;display:none;}
/* .yy-wrap:hover{box-shadow: 1px 1px 10px rgba(0,0,0,0.5);
  margin-left: 0px} */
/* @media (max-width: 770px){
    .yy-btn{display: block;}
} */

</style>
	<div class="width-auto miaobaoxie">
		<ol class="area">
  			<li><a href="/">首页</a></li>
  			<li>></li>
  			<li class="color-green"><a href="#" onClick="javascript:history.back(-1);">上一页</a></li>
		</ol>
	</div>
    <!--列表-->
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column" style="margin-top:10px;">

                    <div class="col-md-2 col-sm-12 col-xs-12 column" style="padding:0 15px 0 0;">
                        <p class="col-md-12 col-sm-3 hidden-xs" style="background:white;text-align:center;height:60px;line-height:60px;color:white;font-size:16px;"><a href="{{ asset('/Subscribelist') }}">全部分类</a></p>
                        <p class="col-md-12 col-sm-3 col-xs-4 column" style="background:white;text-align:center;height:60px;line-height:60px;color:#000;font-size:16px;"><a href="/Subscribelist/1">营养师</a></p>
                        <p class="col-md-12 col-sm-3 col-xs-4 column" style="background:white;text-align:center;height:60px;line-height:60px;color:#000;font-size:16px;"><a href="/Subscribelist/2">医生</a></p>
                        <p class="col-md-12 col-sm-3 col-xs-4 column" style="background:white;text-align:center;height:60px;line-height:60px;color:#000;font-size:16px;"><a href="/Subscribelist/3">健身教练</a></p>
                    </div>

                    <div class="col-md-10 column">
                            @foreach($list as $list)
                            <a href="{{ asset('/detailed') }}/{{ $list->id }}">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="thumbnail yy-wrap" style="border:1px solid #eee;border-radius:0px;padding:0 0;">
                                    <img style="width:100%;" alt="300x200" src="{{ $list->img }}" />
                                    <button type="button" class="yy-btn btn btn-success btn-default">预约</button>
                                    <div class="caption yys-js">
                                        <h5 style="text-align: center;">
                                            <strong>{{ $list->name }}  |  @if($list->class == 1)营养师@elseif($list->class == 2)医生@else健身教练@endif</strong>
                                            <p style="margin-top:10px;color:#aaa;">{{ $list->abstract }}</p>
                                        </h5>
                                        <p style="text-align: center;">
                                            {{ $list->Goodat }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach
                </div>
            </div>
        </div>
    <!--列表 end-->




<script type="text/javascript" src="{{ asset('reception/js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('reception/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
  /*  $('.yy-wrap').mouseover(function(){
        $(this).children().eq(1).show();
        $(this).children().eq(2).css("border-bottom","1px solid #89c86d");
    }).mouseout(function(){
            $(this).children().eq(1).hide();
            $(this).children().eq(2).css("border-bottom","none");//1px solid #ddd
    });*/

    var _width = $(window).width();
    if(_width<1024){
        $(".yy-btn").show();
    }else{
    $('.yy-wrap').mouseover(function(){
        $(this).children().eq(1).show();
        $(this).css("border-bottom","1px solid green");
        $(this).children().eq(2).css('background','#fafafa');
    }).mouseout(function(){
        $(this).children().eq(1).hide();
        $(this).css("border-bottom","1px solid #eee");//1px solid #ddd
        $(this).children().eq(2).css('background','none');
    });
    };



</script>


@endsection
