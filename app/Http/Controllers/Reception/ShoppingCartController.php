<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ShoppingCartController extends Controller
{
    //加载首页视图
    public function index(Request $request)
    {

        //获取用户id
        $uid = $request->session()->get('userid');
        if($uid == null){
            return redirect('/Pleaselogin');
        }else{
        $data = \DB::table('shopcar')
                    ->join('goods', 'shopcar.gid', '=', 'goods.id')
                    ->where('shopcar.uid',$uid)
                    ->select('shopcar.num','goods.price','goods.name','goods.thumbnail','shopcar.id as car_id','goods.id as good_id')
                    ->get();
                    //dd($data);
        return view('reception.ShoppingCart',['goodinfo'=>$data]);
        }
    }
    //删除购物车商品
    public function delete($id)
    {
        $car_id = $id;
        $res = \DB::table('shopcar')->where('id',$car_id)->delete();
        //dd($res);
        if($res){
            // 成功
            return redirect('/ShoppingCart');
        }
    }
    //添加购物车
    public function getInsert(Request $request,$id)
    {
        //获取用户id
        $user_id = $request->session()->get('userid');
        if($user_id == null){
            return redirect('/Pleaselogin');
        }
        $good_id = $id;
        $data = \DB::table('shopcar')->where('uid',$user_id)->where('gid',$good_id)->first();
        if($data){
            $data->num +=1;
            $res = \DB::table('shopcar')->where('id',$data->id)->update(['num'=>$data->num]);
            if($res){
                // 成功
                return redirect('/ShoppingCart');
            }else{
                //失败
                return back();
            }
        }else{
            $res = \DB::table('shopcar')->insert(['uid' => $user_id,'gid'=>$good_id]);
            if($res){
                // 成功
                return redirect('/ShoppingCart');
            }else{
                //失败
                return back();
            }
        }
    }
}
