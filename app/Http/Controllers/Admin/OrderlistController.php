<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Service\Admin\RoleService;
use App\Http\Requests\RoleRequest;
class OrderlistController extends Controller
{
    private $orderlist;
    public function index(Request $request)
    {
        $uid = $request->session()->get('userid');
        $res=DB::table('user')->where('id',$uid)->first();
        if($uid == null){
            return redirect('/Pleaselogin');
        }
        $list = \DB::table('order')->where('uid',$uid)->orderBy('id','desc')->get();

        return view('admin.homeorder.list1',['list' => $list],['res'=>$res]);
    }
    public function detailindex(Request $request)
    {
        $oid=$request->get('oid');
        $username=$request->get('username');
        echo $oid;
        echo $username;
        die;
          $orderdata = \DB::table('orderdata')->get();
    }
}
