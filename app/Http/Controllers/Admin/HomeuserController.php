<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service\Admin\RoleService;
use App\Http\Requests\RoleRequest;
class HomeuserController extends Controller
{
    private $homeuser;

    public function up()
    {
        return view('vendor.UEditor.test');
    }
    public function index()
    {
        $data = \DB::table('user')->get();
        return view('admin.homeuser.list',['data' => $data]);
    }
    public function create()
    {
        return view('admin.homeuser.create');
    }
    public function check($id)
    {
        $data = \DB::table('user')->where('id',$id)->first();
        return view('admin.homeuser.show',['data' => $data]);
    }
    public function reset($id)
    {
        $data = \DB::table('user')->where('id',$id)->update(array('password' => 123456));
        return 'response';
    }
    public function edit($id)
    {
        $data = \DB::table('user')->where('id',$id)->first();
        return view('admin.homeuser.edit',['data' => $data]);
    }
    //
    public function doedit(Request $request)
    {
        $data = $request->all();
        $Resources = \DB::table('user')->where('id',$data['id'])->update(array('petname' => $data['petname'],'username' => $data['username'],'phone' => $data['phone'],'email' => $data['email']));
        if($Resources){
            return redirect('admin/homeuser');
        }
    }
    //删除用户
    public function delete($id)
    {
        $data = \DB::table('user')->where('id',$id)->delete();
        if($data){
            return redirect('admin/homeuser');
        }
    }
    public function docreate(Request $request)
    {
        $Resources = $request->all();
        $data = \DB::table('user')->insert(
        array('username' => $Resources['username'],
            'password' => $Resources['password'],
            'phone' => $Resources['phone'],
            'email' => $Resources['email'],
            'petname' => $Resources['petname'])
        );
        if($data){
            return redirect('admin/homeuser');
        }
    }
}

