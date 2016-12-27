<?php

namespace App\Http\Controllers\Reception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
class PleaseloginController extends Controller
{
    //加载首页视图
    public function index()
    {
        return view('reception.Pleaselogin');
    }
}
