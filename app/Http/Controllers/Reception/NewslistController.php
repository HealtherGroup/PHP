<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewslistController extends Controller
{
    public function index()
    {
        $newslist = \DB::table('news')->orderBy('id','desc')->paginate(8);
        //dd($newslist);
        return view('reception.news',['newslist' => $newslist]);
    }
    public function content($id = null)
    {
        $content = \DB::table('news')->where('id',$id)->first();
        return view('reception.newscontent',['content' => $content]);
    }
}
