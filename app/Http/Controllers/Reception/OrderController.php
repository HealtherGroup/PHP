<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $uid = $request->session()->get('userid');
        if($uid == null){
            return redirect('/Pleaselogin');
        }
        $add = \DB::table('address')->where('uid',$uid)->get();
        dd($add);
        $data = \DB::table('shopcar')
                    ->join('goods', 'shopcar.gid', '=', 'goods.id')
                    ->where('shopcar.uid',$uid)
                    ->select('shopcar.num','goods.price','goods.name','goods.thumbnail','shopcar.id as car_id','goods.id as good_id')
                    ->get();
        //dd($data);
        //$a = $data->toArray();
        //foreach($data as $k => $v){

          //  var_dump($v['num']);
        //}
        //return view('reception.ShoppingCart',['goodinfo'=>$data]);

        return view('reception.fillInOrder',['goodinfo' => $data],['add' => $add]);
    }
    public function immediately(Request $request,$id)
    {
        $uid = $request->session()->get('userid');
        if($uid == null){
            return redirect('/Pleaselogin');
        }
        $add = \DB::table('address')->where('uid',$uid)->get();
        $data = \DB::table('goods')->where('id',$id)->get();
        return view('reception.fillInOrder',['goodinfo' => $data],['add' => $add]);
    }
    //openssl_public_decrypt(data, decrypted, key)
    function myOrder(Request $request)
    {
        $uid = $request->session()->get('userid');
        if($uid == null){
            return redirect('/Pleaselogin');
        }
        $add = \DB::table('address')->where('uid',$uid)->get();
        //dd($add);
        $data = \DB::table('shopcar')
                    ->join('goods', 'shopcar.gid', '=', 'goods.id')
                    ->where('shopcar.uid',$uid)
                    ->select('shopcar.num','goods.price','goods.name','goods.thumbnail','shopcar.id as car_id','goods.id as good_id')
                    ->get();
        return view('reception.MyfillInOrder',['goodinfo' => $data],['add' => $add]);
    }
}
