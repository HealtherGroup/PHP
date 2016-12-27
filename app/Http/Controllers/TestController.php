<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
class TestController extends Controller
{
    public function qqlogin()
    {
        return Socialite::with('qq')->redirect();
    }
    public function qq()
    {
        return redirect('/');
    }
}
