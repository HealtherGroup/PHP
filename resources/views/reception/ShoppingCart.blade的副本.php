@extends('reception.public.public')
@section('title','购物车')
@section('style')
        <link rel="stylesheet" href="{{ asset('reception/css/cart2.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('reception/css/cart.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('reception/bootstrap/css/bootstrap.min.css') }}">
@endsection
@section('content')
        <!-- 地址 -->
            <div class="container">
                <div class="row clearfix">
                  <div class="col-md-12 column" style="padding:0;" id="address-big">
                    <div class="row clearfix" id="confirm">
                        <div class="col-md-8 col-sm-10 col-xs-8 column">
                            <h3 style="color:#000;">
                          确认地址
                            </h3>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-4 column">
                           <p><a href="#address-new" id="tianjia" style="text-decoration:none;color:#000;">添加新地址</a></p>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-4 column">
                            <p>管理收货地址</p>
                        </div>
                    </div>

                    <hr>

                    <div id="address">
                        <img src="images/address.png" style="padding:5px;" alt="">
                        <p class="hidden-xs">北京市海淀区中关村创业大厦</p><p class="hidden-xs">1**********</p>

                        <a href="#address-new"><img class="hidden-xs" style="float:right;padding:5px;" src="images/write.png" alt=""></a>
                        <p style="float:right"><a href="#address-new" id="bianji" style="text-decoration:none;color:white;">编辑</a></p>
                    </div>

                    <div id="dizhi" style="padding: 10px;margin-top:5px;">
                      <ul style="display:inline;padding:10px;">
                        <input type="checkbox" id="mycheck" style="float: left;" >
                        <li style="float:left;margin-left:10px;">北京市海淀区中关村创业大厦&nbsp;&nbsp;&nbsp;1**********</li>
                        <li style="float:right;">设为默认</li>
                        <li style="float:right;margin-right:20px;"><a href="#address-new" id="bianji" style="text-decoration:none;color:#000;">编辑</a></li>

                      </ul>
                    </div>

                  </div>
                </div>
            </div>
        <!-- 地址 end -->

            <div class="container" id="address-new" style="display:none;">
                <div class="row clearfix">
                    <div class="col-md-12 column" style="padding:0;">
                        <div class="row clearfix" id="confirm">
                            <div class="col-md-8 col-sm-10 col-xs-8 column">
                                <h3 style="color:#000;">
                                  新增地址
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-3 column">
                        <form role="form">
                            <div class="form-group">
                                 <label for="inputEmail3">收件人</label>
                                  <input class="form-control" id="name" type="text" /><span id="nameInfo"></span>
                            </div>

                            <div class="form-group" >
                                <label for="inputEmail3">联系电话</label>
                                  <input class="form-control" id="phone" type="text" /><span id="phoneInfo"></span>
                            </div>

                            <div id="dist" data-toggle="distpicker" class="linkage">
                                <select class="province" style="width:80.5px;height:34px;margin-top: 10px;font-size:12px;" data-province="---- 选择省 ----"></select>
                                <select class="city" style="width:80.5px;height:34px;font-size:12px;" data-city="---- 选择市 ----"></select>
                                <select class="district" style="width:80.5px;height:34px;font-size:12px;" data-district="---- 选择区 ----"></select>
                            </div>

                            <div class="form-control" style="margin:20px 0;">
                                <input class="location input " type="text" placeholder="详细地址 包含街道" name="" id="" value="" />
                            </div>


                            <label>
                                <input type="checkbox" name="terms" required>
                                <span>设为默认地址</span>
                            </label><br>

                            <button style="background:#a6d591;color:white;" type="submit" href="#address-big" class="btn btn-default">保存</button>
                            <button style="background:#ccc;color:white;" type="submit" href="" class="btn btn-default">取消</button>
                        </form>
                    </div>
                    <div class="col-md-9 column">
                    </div>
                </div>
            </div>

            <hr class="noneM" />
            <div class="width-auto inline-block bgc-b1">
                <div style="border-bottom: 1px solid #e3e3e3;margin-left:6%;" >

                    <div class="flow">

                        <div class="flow-active" style="font-size:32px;color:#000;">
                            确认订单信息
                        <!--    <span></span> -->
                        </div>

                    </div>
                </div>

                <div class="bill">
                    <div class="bill-head">

                        <div class="col-3 pull-left">
                            <input style="width:20px;height:20px;"class="all" type="checkbox" name="all" id="" value=""/><label for="" style="font-weight:normal;">全选</label>
                        </div>

                        <ul class="col-9 clearfix pull-left">
                            <li class="col-5">商品信息</li>
                            <li class="col-2">单价</li>
                            <li class="col-2">数量</li>
                            <li class="col-2">金额</li>
                            <li class="col-1"></li>
                        </ul>
                    </div>


                    <div class="item-box clearfix" style="background: #E4F1DD;border-top:5px solid #A6D591;margin-bottom:3px;">
                        <div class="col-3 img">

                            <div class="inline-block col-2" style="margin-top: 50px;">
                                <input class="checkbox" type="checkbox" name="checkbox" id="" value=""/>
                                <label for=""></label>
                            </div>

                            <img src="images/3.png"/>
                        </div>

                        <ul class="col-9 cart-item clearfix">

                            <li class="col-5 name">
                                <a href="#" style="color:#000;text-decoration:none;">桂花茶</a>
                            </li>
                            <li class="col-2 price-box">￥<span class="price">380.00</span></li>



                            <li class="col-2 quantity">
                                <span class="quantity-change">
                                    <span class="quantity-minus">
                                        -
                                    </span>
                                    <span class="quantity-nums">
                                        1
                                    </span>
                                    <span class="quantity-plus">
                                        +
                                    </span>
                                </span>
                            </li>

                            <li class="col-2 subtotal">￥<span>88.00</span></li>
                            <li class="col-1 close-box">
                                <span class="close">删除</span>
                            </li>
                        </ul>
                    </div>

                    <div class="item-box clearfix" style="background: #E4F1DD;">
                        <div class="col-3 img">

                            <div class="inline-block col-2" style="margin-top: 50px;">
                                <input class="checkbox" type="checkbox" name="checkbox" id="" value=""/><label for=""></label>
                            </div>

                            <img src="images/3.png"/>
                        </div>

                        <ul class="col-9 cart-item clearfix">

                            <li class="col-5 name">
                                <a href="#" style="color:#000;text-decoration:none;">桂花茶</a>
                            </li>
                            <li class="col-2 price-box">￥<span class="price">380.00</span></li>
                            <li class="col-2 quantity">
                                <span class="quantity-change">
                                    <span class="quantity-minus">
                                        -
                                    </span>
                                    <span class="quantity-nums">
                                        1
                                    </span>
                                    <span class="quantity-plus">
                                        +
                                    </span>
                                </span>
                            </li>

                            <li class="col-2 subtotal">￥<span>88.00</span></li>
                            <li class="col-1 close-box">
                                <span class="close">删除</span>
                            </li>
                        </ul>
                    </div>

                    <div class="item-box clearfix" style="background: #E4F1DD;">
                        <div class="col-3 img">

                            <div class="inline-block col-2" style="margin-top: 50px;">
                                <input class="checkbox" type="checkbox" name="checkbox" id="" value=""/><label for=""></label>
                            </div>

                            <img src="images/3.png"/>
                        </div>

                        <ul class="col-9 cart-item clearfix">

                            <li class="col-5 name">
                                <a href="#" style="color:#000;text-decoration:none;">桂花茶</a>
                            </li>
                            <li class="col-2 price-box">￥<span class="price">380.00</span></li>
                            <li class="col-2 quantity">
                                <span class="quantity-change">
                                    <span class="quantity-minus">
                                        -
                                    </span>
                                    <span class="quantity-nums">
                                        1
                                    </span>
                                    <span class="quantity-plus">
                                        +
                                    </span>
                                </span>
                            </li>

                            <li class="col-2 subtotal">￥<span>88.00</span></li>
                            <li class="col-1 close-box">
                                <span class="close">删除</span>
                            </li>
                        </ul>
                    </div>




                            <div class="span12">
                                <div class="row-fluid" style="margin-top:5px;height:50px;background: #ECF7E9;height:100px;">
                                    <div class="span6" style="padding-left:1%;padding-top:5px;">
                                        <h5>
                                            备注:<b style="color:#A9ABA7;font-size:12px;">填写需要商家记录的消息(建议与商家商量一致)</b>
                                        </h5>
                                    </div>
                                    <div class="span6">
                                        <h3 style="text-align:center;padding-left:50%;font-size:12px;">
                                            运输方式：普通配送 申通快递
                                            <span style="padding-left:20%;">￥15.00</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                    <div class="cart-total clearfix">

                        <div class="total-info clearfix">
                            <!-- <dl class="clearfix">
                                <dt>购物车商品小计</dt>
                                <dd>￥<span class="total-price">0.00</span></dd>
                                <dt>运费</dt>
                                <dd>￥<span class="fare">0</span></dd>
                            </dl> -->

                            <!-- <dl class="amount-to clearfix">
                                <dl>
                                    <dt style="color:#000;font-size:12px;font-weight:normal;">合计(含运费)</dt>
                                    <dd style="color:#A6D591;font-size:30px;" class="total-price">￥0.00</dd>
                                </dl>
                            </dl> -->

                            <ul class="amount-to clearfix">
                                <ul>
                                    <li style="color:#000;font-size:12px;font-weight:normal;">合计(含运费)</li>
                                    <b style="color:#A6D591;font-size:30px;" class="total-price">￥0.00</b>
                                </ul>
                            </ul>

                            <div class="go-on">
                                 <a  style="color:#BEE0AF;font-size:16px;border:1px solid #fff;text-decoration:none;line-height:50px;"href="#">返回购物车</a>
                                <!-- <a href="#" style="font-size:30px;">提交订单</a> -->
                                <button><a href="#" style="font-size:16px;text-decoration:none;color:white;">提交订单</a></button>
                                <!-- <a class="add" href="#">购物车内没有商品，快去添加～</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
