<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivateController extends Controller
{
    public function index(Request $requset,$id)
    {
        $re = \DB::table('yuser')->where('id',$id)->first();
        return view('reception.private',['re' => $re]);
    }
}
