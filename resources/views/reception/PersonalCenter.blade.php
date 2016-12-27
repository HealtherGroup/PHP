@extends('reception.public.public')
@section('title','个人中心')
@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/account.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/repeat.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('reception/css/Accountinformation.css') }}">
@endsection
@section('content')
<div class="Account-body-header width-auto text-center">
			<img src="{{ asset('reception/images/yuanguoqi.png') }}" alt="">
			<p class="">昵称：{{ session("username") }}</p>
		</div>
		<div class="Account-body-nav area container">
			<ul class="row">
				<li class="col-lg-1 col-md-1"></li>
				<li class="col-lg-2 col-md-2"><a href="{{ asset('/PersonalCenter') }}">账户信息<a><div class="Account-body-nav-div1"></div></li>
				<li class="col-lg-2 col-md-2"><a href="{{ asset('/Orderlist') }}">我的订单</a></li>
        <li class="col-lg-2 col-md-2"><a href="{{ asset('/bespokeorderlist') }}">预约订单</a></li>
				<li class="col-lg-2 col-md-2"><a href="{{ asset('/addresslist') }}">地址管理</a></li>
			</ul>
		</div>
<div class="col-md-12 column" id="ziliao">
                <div class="tabbable" id="tabs-624564">
                  <ul class="nav nav-tabs">
                    <li>
                       <a href="#panel-622402" data-toggle="tab">基本资料</a>
                    </li>
                  </ul>
                  <div class="tab-content" style="padding-bottom:5%;">
                    <div class="tab-pane active" id="panel-622402">

                      <!--基本资料-->
                        <p>
                          </p><div class="col-md-12 column">
                            <form class="form-horizontal active" method="post" action="modify">
                            {{ csrf_field() }}
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-sm-3 control-label">用户昵称</label>
                                <div class="col-sm-5">
                                  <input class="form-control" name="petname"id="userName" type="text" value="{{ $grxx->petname }}"><span id="userInfo"></span>
                                </div>
                              </div>

                              <!-- <div class="form-group">
                                 <label for="inputEmail3" class="col-sm-3 control-label">姓名</label>
                                <div class="col-sm-5">
                                  <input class="form-control" id="name" type="text" /><span id="nameInfo"></span>
                                </div>
                              </div> -->


                              <div class="form-group">
                                 <label for="inputEmail3" class="col-sm-3 control-label">电子邮箱</label>
                                <div class="col-sm-5">
                                  <input class="form-control" id="email" name="email" type="text" value="{{ $grxx->email }}"><span id="emailInfo"></span>
                                </div>
                              </div>

                              <div class="form-group">
                                 <label for="inputEmail3" class="col-sm-3 control-label">手机号码</label>
                                <div class="col-sm-5">
                                  <input class="form-control" id="phone" name="phone" type="text" value="{{ $grxx->phone }}"><span id="phoneInfo"></span>
                                </div>
                              </div>
