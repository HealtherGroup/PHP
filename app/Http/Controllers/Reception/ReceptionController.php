<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class ReceptionController extends Controller
{
    //加载首页视图
    public function Index()
    {
        return view('reception.public.public');
    }
    public function Home()
    {
        $goods = \DB::table('goods')->where('pid',1)->orderBy('id','desc')->skip(0)->take(12)->get();
        $re = \DB::table('classification')->where('id',1)->first();
        //dd($re);
        return view('reception.index',['goods' => $goods],['re' => $re]);
    }
    public function select($id = null)
    {
        $goods = \DB::table('goods')->where('pid',$id)->orderBy('id','desc')->skip(0)->take(12)->get();
        $re = \DB::table('classification')->where('id',$id)->first();
        return view('reception.index',['goods' => $goods],['re' => $re]);
    }
}
