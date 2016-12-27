<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function index()
    {
        $list = \DB::table('classification')->where('pid',0)->get();
        return view('admin.goods.add',['list' => $list]);
    }
    public function doadd(Request $request)
    {
        $file = $request->file('file');
        $allowed_extensions = ["png", "jpg", "gif"];
        $destinationPath = 'uploads/images/';
        $extension = $file->getClientOriginalExtension();
        $fileName = '/'.$destinationPath.''.str_random(10).'.'.$extension;
        $file->move($destinationPath, $fileName);
        $data = $request->all();
        $pid = $request->input('pid');
        $name = $request->input('name');
        $price = $request->input('price');
        $Countryofoigin = $request->input('Countryofoigin');
        $class = $request->input('class');
        $tj = $request->input('commend');
        $brand = $request->input('brand');
        $netvolume = $request->input('netvolume');
        $content = $request->input('content');
        $re = \DB::table('goods')->insertGetId(array('pid'=>$pid,'name'=>$name,'price'=>$price,'Countryoforigin'=>$Countryofoigin,'class'=>$class,'commend'=>$tj,'netvolume'=>$netvolume,'content'=>$content,'thumbnail' => $fileName,'brand' => $brand));
        $pid = $re;
        //dd($pid);
        //dd($re);
        if($re){
            //获取文件
            $file1 = $request->file('file1');
            $file2 = $request->file('file2');
            $file3 = $request->file('file3');
            $destinationPath = 'uploads/images/';
            $extension1 = $file1->getClientOriginalExtension();
            $extension2 = $file2->getClientOriginalExtension();
            $extension3 = $file3->getClientOriginalExtension();
            $fileName1 = '/'.$destinationPath.''.str_random(10).'.'.$extension1;
            $file1->move($destinationPath, $fileName1);
            $fileName2 = '/'.$destinationPath.''.str_random(10).'.'.$extension2;
            $file2->move($destinationPath, $fileName2);
            $fileName3 = '/'.$destinationPath.''.str_random(10).'.'.$extension3;
            $file3->move($destinationPath,$fileName3);
            //dd($fileName3);

            $a = \DB::table('img')->insert(array('pid' => $pid,'img' => $fileName1));
            $b = \DB::table('img')->insert(array('pid' => $pid,'img' => $fileName2));
            $c = \DB::table('img')->insert(array('pid' => $pid,'img' => $fileName3));
            return back();
        }
    }
    public function lst()
    {
        $data = \DB::table('goods')->get();
        return view('admin.goods.list',['data' => $data]);
    }
}
