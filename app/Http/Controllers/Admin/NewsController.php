<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service\Admin\RoleService;
use App\Http\Requests\RoleRequest;
class NewsController extends Controller
{
    public function add()
    {
        return view('admin.news.add');
    }
    public function doadd(Request $request)
    {
        $name = $request->input('name');
        $intro = $request->input('intro');
        $content = $request->input('content');
        $file = $request->file('file');
        $allowed_extensions = ["png", "jpg", "gif"];
        $destinationPath = 'uploads/images/';
        $extension = $file->getClientOriginalExtension();
        $fileName = '/'.$destinationPath.''.str_random(10).'.'.$extension;
        $file->move($destinationPath, $fileName);
        //dd($content);
        $time = date("Y-m-d H:i");
        //dd($time);
        $data = \DB::table('news')->insert(array('title' => $name,'content' => $content,'time' => $time,'desc' => $intro,'img' => $fileName));
        if($data){
            return redirect('/admin/newslist');
        }else{
            return back();
        }
    }
}
