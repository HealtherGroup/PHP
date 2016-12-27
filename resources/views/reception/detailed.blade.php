@extends('reception.public.public')
@section('title','个人介绍')
@section('content')
    <style type="text/css">
    ul,li{list-style:none;}
        @media (max-width:414px){
        #people{margin-left:25%;}
        #doc-js{text-align: center;}
        }

        table{border-collapse:collapse;}
        td{border:2px solid white;width:80px;height:30px;background:#fafafa;color:#000;padding-left:5%;}
        th{background:#fafafa;border:2px solid white;text-align:center;}

    /* 评价 */
/* #jdt p {background:url(../{{ asset('reception/images/jdt.png') }}) ;margin-top:20px;} */

    #jdt p b{padding-left: 63px;}
/* 评价 end */
    </style>
	<div class="width-auto miaobaoxie">
		<ol class="area">
  			<li><a href="/">首页</a></li>
  			<li>></li>
  			<li class="color-green"><a href="#" onClick="javascript:history.back(-1);">上一页</a></li>
		</ol>
	</div>
    <div class="container" style="margin-bottom:20px;background-color: white;padding-top:15px;">
        <div class="col-md-12 column" style="border:1px solid #ddd;">
            <h5>个人介绍</h5>
        </div>

        <div class="col-md-12 clearfix doctor" style="border:1px solid #ddd;margin-bottom:2%;padding:20px 0;">
            <div class="col-md-2 col-sm-3 col-xs-6 column" id="people">
                <img style="width:100%;" alt="140x140" src="{{ $re->img }}" class="img-circle" />
                <div style="width:100px;border:1px solid #89c86d;margin-left:18%;margin-top:10px;">
                    <p type="" style="background:#89c86d;color:white;border-radius:0;" class="btn btn-sm">关注</p>
                    <b style="text-align: center;color:#89c86d;padding-left:8%;">899</b>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12" id="doc-js">
                <br><p style="display:inline"><b style="font-size:20px;">{{ $re->name }}</b> | @if($re->class == 1)<b style="font-size:16px;">营养师</b>@elseif($re->class == 2)<b style="font-size:16px;">医生</b>@else<b style="font-size:16px;">健身教练</b>@endif</p>
                <br><br><p style="font-size:12px;">{{ $re->abstract }}</p>
                <p style="font-size:12px;">擅长：{{ $re->Goodat }}</p>

            </div>
        </div>


        <hr>
        <hr>
        <div class="col-md-12 column" style="border:1px solid #ddd;">
            <h5>预约服务</h5>
        </div>
        <div class="col-md-12 column" style="border:1px solid #ddd;">
            <div class="row clearfix">
            <form action="/detaileddo" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="yuser" value="{{ $re->id }}" />
                <div class="col-md-12 column" style="margin-top:20px;">
                    <p class="col-md-4 col-sm-6 col-xs-12">
                        预约时间：
                        <input type="text" style="height:26px;width:240px;" name="time1" class="laydate-icon" value="<?php echo date('Y-m-d',time());?>" id="hello1" onclick="laydate({elem: '#hello1'});"><br><br>
                        在线沟通：
                        <a href="#"><img src="{{ asset('reception/images/way/3.jpg') }}" alt=""></a><br><br>
                        <button type="submit" style="padding:5px 20px;margin-right:5%;" class="btn btn-success btn-sm">提交</button>
                        <p style="text-align: center;">{{ session("status") }}</p>
                    </p>
                    <p>
                        <table class="col-md-8 col-sm-6 col-xs-12">
                            <tr>
                                <th>上午</th>
                                <th>下午</th>
                            </tr>
                            <tr>
                                <td>9:00-9:40
                                    <span id="sp" style="float:right;height:100%;width:50px;">
                                        <span><input type="radio" value="nine" name="time" /></span>
                                    </span>
                                </td>
                                <td>14:00-14:40
                                    <span id="sp" style="float:right;height:100%;width:50px;">
                                        <span><input type="radio" value="fourteen" name="time" /></span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>10:00-10:40
                                    <span id="sp" style="float:right;height:100%;width:50px;">
                                        <span><input type="radio" value="ten" name="time" /></span>
                                    </span>
                                </td>
                                <td>15:00-15:40
                                    <span id="sp" style="float:right;height:100%;width:50px;">
                                        <span><input type="radio" value="fifteen" name="time" /></span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>11:00-11:40
                                    <span id="sp" style="float:right;height:100%;width:50px;">
                                        <span><input type="radio" value="eleven" name="time" /></span>
                                    </span>
                                <td>16:00-16:40
                                    <span id="sp" style="float:right;height:100%;width:50px;">
                                        <span><input type="radio" value="sixteen" name="time" /></span>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding-left: 0;"></td>
                                <td style="text-align: right;"></td>
                            </tr>
                            <!-- <input type="text" style="border:none;outline:medium;background:#fafafa;" value="9:00-12:00"> -->
                        </table>

                    </p>
                </div>
                </form>
            </div>
        </div>

        <div class="col-md-12 column" style="border:1px solid #ece4f3;margin-top:20px;">
            <h5>&nbsp;评价</h5>
        </div>

        <div class="col-md-12 column">
            <div class="row" style="border:1px solid #ddd;">
                <div class="col-md-2 column" style="padding-bottom:20px;">
                     <h4 style="text-align:center;">满意度</h4>
                     <p style="color:#FD261D;font-size:30px;font-weight: bold;text-align:center;">5.0</p>
                     <div style="text-align:center;">
                        <img src="{{ asset('reception/images/star.png') }}" alt="">
                        <img src="{{ asset('reception/images/star.png') }}" alt="">
                        <img src="{{ asset('reception/images/star.png') }}" alt="">
                        <img src="{{ asset('reception/images/star.png') }}" alt="">
                        <img src="{{ asset('reception/images/star.png') }}" alt="">
                     </div>
                </div>

                <div class="col-md-5 column">
                    <div class="col-md-12 column" style="margin-top:20px;">
                        <button type="button" class="btn  btn-sm col-md-3" style="color:white;background:#89c86d;border-radius:0;margin:10px 10px;">很用心</button>
                        <button type="button" class="btn  btn-sm col-md-3" style="color:white;background:#89c86d;border-radius:0;margin:10px 10px;">服务周到</button>
                        <button type="button" class="btn  btn-sm col-md-3" style="color:white;background:#89c86d;border-radius:0;margin:10px 10px;">讲解专业</button>
                        <button type="button" class="btn  btn-sm col-md-3" style="color:white;background:#89c86d;border-radius:0;margin:10px 10px;">有耐心</button>
                        <button type="button" class="btn  btn-sm col-md-3" style="color:white;background:#89c86d;border-radius:0;margin:10px 10px;">效果不错</button>
                        <button type="button" class="btn  btn-sm col-md-3" style="color:white;background:#89c86d;border-radius:0;margin:10px 10px;">非常方便</button>
                    </div>
                </div>

                <div id="jindu" class="col-md-5 col-sm-offset-2 col-sm-8 hidden-xs column" style="padding-top:20px;width:400px;">

                    <!-- <img style="float:right;" src="{{ asset('reception/images/pj5.png') }}" alt=""><b style="float:right;">5.0</b> -->
                    <b style="float: right;margin-right:2%;font-size:12px;color:#FEDEDC;background:url({{ asset('reception/images/pj5.png') }})">5.0</b>

                    <div id="jdt">
                        <p style="background:url({{ asset('reception/images/jdt.png') }}) ;margin-top:20px;"><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b></p>
                        <ul>
                           <li style="float:left;margin-left:43px;">非常不满</li>
                           <li style="float:left;margin-left:26px;">不满意</li>
                           <li style="float:left;margin-left:40px;">一般</li>
                           <li style="float:left;margin-left:50px;">满意</li>
                           <li style="float:left;margin-left:30px;">非常满意</li>
                        </ul>
                    </div>
                </div>
           </div>

            <div class="row clearfix" style="background: #eee;">
                <div class="col-md-12 column" style="padding: 5px 20px;">
                    <input name="sex" type="radio" value="quanbu" checked="checked"><b style="padding:10px;font-size:12px;color:#000;">全部</b>
                    <input name="sex" type="radio" value="tupian"><b style="padding:10px;font-size:12px;color:#000;">图片(3)</b>
                    <input name="sex" type="radio" value="haoping"><b style="padding:10px;font-size:12px;color:#000;">好评(6)</b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="border:1px solid #ddd;">
                    <div class="col-md-3 col-sm-6 col-xs-5" style="margin-top: 20px;">
                        <p style="font-size:12px;margin-top: 20px;">很满意，很有耐心，支持医生！！！</p>
                        <p style="font-size:12px;">09.10</p>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-sm-6 col-xs-7" style="margin-top: 20px;">
                        <div style="float: right;">
                            <img style="float: right;" src="{{ asset('reception/images/people.jpg') }}" alt="">
                            <p style="color:#89c86d;">&nbsp;&nbsp;&nbsp;1***4</p>
                        </div>
                        <div style="float:right;">
                            <p style="text-align: right;margin-top: 20px;font-size:12px;">北京</p>
                            <p>
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-12" style="border:1px solid #ddd;">
                    <div class="col-md-3 col-sm-6 col-xs-5" style="margin-top: 20px;">
                        <p style="font-size:12px;margin-top: 20px;">很满意，很有耐心，支持医生！！！</p>
                        <p style="font-size:12px;">09.10</p>
                    </div>
                    <div class="col-md-3 col-md-offset-6 col-sm-6 col-xs-7" style="margin-top: 20px;">
                        <div style="float: right;">
                            <img style="float: right;" src="{{ asset('reception/images/people.jpg') }}" alt="">
                            <p style="color:#89c86d;">&nbsp;&nbsp;&nbsp;1***4</p>
                        </div>
                        <div style="float:right;">
                            <p style="text-align: right;margin-top: 20px;font-size:12px;">北京</p>
                            <p>
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                                <img src="{{ asset('reception/images/star2.png') }}" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="{{ asset('reception/js/laydate/laydate.js') }}"></script>
    <script src="{{ asset('reception/js/yy-content.js') }}"></script>
@endsection
