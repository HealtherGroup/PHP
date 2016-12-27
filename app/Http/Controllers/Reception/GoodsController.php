<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class GoodsController extends Controller
{
    public function detailed($id)
    {
        //这个是查询数据库把查出来的东西放到$detailed里面
        $detailed = \DB::table('goods')->where('id',$id)->first();
        //现在$detailed是array

        //定义一个变量 然后进行转json
        //$jsondata = json_encode($detailed);
        //$jsondata
        //dd($jsondata);
        $img = \DB::table('img')->where('pid',$id)->get();
        return view('reception.goodsdetailed',['detailed' => $detailed],['img' => $img]);
    }
}
