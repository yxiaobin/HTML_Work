<?php

namespace App\Http\Controllers;

use App\Artical;
use App\Ban;
use App\Member;
use App\Tiezi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //首页页面
    public function  index(){
        $banners = Ban::all();
        $zbmss = Artical::where('category','=','周边美食')->orderby('id','desc')->get()->take(3);
        $lyfjs = Artical::where('category','=','旅游风景')->orderby('id','desc')->get()->take(3);
        $dcxss = Artical::where('category','=','大城小事')->orderby('id','desc')->get()->take(3);
        $num = count($banners);

        return view('index',compact('banners','num','zbmss','lyfjs','dcxss'));
    }
    public function dcxs(){
        $dcxss = Artical::where('category','=','大城小事')->orderby('id','desc')->get();
        return view('dcxs',compact('dcxss'));
    }
    public function zbms(){
        $zbmss = Artical::where('category','=','周边美食')->orderby('id','desc')->get();
        return view('zbms',compact('zbmss'));
    }
    public function lyfj(){
        $lyfjs = Artical::where('category','=','旅游风景')->orderby('id','desc')->get();
        $num = count($lyfjs);
        return view('lyfj',compact('lyfjs','num'));
    }
    public function wzxq($id){
        $new = Artical::find($id);
        return view('wzxq',compact('new'));
    }
    public function sqwd(){
        $news = Tiezi::orderBy('id','desc')->get();
        return view('sqwd',compact('news'));
    }
    public function  manager(){
        return view('manager.index');
    }
    //denglu
    public  function  login(Request $request){
        $user_name = $request->input('user_name');
        $password = $request->input('password');
        $member = Member::where('user_name','=',$user_name)->get();
        if(count($member)>0){
            if($member[0]->password == $password ){
                session(['id'=>$member[0]->id, 'status'=>'1']);
                echo "<script>alert('登录成功');
                window.location.href=\" ".url("index")." \";
                </script>";
            }else{
                session(['status'=>'0']);
                echo "<script>alert('密码错误');
                window.location.href=\" ".url("index")." \";
                </script>";
            }
        }else{
            session(['status'=>'0']);
            echo "<script>alert('用户不存在');
                window.location.href=\" ".url("index")." \";
                </script>";
        }
    }
    //zhuce
    public  function  register(Request $request){
        //dd($request);
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|required',
            'user_name'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            'sex'=>'required'
        ]);
        $member = new Member();
        $member->name = $request->input('name');
        $member->user_name = $request->input('user_name');
        $member->password = $request->input('password');
        $member->email = $request->input('email');
        $member->sex = $request->input('sex');
        $member->image ='images/IrpIbe4MVFmV3gweYYG1OnziMJCmstXa4hs8VHRS.jpeg' ;
        $member->save();
        return redirect()->back();
    }
    public  function  logout(){
        session(['status'=>'0','id'=>'-1']);
        return redirect()->back();
    }
    public function getImage($path,$name){
        return response()->download(storage_path('app/').$path."/".$name);
    }
    public function  information($id, Request $request){
      $member = Member::find($id);
      //dd($request);
      if($request->input('name') != null){
          $member->name = $request->input('name');
      }
        if($request->input('password') != null){
            $member->password = $request->input('password');
        }
        if($request->input('email') != null){
            $member->email = $request->input('email');
        }
        if($request->input('sex') != null){
            $member->sex = $request->input('sex');
        }
        if($request->file('image') != null){
            $img = $request->file('image');
            //dd($img);
            $member->image = $img->store('images');
        }
        $member->save();
        return redirect('index');
    }
}
