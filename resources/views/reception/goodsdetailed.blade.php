@extends('reception.public.public')
@section('title',$detailed->name)
@section('style')
        <link rel="stylesheet" href="{{ asset('reception/css/details.css') }}"/>
        <link rel="stylesheet" href="{{ asset('reception/css/details2.css') }}"/>
        <link rel="stylesheet" href="{{ asset('reception/css/details3.css') }}" />
        <style type="text/css">
            @media (max-width: 767px){
		#main-gallery img{width:100%;}
		#main-gallery button{display: none;}
	    }
            #content img{
                width:100%;
            }
        </style>
@endsection
@section('content')
	<div class="width-auto miaobaoxie">
		<ol class="area">
  			<li><a href="/">首页</a></li>
  			<li>></li>
  			<li class="color-green"><a href="#" onClick="javascript:history.back(-1);">上一页</a></li>
		</ol>
	</div>
        <div class="container">
            <div class="warp m-t60 clearfix">
                <div class="left">
                    <div id="main-gallery" class="js-flickity" data-flickity-options='{ "cellAlign": "right", "contain": true , "wrapAround": true}'>
                        @foreach($img as $img)
                        <div class="cell width-auto"><img style="width:50%;height:50%;" src="{{ $img->img }}"/></div>
                        @endforeach
                    </div>
                </div>

                <div class="right">
                    <h2 class="h-name">{{ $detailed->name }}</h2>

                    <div class="l-h40">
                        <span class="price">￥{{ $detailed->price }}</span>
                        <span class="sales">销量{{ $detailed->sales }}件</span>
                    </div>

		    		<div class="l-h40 m-b20" style="width:100px;margin-left:70%;">
		    			<button class="minus">-</button><input class="num" disabled="disabled" type="text" id="" value="1" /><button class="plus">+</button>
		    		</div>


                <div class="l-h40 text-center">
                    <button class="button buy"><a href="{{ asset('/Order') }}/{{ $detailed->id }}" style="color:white;">立即购买</a></button>
                    <button class="button add"><a href="{{ asset('/ShoppingCart/getInsert') }}/{{ $detailed->id }}"style="color:#89C86D;">加入购物车</a></button>
                </div>
                </div>
            </div>

            <div class="row">
                <h4 class="col-md-2  col-sm-2 col-xs-4">产品规格</h4>
                <ul class="col-md-2  col-sm-2 col-xs-4">
                    <li>品牌产品</li>
                    <li>原产地</li>
                    <li>产品分类</li>
                    <li>净含量</li>
                </ul>

                <ul class="col-md-3  col-sm-3 col-xs-4">
                    <li>{{ $detailed->brand }}</li>
                    <li>{{ $detailed->Countryoforigin }}</li>
                    <li>{{ $detailed->class }}</li>
                    <li>{{ $detailed->netvolume }}</li>
                </ul>

            </div>

            <div class="row" id="content">
                <h4 class="col-md-2">产品介绍</h4>
                    {!! $detailed->content !!}
            </div>

        </div>



        <script src="{{ asset('reception/js/jquery.min.js') }}" type="text/javascript" charset="utf-8"></script>

        <script src="{{ asset('reception/js/flickity.pkgd.min.js') }}" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function(){
	//获得文本框对象
	   var t = $(".num");
	//初始化数量为1,并失效减
	$('.minus').attr('disabled',true);
	    //数量增加操作
	    $(".plus").click(function(){
	        t.val(parseInt(t.val())+1)
	        if (parseInt(t.val())!=1){
	            $('.minus').attr('disabled',false);
	        }

	    })
	    //数量减少操作
	    $(".minus").click(function(){
	        t.val(parseInt(t.val())-1);
	        if (parseInt(t.val())==1){
	            $('.minus').attr('disabled',true);
	        }

	    })

	});
var val = '';
         $("img").attr({title:val});
</script>
@endsection
