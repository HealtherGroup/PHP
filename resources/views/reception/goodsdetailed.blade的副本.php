@extends('reception.public.public')
@section('title',$detailed->name)
@section('style')
    <link rel="stylesheet" href="{{ asset('reception/src/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('reception/src/css/repeat.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/Details.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/flickity.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat.css') }}">
@endsection
@section('content')
<div class="warp m-t60 clearfix">
            <div class="left">
                <div id="main-gallery" class="js-flickity flickity-enabled" data-flickity-options="{ &quot;cellAlign&quot;: &quot;right&quot;, &quot;contain&quot;: true , &quot;wrapAround&quot;: true}" tabindex="0">
                <div class="flickity-viewport" style="height: 364px;"><div class="flickity-slider" style="left: 0px; transform: translateX(0%);"><div class="cell width-auto is-selected" style="position: absolute; left: 0%;"><img src="{{ $detailed->thumbnail }}"></div><div class="cell width-auto" style="position: absolute; left: 100%;"><img src="{{ asset('reception/src/img/goods/yuhudie/yq0KX1auunmAGPrtAAEOefd9PvU796.jpg') }}"></div><div class="cell width-auto" style="position: absolute; left: 200%;"><img src="{{ asset('reception/src/img/goods/yuhudie/yq0KXVack_KAS-igAAJQ5nKNi7Q325.jpg') }}"></div></div></div><button class="flickity-prev-next-button previous"><svg viewBox="0 0 100 100"><path d="M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z" class="arrow" transform="translate(15,0)"></path></svg></button><button class="flickity-prev-next-button next"><svg viewBox="0 0 100 100"><path d="M 50,0 L 60,10 L 20,50 L 60,90 L 50,100 L 0,50 Z" class="arrow" transform="translate(85,100) rotate(180)"></path></svg></button><ol class="flickity-page-dots"><li class="dot is-selected"></li><li class="dot"></li><li class="dot"></li></ol></div>
            </div>

            <div class="right">
                <h2 class="h-name">{{ $detailed->name }}</h2>

                <div class="l-h40">
                    <span class="price">￥{{ $detailed->price }}</span>
                    <span class="sales">销量{{ $detailed->sales }}件</span>
                </div>

                <div class="l-h40 market-price">市场价:{{ $detailed->price }}</div>

                <div class="l-h40 m-b20">
                    <button class="plus">+</button><input class="num" type="text" id="" value="1"><button class="minus">-</button>
                </div>
                <input type="hidden" value='{{ $detailed->name }}' name="goodsname">
                <input type="hidden" value='{{ $detailed->price }}' name="goodsprice">
                <input type="hidden" value='{{ $detailed->introduce }}' name="goodsintroduce">
                <div class="l-h40 text-center">
                    <button class="button buy"><a href="{{ asset('/Order') }}/{{ $detailed->id }}">立即购买</a></button>
                    <button class="button add"><a href="{{ asset('/ShoppingCart/getInsert') }}/{{ $detailed->id }}">加入购物车</a></button>
                </div>
            </div>
        </div>
        <div class="warp clearfix">
            <div class="left">
                <div class="left-h">
                    产品规格
                </div>
                <div class="right-txt">
                    <div class="col-6 pull-left">品牌产品</div>
                    <div class="col-6 pull-left">{{ $detailed->brand }}</div>

                    <div class="col-6 pull-left">原产地</div>
                    <div class="col-6 pull-left">{{ $detailed->Countryoforigin }}</div>

                    <div class="col-6 pull-left">产品分类</div>
                    <div class="col-6 pull-left">{{ $detailed->class }}</div>

                    <div class="col-6 pull-left">净含量</div>
                    <div class="col-6 pull-left">{{ $detailed->netvolume }}</div>
                </div>
            </div>

                        <div class="left">
                <div class="left-h">
                    产品描述
                </div>
                <div class="right-txt">
                    {!! $detailed->content !!}
                </div>
            </div>

        </div>
@endsection
