<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BespokeorderController extends Controller
{
    public function index(Request $request)
    {
        $uid = $request->session()->get('userid');
        $re = \DB::table('bespokeorder')
            ->join('yuser', 'bespokeorder.yid', '=', 'yuser.id')
            ->where('bespokeorder.uid',$uid)
            ->get();
        return view('reception.bespokeorderlist',['re' => $re]);
    }
}
