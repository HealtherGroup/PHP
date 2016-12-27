<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalCenterController extends Controller
{

    public function index(Request $request)
    {

        $id = $request->session()->get('userid');
        if($id == null){
            return redirect('/Pleaselogin');
        }
        $data = \DB::table('user')->where('id',$id)->first();
        return view('reception.PersonalCenter',['grxx' => $data]);
    }
    public function modify(Request $request)
    {
        $id = $request->session()->get('userid');
        if($id == null){
            return redirect('/Pleaselogin');
        }
        $data = \DB::table('user')->where('id',$id)->update(['petname' => $request->input('petname'),'phone' => $request->input('phone'),'email' => $request->input('email')]);
        return redirect('/PersonalCenter');
    }
    public function ordercontrol()
    {
        $id = $request->session()->get('userid');
    }
    public function Orderlist(Request $request)
    {

        $uid = $request->session()->get('userid');
        if($uid == null){
            return redirect('/Pleaselogin');
        }
        $list = \DB::table('order')->where('uid',$uid)->orderBy('id','desc')->get();
        $orderdata = \DB::table('orderdata')->get();
        //dd($orderdata);
        //dd($list);
        return view('reception.Orderlist',['list' => $list],['orderdata' => $orderdata]);
    }
}
