<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;
class wxController extends Controller
{
    public function index(Application $wechat)
    {
        //$app = new Application($options);
        $app = new Application($wechat);
        $userService = $App->user;
        $user = $userService->get($openId);
        dd($user);
    }
}