<!--
                              <div class="form-group">
                                 <label for="inputEmail3" class="col-sm-3 control-label">年龄</label>
                                <div class="col-sm-5">
                                  <input class="form-control" id="age" type="text" /><span id="ageInfo"></span>
                                </div>
                              </div> -->

                             <!--  <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">生日</label>
                               <div class="col-sm-5">
                                 <input class="form-control" id="age" type="date" /><span id="ageInfo"></span>
                               </div>
                             </div>
                              -->
                             <!--  <div class="form-group">
                                 <label for="inputEmail3" class="col-sm-3 control-label">性别</label>
                                <div class="col-sm-5">
                                  <input name="sex" type="radio" value="nan"> 男
                                  <input name="sex" type="radio" value="nv">  女
                                </div>
                              </div> -->
                              <div style="padding-left:10%;">
                                <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-6" style="float:right;">
                                       <button type="submit" value="保存" class="btn btn-default btn-success">保存</button>

                                  </div>
                                </div>
                              </div>
                              </form>
                            </div>
                          <p></p>
                      <!--基本资料 end-->
                    </div>

                    <div class="tab-pane " id="panel-658392">
                      <!--完善资料-->
                        <p>
                          </p><div class="col-md-12 column">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您的健康目标</label>
                                <div class="col-sm-5">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                 </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您的兴趣爱好</label>
                                <div class="col-sm-5">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">打篮球</option>
                                    <option value="2">踢足球</option>
                                    <option value="3">跑步</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您的身高</label>
                                <div class="col-sm-3">
                                  <p style="color:#92CD7B">尺码填写</p>
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">160</option>
                                    <option value="2">161</option>
                                    <option value="3">162</option>
                                    <option value="3">163</option>
                                    <option value="3">164</option>
                                    <option value="3">165</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <p style="color:#92CD7B">尺码填写</p>
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">cm</option>
                                    <option value="2">m</option>
                                  </select>
                                </div>
                              </div>

                               <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您的初始体重</label>
                                <div class="col-sm-3">

                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">100</option>
                                    <option value="2">110</option>
                                    <option value="3">120</option>
                                    <option value="3">130</option>
                                    <option value="3">140</option>
                                    <option value="3">150</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">kg</option>
                                    <option value="2">斤</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您的目标体重</label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">60</option>
                                    <option value="2">70</option>
                                    <option value="3">80</option>
                                    <option value="3">90</option>
                                    <option value="3">100</option>
                                    <option value="3">110</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">kg</option>
                                    <option value="2">斤</option>
                                  </select>
                                </div>
                              </div>

                             <!--  <div class="form-group">
                               <label for="inputEmail3" class="col-sm-2 control-label">目标达成时间</label>
                               <div class="col-sm-3">
                                 <input class="form-control" id="inputPassword3" type="text" onclick="laydate()">
                               </div>
                             </div>   -->

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">目标达成时间</label>
                                <div class="col-sm-3">
                                  <input style="height:30px;" class="laydate-icon form-control" id="hello1" type="text" onclick="laydate({elem: '#hello1'});">
                                </div>
                              </div>

                               <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您的三围分别是</label>
                                <div class="col-sm-3">
                                  <p style="color:#92CD7B">尺码填写</p>

                                </div>

                                <div class="col-sm-2">
                                  <p style="color:#92CD7B">尺码填写</p>
                                </div>
                              </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">腰围</label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">160</option>
                                    <option value="2">161</option>
                                    <option value="3">162</option>
                                    <option value="3">163</option>
                                    <option value="3">164</option>
                                    <option value="3">165</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">cm</option>
                                    <option value="2">m</option>
                                  </select>
                                </div>
                              </div>

                               <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">胸围</label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">160</option>
                                    <option value="2">161</option>
                                    <option value="3">162</option>
                                    <option value="3">163</option>
                                    <option value="3">164</option>
                                    <option value="3">165</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">cm</option>
                                    <option value="2">m</option>
                                  </select>
                                </div>
                              </div>

                               <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">臀围</label>
                                <div class="col-sm-3">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">160</option>
                                    <option value="2">161</option>
                                    <option value="3">162</option>
                                    <option value="3">163</option>
                                    <option value="3">164</option>
                                    <option value="3">165</option>
                                  </select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">cm</option>
                                    <option value="2">m</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您现在是否有慢性病 ？(请填写具体)</label>
                                <div class="col-sm-5">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">打篮球</option>
                                    <option value="2">踢足球</option>
                                    <option value="3">跑步</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">您目前是否怀孕 ？(男性隐去此项)</label>
                                <div class="col-sm-5">
                                  <select class="form-control" id="inputPassword3" type="">
                                    <option value="1">打篮球</option>
                                    <option value="2">踢足球</option>
                                    <option value="3">跑步</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="checkbox">
                                     <label><input type="checkbox">请问您是否同意将您的健康档案信息开放给我们HealtherGroup专家团队。</label>
                                  </div>
                                </div>
                              </div>

                               <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-6" style="float:right;">
                                       <button type="button" class="btn btn-default btn-success">保存</button>
                                  </div>
                                </div>

                            </form>
                          </div>
                        <p></p>
                      <!--完善资料 end-->
                    </div>

                    <div class="tab-pane" id="panel-622403" style="padding-bottom:5%;">
                      <!--反馈建议-->
                       <p>
                          </p><div class="col-md-12 column">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您是在哪里得知HealtherGroup网站的？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                               <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您最关注的健康产品是哪类？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您最关注的健康餐饮产品是哪类？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您最关注的运动电子产品是什么？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您最关注的环保家居产品是什么？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您希望在HealtherGroup网站上购买到什么产品？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您希望在HealtherGroup APP上有哪些功能？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">您希望在HealtherGroup微信公众平台获得哪些信息？</label>
                                <div class="col-sm-4">
                                  <select class="form-control" id="inputPassword3" type="登陆账号">
                                    <option value="1">强壮</option>
                                    <option value="2">开心</option>
                                    <option value="3">洒脱</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-4 control-label">请提供您的宝贵建议：</label><br>
                                  <textarea class="col-sm-4" name="a" id="" cols="30" rows="10"></textarea>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-6" style="float:right;">
                                     <button type="button" class="btn btn-default btn-success">保存</button>
                                </div>
                              </div>

                            </form>
                          </div>
                        <p></p>
                      <!--反馈建议 end-->
                    </div>


                  </div>
                </div>
              </div>
@endsection
