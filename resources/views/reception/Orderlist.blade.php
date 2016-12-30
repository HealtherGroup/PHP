@extends('reception.public.public')
@section('title','商品列表')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/Accountinformation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/chakanwuliu.css') }}">
@endsection
@section('content')
	<div class="Account-body width-auto">
		<div class="Account-body-header width-auto text-center">
			<img src="{{ asset('reception/images/yuanguoqi.png') }}" alt="">
			<p class="">昵称：{{ session('username') }}</p>
		</div>
		<div class="Account-body-nav area container">
			<ul class="row">
				<li class="col-lg-1 col-md-1"></li>
				<li class="col-lg-2 col-md-2">账户信息</li>
				<li class="col-lg-2 col-md-2">健康管理</li>
				<li class="col-lg-2 col-md-2">我的收藏夹</li>
				<li class="col-lg-2 col-md-2">我的订单
					<div class="Account-body-nav-div1"></div>
				</li>
				<li class="col-lg-2 col-md-2">售后服务</li>
				<li class="col-lg-1 col-md-1"></li>	
			</ul>
		</div>
		<div class="Account-body-subnav area">
			<div class="Account-order-nav width-auto overflow-h">
				<span class="float-left">待付款</span>
				<span class="float-left">待收货</span>
				<span class="float-left">待评价</span>
				<span class="float-left">退款</span>
				<span class="float-right zwq-active">全部订单</span>
			</div>
		</div>
		<table class="Account-body-main area" cellspacing="1" cellpadding="1">
			<thead class="hidden-xs">
				<tr class="border-bottom-10-CCC">
					<th>订单详情</th>
					<th>单价(元)</th>
					<th>数量</th>
					<th>小计(元)</th>
					<th>交易状态</th>
					<th>操作</th>
				</tr>
			</thead>
			 <tbody>
       @foreach($list as $list)
        <tr>
          <td class="padding-10"><b>下单时间：{{ $list->create_time }}　　订单号：{{ $list->oid }}</b></td>
        </tr>
      @foreach($orderdata as $orderdata1)
      @if( $orderdata1->oid == $list->oid )
        <tr>
          <td>
            <a class="float-left padding-left-20" href="{{ asset('/goods') }}/{{ $orderdata1->gid }}"><img style="width:100px;height:100px" class="img-responsive" src="{{ $orderdata1->img }}" alt=""></a>
            <div class="float-left">
              <p class="margin-left-10px margin-bottom-8" style="line-height:100PX;">{{ $orderdata1->gname }}</p>
            </div>
          </td>
          <td class="text-center">
            ￥ {{ $orderdata1->price }}
          </td>
          <td class="text-center">
            {{ $orderdata1->num }}
          </td>
          <td class="text-center">
            ￥{{ $orderdata1->price * $orderdata1->num }}
          </td>
          <td class="text-center">
            @if( $list->state == 2)
              已付款
            @elseif($list->state == 1)
              未付款
            @endif
        </tr>
      @endif
      @endforeach

        <tr class="border-bottom-1-s-C">
          <td>
            @if( $list->state == 2)

             <button type="button" onclick="cx('{{ $list->kname }}','{{ $list->kid }}')" class="btn btn-primary btn-lg margin-10" data-toggle="modal" data-target="#myModal">
  							查看物流
						</button>
            @elseif($list->state == 1)
              <a href="{{ asset('/alipay/ipay') }}/{{ $list->oid }}" class="Account-body-main-See text-center show" href="###">付款</a>
            @endif

          </td>
        </tr>
     @endforeach
      </tbody>			
		</table>
	</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade chakanwuliu" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">物流信息</h4>
      </div>
      <div class="modal-body">
        <div class="padding-20">
			<span><b>物流编号：</b></span>
			<p><b>LP00027121r124112424(顺风快递)</b></p>
			<p>物流信息：</p>
			<p>2016-9-20 16:42 <span>卖家已发货</span></p>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>	

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="./js/Account information.js"></script>	
	<script>
		function cx(name,id)
		{
			/cx/name/id

			
		}
	</script>
@endsection