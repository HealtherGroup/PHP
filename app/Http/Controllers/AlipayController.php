<?php
namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AlipayController extends Controller
{
    //加载首页视图
    public function pay(Request $request)
    {
        if($request->session()->has('username')){
            //购买用户
            $uid = $request->session()->get('userid');
            //商品id
            $gid = $request->input('gid');
            //查询商品
            $data = \DB::table('goods')->where('id',$gid)->first();
            $sid = $request->input('sid');
            //商品数量
            $num = $data->num;
            //商品名称
            $name = $data->name;
            //商品图片
            $thumbnail = $data->thumbnail;
            //商品金额
            $price = $data->price;
            //产品分类
            $class = $data->class;
            //订单创建时间
            $create_time = date("Y-m-d H:i:s");
            //订单号
            $tiem = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
            //插入订单详细
            \DB::table('orderdata')->insert(array('oid' => $tiem,'gid' => $gid,'num' => $num,'gname' => $name,'img' => $thumbnail,'price' => $price,'class' => $class));
            //生成订单
            \DB::table('order')->insert(array('uid' => $uid,'aid' => $uid,'ordernum' => $num,'tatal' => $price,'state' => 1,'create_time' => $create_time,'oid' => $tiem,'sid' => $sid));
            $alipay = app('alipay.web');
            //本地订单号
            $alipay->setOutTradeNo($tiem);
            //金额
            $alipay->setTotalFee($price);
            //名称
            $alipay->setSubject('健康之家');
            //名称
            $alipay->setBody('');
            //该设置为可选，添加该参数设置，支持二维码支付。
            $alipay->setQrPayMode('2');
            // 跳转到支付页面。
            return redirect()->to($alipay->getPayLink());
        }else{
            return redirect('/Pleaselogin');
        }
    }
    //方法2

    public function ipay(Request $request,$ddh = null)
    {
        if($request->session()->has('username')){
            //购买的用户
            $uid = $request->session()->get('userid');
            if($ddh == null){
                //查询用户购物车
                $data = \DB::table('shopcar')
                    ->join('goods', 'shopcar.gid', '=', 'goods.id')
                    ->where('shopcar.uid',$uid)
                    ->select('shopcar.num','goods.price','goods.name','goods.thumbnail','shopcar.id as car_id','goods.id as good_id')
                    ->get();
                //订单创建时间
                $create_time = date("Y-m-d H:i:s");
                //生成唯一订单号
                $tiem = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
                //计算订单金额
                $tatal = '';
                //计算商品数量
                $num = '';
$sid = $request->input('sid');
                foreach($data as $v){
                    $num += $v->num;
                    $tatal += $v->num*$v->price;
                    //插入订单详细
                    \DB::table('orderdata')->insert(array('oid' => $tiem,'gid' => $v->good_id,'num' => $v->num,'gname' => $v->name,'img' => $v->thumbnail,'price' => $v->price));
                }
                //生成订单
                \DB::table('order')->insert(array('uid' => $uid,'aid' => $uid,'ordernum' => $num,'tatal' => $tatal,'state' => 1,'create_time' => $create_time,'oid' => $tiem,'sid' => $sid));
                $alipay = app('alipay.web');
                //本地订单号
                $alipay->setOutTradeNo($tiem);
                //金额
                $alipay->setTotalFee($tatal);
                //名称
                $alipay->setSubject('健康之家');
                //名称
                $alipay->setBody('');
                //该设置为可选，添加该参数设置，支持二维码支付。
                $alipay->setQrPayMode('2');
                // 跳转到支付页面。
                return redirect()->to($alipay->getPayLink());
            }else{
                $data = \DB::table('order')->where('oid',$ddh)->first();
                //dd($data);
                $alipay = app('alipay.web');
                //本地订单号
                $alipay->setOutTradeNo($ddh);
                //金额
                $alipay->setTotalFee($data->tatal);
                //名称
                $alipay->setSubject('健康之家');
                //名称
                $alipay->setBody('');
                //该设置为可选，添加该参数设置，支持二维码支付。
                $alipay->setQrPayMode('2');
                // 跳转到支付页面。
                return redirect()->to($alipay->getPayLink());
            }
        }else{
            return redirect('/Pleaselogin');
        }
    }
    /**
     * 同步通知
     */

    public function webReturn()
    {
        // 验证请求。
        if (! app('alipay.web')->verify()) {
            return '请求超时';
        }

        // 判断通知类型。
        switch (Input::get('trade_status')) {
            case 'TRADE_SUCCESS':
                //获取支付成功订单
                $oid = Input::get('out_trade_no');
                //修改支付状态
                $data = \DB::table('order')->where('oid',$oid)->update(array('state' => 2));
                //修改成功返回成功页面
                if($data){
                    return view("reception.Paymentsuccess");
                }
            case 'TRADE_FINISHED':
                return '失败';
        }
        return 'success';
    }
}
