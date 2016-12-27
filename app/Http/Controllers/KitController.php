<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Gregwar\Captcha\CaptchaBuilder;
use Session;

class KitController extends Controller
{
    public function captcha($tmp)
    {
        $builder = new CaptchaBuilder;
        $builder->build($width = 100, $height = 40, $font = null);
        $phrase = $builder->getPhrase();
        Session::flash('milkcaptcha', $phrase);
        header("Cache-Control:no-cache,must-revalidate");
        header('Content-type: image/jpeg');
        $builder->output();
    }
}
?>