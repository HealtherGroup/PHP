@extends('reception.public.public')
@section('title',$detailed->name)
@section('style')
        <link rel="stylesheet" href="{{ asset('reception/css/details.css') }}"/>
        <link rel="stylesheet" href="{{ asset('reception/css/details2.css') }}"/>
        <link rel="stylesheet" href="{{ asset('reception/css/details3.css') }}" />
@endsection
@section('content')
        <div class="warp m-t60 clearfix">
            <div class="left">
                <div id="main-gallery" class="js-flickity" data-flickity-options='{ "cellAlign": "right", "contain": true , "wrapAround": true}'>
                    @foreach($img as $img)
                    <div class="cell width-auto"><img src="{{ $img->img }}"/></div>
                    @endforeach
                </div>
            </div>

            <div class="right">
                <h2 class="h-name">{{ $detailed->name }}</h2>

                <div class="l-h40">
                    <span class="price">￥{{ $detailed->price }}</span>
                    <span class="sales">销量{{ $detailed->sales }}件</span>
                </div>

                <div class="l-h40 m-b20">
                    <button class="plus">+</button><input class="num" type="text" id="" value="1" /><button class="minus">-</button>
                </div>

                <div class="l-h40 text-center">
                    <button class="button buy"><a href="{{ asset('/Order') }}/{{ $detailed->id }}" style="color:white;">立即购买</a></button>
                    <button class="button add"><a href="{{ asset('/ShoppingCart/getInsert') }}/{{ $detailed->id }}"style="color:#89C86D;">加入购物车</a></button>
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


            <div class="warp clearfix">
                <div class="left">
                    <div class="left-h">
                        产品描述
                    </div>
                    <div class="right-txt">
                        {!! $detailed->content !!}
                    </div>
                </div>

            </div>

        <script src="{{ asset('reception/js/flickity.pkgd.min.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
