<?php

namespace App\Http\Controllers\Reception;


use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlipayController extends Controller
{
    //加载首页视图
    public function pay()
    {
        if($request->session()->has('users')){
            $tiem = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
            $alipay = app('alipay.web');
            //订单号
            $alipay->setOutTradeNo($tiem);
            //金额
            $alipay->setTotalFee('0.01');
            //名称
            $alipay->setSubject('test1');
            //名称
            $alipay->setBody('test2');
            //该设置为可选，添加该参数设置，支持二维码支付。
            $alipay->setQrPayMode('2');
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());
        }else{
            return '>???';
        }

    }
    public function webNotify()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => Request::instance()->getContent()
            ]);
            return 'fail';
        }

        // 判断通知类型。
        switch (Request::input('name')('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => Request::input('name')('out_trade_no'),
                    'trade_no' => Request::input('name')('trade_no')
                ]);
                break;
        }

        return 'success';
    }

    /**
     * 同步通知
     */
    public function webReturn()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            Log::notice('Alipay return query data verification fail.', [
                'data' => Request::getQueryString()
            ]);
            return '失败';
        }

        // 判断通知类型。
        switch (Request::input('name')('trade_status')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify get data verification success.', [
                    'out_trade_no' => Request::input('name')('out_trade_no'),
                    'trade_no' =>  Request::input('name')('trade_no')
                ]);
                break;
        }

        return '成功';
    }
}
