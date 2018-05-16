<?php

namespace App\Http\Controllers;

use App\Ban;
use App\Artical;
use App\Member;
use Illuminate\Http\Request;

class MangerController extends Controller
{
    //
    public function banindex(){
        $banners = Ban::all();
        $tab = 1;
        return view('bann.index',compact('banners','tab'));
    }
    public function  banstore(Request $request){
        $request->session()->flash('tab','2');
        $this->validate($request,[
            'image'=>'required'
        ]);
        $banner = new Ban();
        $banner->image = $request->file('image')->store('images');
        $banner->save();

        return redirect()->back();
    }
    public  function  bandelete($id){
        $banner = Ban::find($id);
        $banner->delete();

        return redirect()->back();
    }
    public function  articalindex($id){

        if($id == 1){
            $articals = Artical::where('category','=','大城小事')->orderby('id','desc')->get();
        }else if($id ==2){
            $articals = Artical::where('category','=','周边美食')->orderby('id','desc')->get();
        }else if($id==3){
            $articals = Artical::where('category','=','旅游风景')->orderby('id','desc')->get();
        }
        return view('artical.index',compact('articals'));
    }
    public  function  newartical(){
        return view('artical.edit');
    }
    public  function  newarticalpost(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
            'editorValue'=>'required',
            'category'=>'required'
        ]);
        $p = new Artical();
        $p->title = $request->input('title');
        $p->image = $request->file('image')->store('images');
        $p->content = $request->input('editorValue');
        $p->zhaiyao = $p->content;
        $p->category = $request->input('category');
        $p->time = time();
        $p->save();
        $id = 1;
        if($p->category=="大城小事"){
            $id = 1;
        }else if($p->category=="周边美食"){
            $id = 2;
        }else {
            $id = 3;
        }
        return redirect("artical/$id");
    }
    public  function  deleteartical($id){
        $p = Artical::find($id);
        $p->delete();
        return redirect()->back();
    }
    public  function  reedit($id){
        $artical = Artical::find($id);
        return view("artical.reedit",compact('artical'));
    }
    public  function  reeditstore($id,Request $request){
        $artical = Artical::find($id);
        if($request->input('title') != null){
            $artical->title = $request->input('title');
        }
        if($request->input('editorValue') != null){
            $artical->content = $request->input('editorValue');
            $artical->zhaiyao =  $artical->content;
        }
        $artical->category = $request->input('category');
        if($request->file('image') != null){
            $img = $request->file('image');
            //dd($img);
            $artical->image = $img->store('images');
        }
        $artical->save();
        $id = 1;
        if($artical->category=="大城小事"){
            $id = 1;
        }else if($artical->category=="周边美食"){
            $id = 2;
        }else {
            $id = 3;
        }
        return redirect("artical/$id");
    }
    public  function  adminmanager(){
        $admin = Member::find(session('id'));
        $tab = 1;
        $admins = Member::where('rank','=','1')->where('id','!=',$admin->id)->orderby('id','asc')->get();
        $members = Member::where('rank','=','0')->orderby('id','asc')->get();
        return view('manager.member',compact('tab','members','admins'));
    }
    public  function  adminmanagerstore(Request $request){
       //dd($request);
       $this->validate($request,[
           'adminid'=>'required'
       ]);
        $admin = Member::find(session('id'));
        //dd($admin);
       $member=Member::find($request->input('adminid'));
       $member->rank=1;
       $member->save();
        $tab = 1;
        $admins = Member::where('rank','=','1')->where('id','!=',$admin->id)->orderby('id','asc')->get();
        $members = Member::where('rank','=','0')->orderby('id','asc')->get();
        return view('manager.member',compact('tab','members','admins'));
    }
    public function  deleteadmin($id){
        $admin = Member::find(session('id'));
        //dd($admin);
        $member=Member::find($id);
        $member->rank=0;
        $member->save();
        $tab = 1;
        $admins = Member::where('rank','=','1')->where('id','!=',$admin->id)->orderby('id','asc')->get();
        $members = Member::where('rank','=','0')->orderby('id','asc')->get();
        return view('manager.member',compact('tab','members','admins'));
    }
}
