<?php

namespace App\Http\Controllers;

use App\Commit;
use App\Member;
use App\Tiezi;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public  function  index($id){
        $member = Member::find($id);
        return view('post.index',compact('member'));
    }
    public function  store($id,Request $request){
        $this->validate($request,[
            'title'=>'required',
            'editorValue'=>'required',
        ]);
        $new = new Tiezi();
        $new->member_id = $id;
        $new->content = $request->input('editorValue');
        $new->title = $request->input('title');
        $new->time = time();
        $new->save();
        return redirect("newlist/$id");
    }
    public function list_($id){
        $news = Tiezi::where('member_id','=', $id)->orderby('id','desc')->get();
        $member = Member::find($id);
        return view('post.list',compact('news','member'));
    }
    public  function  info($id){
        $new =Tiezi::find($id);
        $commits = $new->commits()->get();
        return view('post.tlq',compact('new','commits'));
    }
    public  function  postcommit($id,Request $request){

        if (session('status')==0){
            echo "<script>alert('请先登录');
                window.location.href=\" ".url("index")." \";
                </script>";
        }else{
            $commit = new Commit();
            $member = Member::find(session('id'));
            $commit ->member_id = $member->id;
            $commit ->commit_id = $id;
            $commit ->time = time();
            $commit ->content = $request->input('editorValue');
            $commit->save();
            return back();
        }
    }
}
