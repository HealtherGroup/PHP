<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Reception\EcdController;
class ForgotPasswordController extends Controller
{
    const url = "http://www.etuocloud.com/gateway.action";
    //const url = "http://www.etuocloud.com/gatetest.action";
    const app_key = 'bfQLeUFGf7Mvmpu2H4w4UmS1b07LPTpB';
    const app_secret = 'HYFFvYgDqQ3ZmJ1vVTwEaNpGGHpGcQjMlC881tTDnog1ihOsC5aYPnOtm6nRVo8l';
    const format = 'json';

    public function index()
    {
        return view('reception.ForgotPassword');
    }
    public function doForgotPassword(Request $request)
    {
        $phone = $request->input('phone');
        $re = \DB::table('user')->where('phone',$phone)->first();
        if($re){
            //初始化
            $ecd = new EcdController(static::url,static::app_key,static::app_secret,static::format);
            //随机验证码
            $code = rand(1000,9999);
            //把验证码和手机号装入SESSION
            session(['id' => $re->id]);
            session(['code' => $code]);
            //发送验证码短信
            $ecd->send_sms_code("{$phone}",'1',"{$code}",'');
            //返回ajax
            return view('reception.Code',['phone' => $re]);
        }else{
            return back()->with("msg","账号错误");
        }
    }
    public function DoCode(Request $request)
    {
        $code = $request->input('code');
        $mycode = $request->session()->get('code');
        if($code == $mycode){
            return view('reception.password');
        }else{
            return back()->with("msg","验证码错误");
        }
    }
    public function password(Request $request)
    {
        //用户
        $id = $request->session()->get('id');
        $password1 = $request->input('password1');
        $password2 = $request->input('password2');
        if($password1 == $password2){
            $id = $request->session()->get('id');
            $re = \DB::table('user')->where('id',$id)->update(array('password' => $password2));
            if($re){
                return redirect('/Signin');
            }
        }else{
            return back()->with("msg","两次密码不一致");
        }
    }
}
