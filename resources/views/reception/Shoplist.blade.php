@extends('reception.public.public')
@section('title','商品列表')
@section('style')

@endsection
@section('content')
<!--列表-->
	<div class="width-auto miaobaoxie">
		<ol class="area">
  			<li><a href="/">首页</a></li>
  			<li>></li>
  			<li class="color-green"><a href="#" onClick="javascript:history.back(-1);">上一页</a></li>
		</ol>
	</div>
    <div class="container">
        <div class="row clearfix">
          <div class="col-md-12 column">
            <h6 style="font-size:16px;font-weight:bold;margin-top:20px;">
            </h6>
          </div>
        </div>

      <div class="row clearfix">
        <div class="col-md-3"></div>
        <div class="col-md-9 column hidden-xs">
          <div style="height:35px;background: #F1F1F1;">
            <ul id="list-left" style="height:25px;">
              <li style="background:#89c86d;width:56px;height:100%;float:left;text-align:center;line-height:25px;color:white;margin-left:5px;margin-top:5px;">按销量</li>
              <li style="background:white;width:56px;height:100%;float:left;text-align:center;line-height:25px;margin-top:5px">按价格</li>
              <li style="background:white;width:56px;height:100%;float:left;text-align:center;line-height:25px;margin-top:5px">按评价</li>

              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-12 column" >
          <div class="col-md-12 column" style="margin-top:10px;">
            <div class="row clearfix">
              <div class="col-md-3 col-sm-12 column hidden-xs" style="padding:0 15px 0 0;">
                <a href="{{ asset('/Shoplist') }}" class="col-md-12 col-sm-6 " style="background:#89c86d;text-align:center;height:60px;line-height:60px;color:white;font-size:16px;margin-top: 20px;">全部产品</a>
              @foreach($data3 as $data3)
                <a href="{{ asset('/Shoplist') }}/{{ $data3->id }}" class="col-md-12 col-sm-6 " style="background:#89c86d;text-align:center;height:60px;line-height:60px;color:white;font-size:16px;margin-top: 20px;">{{ $data3->name }}</a>
              @endforeach
              </div>

              <div class="col-md-9 col-sm-12 column">
                <!--  one -->
                  <div class="row clearfix">
                    <div class="col-md-12 column">
                      <div class="row">
                        @foreach($shoplist as $shoplist1)
                        <div class="col-md-3 col-sm-5" style="margin-top:20px;">
                          <div class="thumbnail">
                            <a href="{{ asset('/goods') }}/{{ $shoplist1->id }}"><img alt="300x200" style="width:100%;" src="{{ $shoplist1->thumbnail }}" /></a>
                            <div class="caption">
                              <h4 style="text-align: center;font-size:14px;">
                                <a href="{{ asset('/goods') }}/{{ $shoplist1->id }}">{{ $shoplist1->name }}</a>
                              </h4>
                              <p style="color:#89c86d;text-align: center;font-size:14px;">
                                ￥{{ $shoplist1->price }}
                              </p>

                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                <!-- one end -->
                <div class="box-footer clearfix">

                  <ul class="pagination pagination-sm no-margin pull-right">
                    {!! $shoplist->render() !!}
                  </ul>
                </div>

                </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  <!--列表 end-->
@endsection

