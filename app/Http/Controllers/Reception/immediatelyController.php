<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class immediatelyController extends Controller
{
    public function index($id)
    {
        $tiem = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
        $data = \DB::table('goods')->where('id',$id)->first();
        $re = \DB::table('order')->insert(array('oid' => $tiem,'gid' => $id,''));
        dd($data);
    }
}
