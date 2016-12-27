<?php

namespace App\Http\Controllers\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function index($id = null)
    {
        if($id == null ){
            $list = \DB::table('yuser')->get();
            return view('reception.Subscribelist',['list' => $list]);
        }else{
            $list = \DB::table('yuser')->where('class',$id)->get();
            return view('reception.Subscribelist',['list' => $list]);
        }
    }
    public function detailed($id)
    {
        $re = \DB::table('yuser')->where('id',$id)->first();
        return view('reception.detailed',['re' => $re]);
    }
    public function detaileddo(Request $request)
    {
        $uid = $request->session()->get('userid');
        //拿所有数据
        if($uid == null){
            return redirect('/Pleaselogin');
        }
        $data = $request->all();
        //查询用户选择的日期是否存在
        $time = \DB::table('bespoke')->where('yid',$data['yuser'])->where('time',$data['time1'])->first();
        //dd($time);
        //判断用户这些的日期是否存在
        if($time){
            //生成订单号
            $oid = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
            $url = \DB::table('yuser')->where('id',$data['yuser'])->first();
            //存在判断用户这些的时间段是否已经被预约
            if($time->$data['time'] == null ){
                //当前选择的日期已经存在进行修改
                if($time){
                    \DB::table('bespoke')->where('id',$time->id)->where('time',$data['time1'])->update(array($data['time'] => $data['time']));
                    \DB::table('bespokeorder')->insert(array('bid' => $time->id,'oid' => $oid,'uid' => $uid,'yid' => $data['yuser'],'state' => '1','time' => $data['time1'],'url' => $url->phone));
                    return view('reception.yycg');
                }else{
                //当前选择的不存在
                    \DB::table('bespoke')->insert(array('yid' => $data['yuser'],'time' => $data['time1'],$data['time'] => $data['time']));
                    return view('reception.yycg');
                }
            }else{
                //被预约了 返回
                return back()->with("status","哎呀~选择的日期已经被人预约了");
            }
        }else{
            //生成订单号
            $oid = date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
            $url = \DB::table('yuser')->where('id',$data['yuser'])->first();
            //不存在直接预约
            $a = \DB::table('bespoke')->insertGetId(array('yid' => $data['yuser'],'time' => $data['time1'],$data['time'] => $data['time']));
            //dd($a);
            \DB::table('bespokeorder')->insert(array('bid' => $a,'oid' => $oid,'uid' => $uid,'yid' => $data['yuser'],'state' => '1','time' => $data['time1'],'url' => $url->phone));
            return view('reception.yycg');
        }
    }
}
