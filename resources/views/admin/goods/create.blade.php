@extends('layouts.admin')
@section('css')
<link href="{{asset('vendors/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
@inject('userPresenter','App\Presenters\Admin\UserPresenter')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>{!!trans('admin/user.title')!!}</h2>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
        </li>
        <li>
            <a href="{{url('admin/homeuser')}}">{!!trans('admin/breadcrumb.user.list')!!}</a>
        </li>
        <li class="active">
            <strong>{!!trans('admin/breadcrumb.user.create')!!}</strong>
        </li>
    </ol>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>{!!trans('admin/breadcrumb.user.create')!!}</h5>
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
          <form method="post" action="{{url('admin/homeuser/createdo')}}" class="form-horizontal">
            {{csrf_field()}}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="col-sm-2 control-label">用户名</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" value="{{old('name')}}" placeholder="{{trans('admin/user.model.name')}}">
                <span class="help-block m-b-none text-danger">{{ $errors->first('name') }}</span>

              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <label class="col-sm-2 control-label">昵称</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="petname" value="{{old('username')}}" placeholder="{{trans('admin/user.model.username')}}">
                <span class="help-block m-b-none text-danger">{{ $errors->first('username') }}</span>
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="col-sm-2 control-label">密码</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="{{trans('admin/user.model.password')}}">
                <span class="help-block m-b-none text-danger">{{ $errors->first('password') }}</span>
              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="col-sm-2 control-label">邮箱</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="{{trans('admin/user.model.email')}}">

                <span class="help-block m-b-none text-danger">{{ $errors->first('email') }}</span>

              </div>
            </div>
            <div class="hr-line-dashed"></div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="col-sm-2 control-label">手机</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" value="{{old('email')}}" placeholder="手机">

                <span class="help-block m-b-none text-danger">{{ $errors->first('email') }}</span>

              </div>
            </div>
            <div class="hr-line-dashed"></div>


            <div class="hr-line-dashed"></div>
            <div class="form-group">
              <div class="col-sm-4 col-sm-offset-2">
                  <a class="btn btn-white" href="{{url()->previous()}}">{!!trans('admin/action.actionButton.cancel')!!}</a>
                  <button class="btn btn-primary" type="submit">{!!trans('admin/action.actionButton.submit')!!}</button>
              </div>
            </div>
          </form>
        </div>
    </div>
  	</div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/user/user.js')}}"></script>
@endsection
