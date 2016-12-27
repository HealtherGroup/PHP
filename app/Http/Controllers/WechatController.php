<?php
namespace App\Http\Controllers;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Payment\Order;
use Illuminate\Http\Request;
use Log;

class WechatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        Log::info('request arrived.'); # 注意：Log 为 Laravel 组件，所以它记的日志去 Laravel 日志看，而不是 EasyWeChat 日志

        $wechat = app('wechat');
        $wechat->server->setMessageHandler(function($message){
            return "欢迎关注 overtrue！";
        });

        Log::info('return response.');

        return $wechat->server->serve();
    }
    public function user()
   {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
       dd($user->id);
   }
    public function oo(Request $request)
    {
        //$user = session('wechat.oauth_user'); // 拿到授权用户资料
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
        $options = [
            // 前面的appid什么的也得保留哦
            'app_id' => 'wx468c9b1302205aeb',
            // ...
            // payment
            'payment' => [
                'merchant_id'        => '1303332201',
                'key'                => 'oXaUQPlANOU66vyeMdUiL3oMBSkG8T35',
                'cert_path'          => '/to/your/apiclient_cert.pem', // XXX: 绝对路径！！！！
                'key_path'           => '/to/your/apiclient_key.pem',      // XXX: 绝对路径！！！！
                'notify_url'         => 'http://www.healthergroup.cn/order-notify',       // 你也可以在下单时单独设置来想覆盖它
                // 'device_info'     => '013467007045764',
                // 'sub_app_id'      => '',
                // 'sub_merchant_id' => '',
                // ...
            ],
        ];
        $app = new Application($options);
        $payment = $app->payment;
        $attributes = [
            'trade_type'       => 'NATIVE', // JSAPI，NATIVE，APP...
            'body'             => '健康之家',
            'detail'           => '健康之家',
            'out_trade_no'     => $tiem,
            'total_fee'        => $price*100,
            'notify_url'       => 'http://www.healthergroup.cn/order-notify', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            //'openid'           => $user->id, // trade_type=JSAPI，此参数必传，用户在商户appid下的唯一标识，
            // ...
        ];
        //dd($attributes);
        $order = new Order($attributes);

        $result = $payment->prepare($order);
        //dd($result);
        if($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS'){
            return view('reception.wxzf',['img' => $result],['ddh' => $tiem]);
        }
    }
    public function ioo(Request $request)
    {
        $uid = $request->session()->get('userid');
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
            \DB::table('orderdata')->insert(array('oid' => $tiem,'gid' => $v->good_id,'num' => $v->num,'gname' => $v->name,'img' => $v->thumbnail,'price' => $v->price,'sid' => $sid));
        }
        //生成订单
        \DB::table('order')->insert(array('uid' => $uid,'aid' => $uid,'ordernum' => $num,'tatal' => $tatal,'state' => 1,'create_time' => $create_time,'oid' => $tiem));
        $options = [
            // 前面的appid什么的也得保留哦
            'app_id' => 'wx468c9b1302205aeb',
            // ...
            // payment
            'payment' => [
                'merchant_id'        => '1303332201',
                'key'                => 'oXaUQPlANOU66vyeMdUiL3oMBSkG8T35',
                'cert_path'          => '/to/your/apiclient_cert.pem', // XXX: 绝对路径！！！！
                'key_path'           => '/to/your/apiclient_key.pem',      // XXX: 绝对路径！！！！
                'notify_url'         => 'http://www.healthergroup.cn/order-notify',       // 你也可以在下单时单独设置来想覆盖它
                // 'device_info'     => '013467007045764',
                // 'sub_app_id'      => '',
                // 'sub_merchant_id' => '',
                // ...
            ],
        ];
        $app = new Application($options);
        $payment = $app->payment;
        $attributes = [
            'trade_type'       => 'NATIVE', // JSAPI，NATIVE，APP...
            'body'             => '健康之家',
            'detail'           => '健康之家',
            'out_trade_no'     => $tiem,
            'total_fee'        => $tatal*100,
            'notify_url'       => 'http://www.healthergroup.cn/order-notify', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
            //'openid'           => $user->id, // trade_type=JSAPI，此参数必传，用户在商户appid下的唯一标识，
            // ...
        ];
        //dd($attributes);
        $order = new Order($attributes);

        $result = $payment->prepare($order);
        //dd($result);
        if($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS'){
            return view('reception.wxzf',['img' => $result],['tiem' => $tiem]);
        }
    }
    public function notifyUrl(Request $request)
    {
        $a = \DB::table('order')->orderBy('id','desc')->offset(0)->limit(1)->first();
        $data = \DB::table('order')->where('oid',$a->oid)->update(array('state' => 2));
        return true; // 返回处理完成
    }
}
