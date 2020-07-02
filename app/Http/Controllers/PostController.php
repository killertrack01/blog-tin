<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Post;
use App\User;

class PostController extends Controller
{

    //list Post
    public function listPost()
    {
        $Post = Post::all();
        return view('admin.post.list', ['post' => $Post]);
    }

    //create Post
    public function createPost()
    {
        $Cate= Category::all();
        $User=User::all();
        return view('admin.post.create',['cate'=>$Cate,'user'=>$User]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:3',
            'sum'=>'required|min:10|max:255',
            'detail'=>'required',
            'cate'=>'required'
        ],[
            'title.required'=>'Bạn chưa điền tiêu đề',
            'txt-title.min'=>'Tiêu đề phải có ít nhất 3 kí tự',
            'sum.required'=>'Bạn chưa ghi tóm tắt nội dung',
            'sum.min'=>'Tóm tắt nội dung cần ít nhất 10 kí tự',
            'sum.max'=>'Tóm tắt nội dung tối đa chỉ 255 kí tự',
            'detail.required'=>'Bạn chưa ghi bài viết',
            'cate.required'=>'Bạn chưa chọn loại tin'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->summary = $request->sum;
        $post->detail = $request->detail;
        $post->author= $request->name;
        $post->users_id = $request->author; 
        $post->category_id =$request->cate;
        $post->status =$request->status;

        if($request->hasFile('imgava'))
        {
            $file = $request->file('imgava');

            $d=$file->getClientOriginalExtension();
            if($d !='jpg'&& $d !='jpeg' && $d !='png')
            {
                return redirect('admin/post/create')->with('error','Web chỉ hỗ trợ đuôi hình png, jpg và jpeg!!!');
            }
            $name= $file->getClientOriginalName();

            $img = Str::random(4)."_".$name;
            while(file_exists("img/upload/ava-post/".$img)){
                $img = Str::random(4)."_".$name;
            }
            $file->move("img/upload/ava-post",$img);
            $post->img = $img;
        }else
        {
            $post->imgava = "";
        }   
        $post->save();
        return redirect('admin/post/create')->with('alert','Thêm bài viết thành công');
    }
}
