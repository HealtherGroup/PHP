<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class RegisterController extends Controller
{
    //加载首页视图
    public function index()
    {
        return view('reception.Register');
    }
    public function registerdo(Request $request)
    {
        $username = $request->input('username');
        $password1 = $request->input('password1');
        $password2 = $request->input('password2');
        //$data = \DB::table('user')->where('phone',$user)->orWhere('email',$user)->first();
        $userdata = \DB::table('user')->where('username',$username)->orWhere('email',$username)->orWhere('phone',$username)->first();
        if($userdata){
            return redirect('/Register');
        }else{
            if($password1 !== $password2){
                return redirect('/Register');
            }else{
                $data = \DB::table('user')->insert(array('username' => $username, 'password' => $password1,'phone' => $username,'email' => $username));;
                if($data){
                    $okdata = \DB::table('user')->where('phone',$username)->orWhere('email',$username)->orWhere('username',$username)->first();
                    session()->set("userid",$okdata->id);
                    session()->set("username",$okdata->username);
                    //登录成功到产品列表
                    return redirect('/');
                }
            }
        }
    }
}
