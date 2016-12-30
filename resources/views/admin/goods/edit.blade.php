@extends('layouts.admin')
@include('UEditor::head')
@section('css')
<link href="{{asset('vendors/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
@inject('userPresenter','App\Presenters\Admin\UserPresenter')
<body>


<form class="form-horizontal" method="post" action="{{ asset('/admin/goodseditdo') }}" enctype="multipart/form-data" style="background-color: rgb(255, 255, 255);">
    <fieldset>
      <div id="legend" class="">
        <legend class=""><font><font>编辑商品</font></font></legend>
      </div>
      <input type="hidden" name="id" value="{{ $re->id }}" />
      <input type="submit" value="保存" />
    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>商品名称</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" value="{{ $re->name }}" name="name" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>商品单价</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" value="{{ $re->price }}" name="price" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>



    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>品牌产品</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="brand" value="{{ $re->brand }}" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>原产地</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" value="{{ $re->Countryoforigin }}" name="Countryofoigin" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>产品分类</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" value="{{ $re->class }}" name="class" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>净含量</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" value="{{ $re->netvolume }}" name="netvolume" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label"><font><font>是否推荐</font></font></label>
          <div class="controls">
      <!-- Multiple Radios -->
      <label class="radio">
        <input type="radio" value="1" name="commend" checked="checked"><font><font>
        不推荐
      </font></font></label>
      <label class="radio">
        <input type="radio" value="2" name="commend"><font><font>
        推荐
      </font></font></label>
  </div>
    <div class="control-group">
          <label class="control-label"><font><font>上传缩略图</font></font></label>

          <!-- File Upload -->
          <div class="controls">
            <input class="input-file" id="file" name="file" type="file">
          </div>
          <label class="control-label"><font><font>轮播图</font></font></label>
                      <input class="input-file" id="file" name="file1" type="file">
            <input class="input-file" id="file" name="file2" type="file">
            <input class="input-file" id="file" name="file3" type="file">
        </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- 加载编辑器的容器 -->
    <textarea id="container" name="content" style="height: 50px;">{{ $re->content }}</textarea>
    <input type="submit" value="提交">
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
