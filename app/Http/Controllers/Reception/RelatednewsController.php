<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelatednewsController extends Controller
{
    public function index()
    {
        return view('reception.Relatednews');
    }
    public function up()
    {
        return view('vendor.UEditor.test');
    }
}
