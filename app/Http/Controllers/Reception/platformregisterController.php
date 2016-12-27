<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class platformregisterController extends Controller
{
    public function index()
    {
        return view('reception.platformregister');
    }
    public function platformregisterdo(Request $request)
    {
        $data = $request->all();
        $file = $request->file('file');
        $allowed_extensions = ["png", "jpg", "gif"];
        $destinationPath = 'uploads/images/';
        $extension = $file->getClientOriginalExtension();
        $fileName = '/'.$destinationPath.''.str_random(10).'.'.$extension;
        $file->move($destinationPath, $fileName);
        $re = \DB::table('yuser')->insert(array('name' => $data['yusername'],'class' => $data['class'],'abstract' => $data['abstract'],'Goodat' => $data['Goodat'],'email' => $data['email'],'phone' => $data['phone'],'img' => $fileName));
        if($re){
            return view('reception.yyzccg');
        }else{
            return '注册随便请联系管理员';
        }
    }
}
