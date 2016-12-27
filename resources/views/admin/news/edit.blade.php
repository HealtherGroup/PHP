@extends('layouts.admin')
@section('css')
<link href="{{asset('vendors/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
@inject('userPresenter','App\Presenters\Admin\UserPresenter')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>用户管理</h2>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
        </li>
        <li>
            <a href="{{url('admin/homeuser')}}">{!!trans('admin/breadcrumb.user.list')!!}</a>
        </li>
        <li class="active">
            <strong>用户信息修改</strong>
        </li>
    </ol>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>修改信息</h5>
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
          <form class="form-horizontal" method="post" action="{{ asset('admin/homeuser/doedit') }}">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="col-sm-2 control-label">ID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="id" value="{{ $data->id }}" >
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">昵称</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="petname" value="{{ $data->petname }}" placeholder="昵称">
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">用户名</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="{{ $data->username }}" placeholder="用户名">
              </div>
            </div>
            <div class="hr-line-dashed"></div>
                        <div class="form-group">
              <label class="col-sm-2 control-label">手机</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value="{{ $data->phone }}" placeholder="手机">
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <label class="col-sm-2 control-label">邮箱</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="邮箱">
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                  <a class="btn btn-white" href="{{url('admin/homeuser')}}"><i class="fa fa-reply"></i> 返回</a>
                  <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane-o"></i> 提交</button>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <div class="ibox float-e-margins">
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
    </div>
  </div>
</div>
@include('admin.user.modal')
@endsection
@section('js')
<script type="text/javascript" src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/user/user.js')}}"></script>
@endsection
