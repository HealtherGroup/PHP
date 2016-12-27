@extends('layouts.admin')
@include('UEditor::head')
@section('css')
<link href="{{asset('vendors/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('content')
@inject('userPresenter','App\Presenters\Admin\UserPresenter')
<body>


<form class="form-horizontal" method="post" action="{{ asset('/admin/doaddgoods') }}" enctype="multipart/form-data" style="background-color: rgb(255, 255, 255);">
    <fieldset>
      <div id="legend" class="">
        <legend class=""><font><font>添加商品</font></font></legend>
      </div>
    <div class="control-group">

          <!-- Select Basic -->
          <label class="control-label"><font><font>产品分类</font></font></label>
          <div class="controls">
            <select class="input-xlarge" name="pid">
            @foreach($list as $list)
              <option value="{{ $list->id }}">{{ $list->name }}</option>
            @endforeach
            </select>
          <input type="submit" value="发布" />
          </div>

      </div>

    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>商品名称</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="name" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>
    <div class="control-group">
          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>商品单价</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="price" class="input-xlarge">
            <p class="help-block"></p>
          </div>
    </div>



    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>品牌产品</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="brand" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>原产地</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="Countryofoigin" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>产品分类</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="class" class="input-xlarge">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01"><font><font>净含量</font></font></label>
          <div class="controls">
            <input type="text" placeholder="placeholder" name="netvolume" class="input-xlarge">
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
    <textarea id="container" name="content" style="height: 50px;">这里写你的初始化内容</textarea>
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
