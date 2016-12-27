@extends('reception.public.public')
@section('title','相关新闻')
@section('style')
    <!--<link rel="stylesheet" type="text/css" href="src/css/newsList.css"/>-->
    <link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/newsContent.css') }}"/>
@endsection
@section('content')
	<div class="width-auto miaobaoxie">
		<ol class="area">
  			<li><a href="/">首页</a></li>
  			<li>></li>
  			<li class="color-green"><a href="#" onClick="javascript:history.back(-1);">上一页</a></li>
		</ol>
	</div>
    <div class="width-auto bgc-b1 news-list-box">
        <div class="news-list-warp clearfix">
            <div class="newslist-content">
                <h1>
                    {{ $content->title }}
                </h1>
                    <p>{{ $content->time}}</p>
                <p>
                    {!! $content->content !!}
                </p>
            </div>
        </div>
    </div>
@endsection
