<?php

namespace App\Http\Controllers;

use App\Member;
use App\Tiezi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //首页页面
    public function  index(){
        return view('index');
    }
    public function dcxs(){
        return view('dcxs');
    }
    public function zbms(){
        return view('zbms');
    }
    public function lyfj(){
        return view('lyfj');
    }
    public function wzxq(){
        return view('wzxq');
    }
    public function sqwd(){
        $news = Tiezi::orderBy('id','desc')->get();
        return view('sqwd',compact('news'));
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
        session(['status'=>'0']);
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
