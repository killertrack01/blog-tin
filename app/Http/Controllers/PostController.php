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
        $Cate = Category::all();
        $User = User::all();
        return view('admin.post.create', ['cate' => $Cate, 'user' => $User]);
    }

    public function postCreatePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'sum' => 'required|min:10',
            'detail' => 'required',
            'cate' => 'required'
        ], [
            'title.required' => 'Bạn chưa điền tiêu đề',
            'txt-title.min' => 'Tiêu đề phải có ít nhất 3 kí tự',
            'sum.required' => 'Bạn chưa ghi tóm tắt nội dung',
            'sum.min' => 'Tóm tắt nội dung cần ít nhất 10 kí tự',
            'detail.required' => 'Bạn chưa ghi bài viết',
            'cate.required' => 'Bạn chưa chọn loại tin'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->summary = $request->sum;
        $post->detail = $request->detail;
        $post->author = $request->name;
        $post->users_id = $request->author;
        $post->category_id = $request->cate;
        $post->status = $request->status;

        if ($request->hasFile('imgava')) {
            $file = $request->file('imgava');

            $d = $file->getClientOriginalExtension();
            if ($d != 'jpg' && $d != 'jpeg' && $d != 'png') {
                return redirect('admin/post/create')->with('error', 'Web chỉ hỗ trợ đuôi hình png, jpg và jpeg!!!');
            }
            $name = $file->getClientOriginalName();

            $img = Str::random(4) . "_" . $name;
            while (file_exists("img/upload/ava-post/" . $img)) {
                $img = Str::random(4) . "_" . $name;
            }
            $file->move("img/upload/ava-post", $img);
            $post->img = $img;
        } else {
            $post->imgava = "";
        }
        $post->save();
        return redirect('admin/post/create')->with('alert', 'Thêm bài viết thành công');
    }

    //edit Post
    public function editPost($id)
    {
        $Cate = Category::all();
        $User = User::all();
        $post = Post::find($id);
        return view('admin.post.edit', ['post' => $post, 'cate' => $Cate, 'user' => $User]);
    }
    public function posteditPost(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validate($request, [
            'title' => 'required|min:3',
            'sum' => 'required|min:10',
            'detail' => 'required',
            'cate' => 'required'
        ], [
            'title.required' => 'Bạn chưa điền tiêu đề',
            'txt-title.min' => 'Tiêu đề phải có ít nhất 3 kí tự',
            'sum.required' => 'Bạn chưa ghi tóm tắt nội dung',
            'sum.min' => 'Tóm tắt nội dung cần ít nhất 10 kí tự',
            'detail.required' => 'Bạn chưa ghi bài viết',
            'cate.required' => 'Bạn chưa chọn loại tin'
        ]);

        $post->title = $request->title;
        $post->summary = $request->sum;
        $post->detail = $request->detail;
        $post->author = $request->name;
        $post->users_id = $request->author;
        $post->category_id = $request->cate;
        $post->status = $request->status;

        if ($request->hasFile('imgava')) {
            $file = $request->file('imgava');

            $d = $file->getClientOriginalExtension();
            if ($d != 'jpg' && $d != 'jpeg' && $d != 'png') {
                return redirect('admin/post/create')->with('error', 'Web chỉ hỗ trợ đuôi hình png, jpg và jpeg!!!');
            }
            $name = $file->getClientOriginalName();

            $img = Str::random(4) . "_" . $name;
            while (file_exists("img/upload/ava-post/" . $img)) {
                $img = Str::random(4) . "_" . $name;
            }
            $file->move("img/upload/ava-post", $img);
            unlink("img/upload/ava-post/" . $post->img);
            $post->img = $img;
        }
        $post->save();
        return redirect('admin/post/edit/' . $id)->with('alert', 'Sửa Thành công');
    }

    //detele 
    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post/list')->with('alert', 'Xóa Thành công');
    }

    //config CKeditor
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/' . $filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    //post detail list
    public function detail($id)
    {
        $post = Post::find($id);
        $relate = Post::where('category_id', $post->category_id)->where('status',1)->take(3)
            ->get();
        return view('listcate.detail', ['post' => $post, 'relate' => $relate]);
    }
    //Searching post
    public function search(Request $request)
    {
        $keyword= $request->keyword;
        $post =Post::where('title','like',"%$keyword%")->orWhere('summary','like',"%$keyword%")->take(15)->paginate(5);
        return view('listcate.search',['post'=>$post,'keyword'=>$keyword]);
    }
}
