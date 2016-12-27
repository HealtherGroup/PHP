@extends('reception.public.public')
@section('title','相关新闻')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/newsList.css') }}"/>
    <div class="width-auto bgc-b1 news-list-box">
        <div class="news-list-warp clearfix">
            <div class="news-list-item-warp">
                <a href="{{url('/newslist/details')}}">
                    <div class="news-list-item clearfix">
                        <div class="newslist-item-left">
                            <img src="src/img/newsimg.jpg" alt="" />
                        </div>
                        <h2>这款智能台灯 让你感受视觉“咖啡因..</h2>
                        <span class="newslist-item-class">健康科技产品</span>
                        <p class="newslist-item-txt">除了一杯接一杯的咖啡，还有别的方法能够让人保持清醒的状态吗？那些广告满天飞的功能饮料不算。我们可能都没想过，一盏台灯，能提供视觉“咖啡因”。</p>
                        <span>2016-09-18</span>
                    </div>
                </a>

                <a href="#">
                    <div class="news-list-item clearfix">
                        <div class="newslist-item-left">
                            <img src="src/img/newsimg.jpg" alt="" />
                        </div>
                        <h2>这款智能台灯 让你感受视觉“咖啡因..</h2>
                        <span class="newslist-item-class">健康科技产品</span>
                        <p class="newslist-item-txt">除了一杯接一杯的咖啡，还有别的方法能够让人保持清醒的状态吗？那些广告满天飞的功能饮料不算。我们可能都没想过，一盏台灯，能提供视觉“咖啡因”。</p>
                        <span>2016-09-18</span>
                    </div>
                </a>
            </div>

            <div class="news-list-recom">
                <h2>
                    推荐
                </h2>

                <ul>
                    <li>
                        <img src="src/img/newsimg.jpg"/>
                        <h3>这款智能台灯 让你感受视觉"咖啡因"</h3>
                    </li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
