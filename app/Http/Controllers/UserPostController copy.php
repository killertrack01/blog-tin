<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\UPost;
use App\Category;
use Auth;


class UserPostController extends Controller
{
    public function listUPost()
    {
        $user = User::all();
        $posts = DB::table('post')->where('status','0')->get();
        return view('admin.userpost.list',['posts'=> $posts])->with('user',$user);
    }
    public function detail($id)
    {
        $cate = Category::all();
        $posts = UPost::find($id);
        return view('admin.userpost.detail',['posts'=>$posts,'cate'=>$cate]);
        
    }

    function updateStatus(Request $request, $id){
        $posts = UPost::find($id);
        DB::table('post')->where('id', '=', $id)->update(['status','1']);
        return view('admin.userpost.list',['posts'=> $posts]);
    }

    public function deletePost($id)
    {
        $posts = UPost::find($id);
        DB::table('post')->where('id', '=', $id)->delete();
        return view('admin.userpost.list',['posts'=> $posts]);
    }
}
