@extends('layouts.admin')
@section('css')
<link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>订单详情</h2>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
        </li>
        <li class="active">
            <strong><a href="/admin/orderlist">订单列表</a></strong>
        </li>
           <li class="active">
            <a href="#" onClick="javascript:history.back(-1);">返回</a>
        </li>
    </ol>
  </div>
  @permission(config('admin.permissions.user.create'))
  <div class="col-lg-2">
   
  </div>
  @endpermission
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>订单列表</h5>
          <div class="ibox-tools">
            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">
          @include('flash::message')
          <div class="table-responsive">
	          <table class="table table-striped table-bordered table-hover dataTablesAjax" >
                      
                      <thead>
                      <tr>
                          <td colspan="6"><span style="color:orange">订单号：{{$list[0]->oid}}</span>
                          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                          <span style="color:orange">下单时间:{{$list[0]->create_time}}&nbsp &nbsp &nbsp &nbsp &nbsp @if($list[0]->state =='1') <span style="color:red">未付款</span> @else($list[0]->state=='2') <span style="color:green">已付款 @endif</td>
                      </tr>     
		      </thead>
		          <tbody>
                               <tr style="text-align:center;">
                                   
			            <th>商品展示</th>
                                     <th>商品名称</th>
			            <th>单价</th>
			            <th>购买数量</th>
			          </tr>
            @foreach($list as $list)
              <tr style="height:100px; line-height:100px;">
                   
                  <td><a href="/goods/{{ $list->gid }}"><img src="{{ $list->img }}" style="width:80px;" /></a></td>
                     <td>{{ $list->gname }}</td>
                    <td>{{ $list->price }}</td>
                    <td>{{ $list->num }}</td>
              </tr>
            @endforeach
		          </tbody>
	          </table>
              @if($list->state == 2)
              <p><span><b>收货人信息：</b></span></p>
              <p>收货人：{{$address->name}}</p>
              <p>联系方式：{{$address->phone}}</p>
              <p>收货地址：{{$address->country}}{{$address->address}}</p>
              @if($list->kid == null)
              <form action="/admin/orderlist/detail/send" method="post">
                  <table>
                      {{ csrf_field() }}
                      <input type="hidden" name="oid" value="{{$list->oid}}"/>
                        <tr>
                            <td><span style="color:red">{{ session("msg") }}
                            </span></td>
                        </tr>
                        <tr>
                            <td>快递单号：<input type="text" name="kid"/></td>
                        </tr>
                        <tr>
                            <td>快递名称：<input type="text" name="kname"/></td>
                        </tr>
                        <tr>
                            <td>快递别名：<input type="text" name="kmark"/>（请填写快递英文全拼）</td>
                        </tr>
                          <tr>
                            <td><input type="submit" value="发货"/></td>
                        </tr>
                      
                  </table>
              </form>
              @else
              <p>快递单号：{{$list->kid}}</p>
              <p>快递名称：{{$list->kname}}</p>
              <p>快递别名：{{$list->kmark}}</p>
              @endif
              @endif</td>
                      </tr>     

        </div>
      </div>
  	</div>
  </div>
</div>
@endsection
@section('js')
<script src="{{asset('vendors/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('vendors/layer/layer.js')}}"></script>
<script type="text/javascript">
  $(document).on('click','.destroy_item',function() {
    var _item = $(this);
    layer.confirm('{{trans('admin/alert.deleteTitle')}}', {
      btn: ['{{trans('admin/action.actionButton.destroy')}}', '{{trans('admin/action.actionButton.no')}}'],
      icon: 5,
    },function(index){
      _item.children('form').submit();
      layer.close(index);
    });
  });
  $(document).on('click','.reset_password',function() {
    var item = $(this);
    layer.confirm('{{trans('admin/alert.reset_password').config('admin.global.reset')}}', {
      btn: ['{{trans('admin/action.actionButton.reset')}}','{{trans('admin/action.actionButton.no')}}'] //按钮
    }, function(){
      var _id = item.attr('data-id');
      $.ajax({
        url:'/admin/homeuser/reset/'+_id+'',
        success:function (response) {
          layer.msg('成功');
          layer.close(index);
        }
      });
    });
  });
</script>
@endsection
