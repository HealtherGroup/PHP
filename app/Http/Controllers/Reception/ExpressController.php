<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpressController extends Controller
{
       public function index($name,$id)
    {
        //参数设置
        $post_data = array();
        $post_data["customer"] = 'C7A5F786DDC33BE1D2E4D83772EDB736';
        $key= 'XhagUASi6476';
        //查询的快递号
        $arr = array ('com' => $name,'num' => $id);
        //拼接
        $post_data["param"] = json_encode($arr);

        $url='http://poll.kuaidi100.com/poll/query.do';
        $post_data["sign"] = md5($post_data["param"].$key.$post_data["customer"]);
        $post_data["sign"] = strtoupper($post_data["sign"]);
        $o="";
        foreach ($post_data as $k=>$v)
        {
            $o.= "$k=".urlencode($v)."&";       //默认UTF-8编码格式
        }
        $post_data=substr($o,0,-1);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $result = curl_exec($ch);
        $data = str_replace("\&quot;",'"',$result );
        $data = json_decode($data,true);
    }

}
