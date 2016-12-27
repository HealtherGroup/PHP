@extends('layouts.admin')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
      <h2>Hi,{{getUser()->name}}</h2>
      <ol class="breadcrumb">
      <!--
          <li>
              <a href="index.html">This is</a>
          </li>
          <li class="active">
              <strong>Breadcrumb</strong>
          </li>
      -->
      </ol>
  </div>

</div>
<div class="wrapper wrapper-content">
    <div class="middle-box text-center animated fadeInRightBig">
        <h3 class="font-bold">这是页面内容</h3>
        <div class="error-desc">
            登录信息等待添加
            <br/><!--<a href="index.html" class="btn btn-primary m-t">Dashboard</a>-->
        </div>
    </div>
</div>
@endsection
