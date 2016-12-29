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
        $list = DB::table('order')
            ->leftjoin('user', 'order.uid', '=', 'user.id')
            ->orderBy('order.id','desc')
            ->paginate(6);
        //dd($list);
        return view('admin.homeorder.list1',['list' => $list]);
    }
    public function detailindex($id)
    {
         $list = DB::table('order')
            ->leftjoin('orderdata', 'order.oid', '=', 'orderdata.oid')
            ->where('order.oid',$id)
            ->get();
       // dd($list[0]);
         $address=DB::table('address')->where('id',$list[0]->sid)->first();
        // dd($address);
        // die;
        return view('admin.homeorder.listdetail',['list' => $list],['address'=>$address]);
        
    }
    public function send(Request $request){
        if($request->input('kid')&&$request->input('kid')&&$request->input('kmark')){
            $id=$request->input('oid');
       
        $res=$request->except('_token','id');
       
        $row=DB::table('order')->where('oid',$id)->update($res);
        if($row){
          //return redirect('/admin/orderlist');
        }else{
            echo '失败';
        }
        
    }
       return back()->with("msg","信息不能为空！！！");
        }
        
       
}
