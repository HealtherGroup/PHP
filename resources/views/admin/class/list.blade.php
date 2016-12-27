@extends('layouts.admin')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/nestable/nestable.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/ladda/ladda-themeless.min.css')}}">
@endsection
@section('content')
@inject('menuPreseter','App\Presenters\Admin\MenuPresenter')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>{!!trans('admin/menu.title')!!}</h2>
    <ol class="breadcrumb">
      <li>
          <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
      </li>
      <li class="active">
          <strong>{!!trans('admin/breadcrumb.menu.list')!!}</strong>
      </li>
    </ol>
  </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
  <div class="row">
    @include('flash::message')
    <div class="col-lg-6">
      <div class="ibox animated fadeInRightBig">
        <div class="ibox-title">
            <h5>分类</h5>
        </div>
        <div class="ibox-content">
          <div class="dd" id="nestable">
              <ol class="dd-list">
                <div class="dd3-content">
                  <span class="label label-info"><i class="fa fa-compass"></i></span> 导航分类 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.testht.com/admin/menu/13" data-toggle="tooltip" data-original-title="查看" data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.testht.com/admin/menu/13/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip" data-original-title="修改" data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="13" data-original-title="删除" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i><form action="http://www.testht.com/admin/menu/13" method="POST" style="display:none"><input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="s7YVOYipVpJdIB0FNm1ozwtf26fPTSqzSL3OLWfA"></form></a></div>
                </div>
                  <ol class="dd-list">
                      <li class="dd-item dd3-item" data-id="14">
                      <div class="dd-handle dd3-handle">Drag</div>
                      <div class="dd3-content"><span class="label label-warning"><i class=""></i></span> 添加分类 <div class="pull-right"><a href="javascript:;" class="btn btn-xs tooltips showInfo" data-href="http://www.testht.com/admin/menu/14" data-toggle="tooltip" data-original-title="查看" data-placement="top"><i class="fa fa-eye"></i></a><a href="javascript:;" data-href="http://www.testht.com/admin/menu/14/edit" class="btn btn-xs tooltips editMenu" data-toggle="tooltip" data-original-title="修改" data-placement="top"><i class="fa fa-edit"></i></a><a href="javascript:;" class="btn btn-xs tooltips destroy_item" data-id="14" data-original-title="删除" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i><form action="http://www.testht.com/admin/menu/14" method="POST" style="display:none"><input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="s7YVOYipVpJdIB0FNm1ozwtf26fPTSqzSL3OLWfA"></form></a></div></div>
                    </li>
                </ol>
              </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 menuBox">
      <div class="middle-box text-center animated fadeInRightBig">
            <h3 class="font-bold">Welcome ！</h3>
            <div class="error-desc">
                你可以操作左侧菜单列表，或者点击下面添加按钮新增菜单！<br><a href="javascript:;" class="btn btn-primary m-t create_menu"><i class="fa fa-plus"></i> 添加菜单</a>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="{{asset('vendors/nestable/jquery.nestable.js')}}"></script>
<script src="{{asset('vendors/ladda/spin.min.js')}}"></script>
<script src="{{asset('vendors/ladda/ladda.min.js')}}"></script>
<script src="{{asset('vendors/ladda/ladda.jquery.min.js')}}"></script>
<script src="{{asset('vendors/layer/layer.js')}}"></script>
<script src="{{asset('admin/js/menu/menu.js')}}"></script>
<script type="text/javascript">
  $('#nestable').on('click','.destroy_item',function() {
    var _item = $(this);
    var title = "{{trans('admin/alert.deleteTitle')}}";
    layer.confirm(title, {
      btn: ['{{trans('admin/action.actionButton.destroy')}}', '{{trans('admin/action.actionButton.no')}}'],
      icon: 5
    },function(index){
      _item.children('form').submit();
      layer.close(index);
    });
  });
</script>
@endsection
