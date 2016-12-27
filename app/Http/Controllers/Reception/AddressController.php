<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        return view('reception.fillInAddress');
    }
    public function doaddress(Request $request)
    {
        $data = $request->all();
        $uid = $request->session()->get('userid');
        //dd($uid);
        $re = \DB::table('address')->insert(array('uid' => $uid,'name' => $data['name'],'phone' => $data['phone'],'country' =>                    $data['country'],'address' => $data['address']));
        if($re){
            return redirect('/addresslist');
        }
    }
    public function addresslist(Request $request)
    {
        $uid = $request->session()->get('userid');
        $re = \DB::table('address')->where('uid',$uid)->get();
        return view('reception.fillInAddresslist',['list' => $re]);
    }
    public function addressdelete($id)
    {
        $data = \DB::table('address')->where('id',$id)->delete();
        if($data){
            return redirect('/addresslist');
        }
    }
}
