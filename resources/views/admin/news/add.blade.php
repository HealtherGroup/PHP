@extends('layouts.admin')
@include('UEditor::head')
@section('css')
<link href="{{asset('vendors/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
@inject('userPresenter','App\Presenters\Admin\UserPresenter')
<body>


<form class="form-horizontal" method="post" action="{{ asset('/admin/doaddnews') }}" enctype="multipart/form-data" style="background-color: rgb(255, 255, 255);">
    <fieldset>
      <div id="legend" class="">
        <legend class=""><font><font>发布新闻</font></font></legend>

      </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>新闻标题</font></font></label>
                  <input type="submit" value="发布" />
          <div class="controls">
            <input type="text" placeholder="placeholder" name="name" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>新闻简介</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="intro" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>

    <div class="control-group">
          <label class="control-label"><font><font>上传缩略图</font></font></label>

          <!-- File Upload -->
          <div class="controls">
            <input class="input-file" id="file" name="file" type="file">
          </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- 加载编辑器的容器 -->
    <textarea id="container" name="content" style="height: 50px;">这里写你的初始化内容</textarea>
    </fieldset>
  </form>

</body>
@include('admin.user.modal')
@endsection
@section('js')
<script type="text/javascript">
    var ue = UE.getEditor('container', {
            initialFrameWidth : 1200,
            initialFrameHeight : 350,
    });
    ue.ready(function() {
            //此处为支持laravel5 csrf ,根据实际情况修改,目的就是设置 _token 值.
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>
<script type="text/javascript" src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/user/user.js')}}"></script>
@endsection
