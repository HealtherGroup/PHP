<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoplistController extends Controller
{
    public function index($id  = null)
    {
        $data3 = \DB::table('classification')->where('pid','0')->get();
        if($id !== null){
            $shoplist = \DB::table('goods')
            ->join('classification', 'goods.pid', '=', 'classification.id')
            ->where('goods.pid',$id)
            ->select('goods.price','goods.id','goods.name','goods.thumbnail')
            ->paginate(8);
            return view('reception.Shoplist',['data3' => $data3],['shoplist' => $shoplist]);
        }else{
            $shoplist = \DB::table('goods')->where('pid','<>',0)->paginate(8);
            return view('reception.Shoplist',['data3' => $data3],['shoplist' => $shoplist]);
        }
    }
}
