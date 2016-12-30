@extends('layouts.admin')
@section('css')
<link href="{{asset('vendors/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>商品列表</h2>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
        </li>
        <li class="active">
            <strong>商品列表</strong>
        </li>
    </ol>
  </div>
  @permission(config('admin.permissions.user.create'))
  <div class="col-lg-2">
    <div class="title-action">
      <a href="{{url('admin/addgoods')}}" class="btn btn-info">添加商品</a>
    </div>
  </div>
  @endpermission
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>商品列表</h5>
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
			          <tr style="text-align:center;">
			            <th>ID</th>
                  <th>图片</th>
			            <th width="180px">商品名</th>
			            <th width="180px">单价</th>
			            <th width="180px">分类</th>
                  <th width="120px">操作</th>
			          </tr>
		          </thead>
		          <tbody>
              @foreach($data as $data)
              <tr>
                    <td>{{ $data->id }}</td>
                    <td><img src="{{ asset('') }}{{ $data->thumbnail }}" style="width:80px;" /></td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->class }}</td>
                    <td >
                        <a href="{{ asset('/goods') }}/{{ $data->id }}"/>查看</a>
                        |<a href="{{ asset('/admin/goodsedit') }}/{{ $data->id }}">编辑</a>
                        |<a href="{{ asset('/admin/goodsde') }}/{{ $data->id }}">删除</a>
                    </td>
              </tr>
              @endforeach
		          </tbody>
	          </table>
<div style="float:right;" class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button first disabled" id="DataTables_Table_0_first"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">首页</a></li><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">上页</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">1</a></li><li class="paginate_button next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">下页</a></li><li class="paginate_button last disabled" id="DataTables_Table_0_last"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0">末页</a></li></ul></div>
          </div>
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
