<script type="text/javascript" src="{{ asset('reception/js/jquery-3.1.1.min.js') }}"></script>
<input  class="wechat_btn" type="button" value="确认支付"/>

<script>
    $('.wechat_btn').click(function() {
    $('.my_order_guid').val('');
    $('#code').val('');
    //ajax生成二维码
    data={
        '_token':$(".token").val(),//令牌
        'money':$(".money").val(),//商品价格
    }
    sendAjax(data, "/wx", function (data) {
        //发送二维码过来（此处使用优美的layer弹层库）
        layer.open({
            type: 1,
            title:'微信支付',
            skin: 'layui-layer-rim', //加上边框
            area: ['270px', '340px'], //宽高
            content: "<p style='color:red;text-align: center;'>支付金额："+data['price']
                        +"元</p> <input type='hidden' class='my_order_guid' value='"+data['out_trade_no']
                        +"'/><div id='code' style='text-align: center;'>"+JSON.parse(data['html'])

        });

         getInfo();

    });

});


</script>
