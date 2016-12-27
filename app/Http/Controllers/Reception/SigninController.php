<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class SigninController extends Controller
{
    //加载首页视图
    public function index()
    {
        return view('reception.Signin');
    }
    public function Signindo(Request $request)
    {
        $user = $request->input('username');
        $password = $request->input('password');
        $data = \DB::table('user')->where('phone',$user)->orWhere('email',$user)->first();
        //dd($data);
        if($data){
            if($data->password == $password){
                session()->set("userid",$data->id);
                session()->set("username",$data->username);
                //登录成功到产品列表
                return redirect('/');
            }else{
                return redirect('/Signin');
            }
        }else{
            return redirect('/Signin');
        }
    }
    public function Signout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('userid');
        return redirect('/');
    }
}
