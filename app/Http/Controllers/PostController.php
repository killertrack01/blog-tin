<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;
use App\news;
use App\cate;
use App\admin;
use Auth;


class PostController extends Controller
{
    public function getList(){
        $posts = DB::table('post')->get();
        return view('admin.post.list')->with(['posts'=>$posts]);
    }

    public function create() {
        return view('admin.post.create');
    }

    public function list() {
        $posts = DB::table('post')->get();
        return view('admin.post.list')->with(['posts'=>$posts]);
    }
    public function postCreate(postRequest $request){
        // nhận tất cả tham số vào mảng post
        $post = $request->all();
        // xử lý upload hình vào thư mục
        if($request->hasFile('img'))
        {
            $file=$request->file('img');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('admin/post/create')->with('Lỗi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("imgs",$imageName);
        }
        else{
            return back()->with("error","Bạn chưa chọn ảnh đại diện của bài");
        }
        DB::table('post')->insert([
            'title'=>$post['title'],
            'summary'=>$post['summary'],
            'detail'=>$post['detail'],
            'img'=>$imageName,
            'status'=>$post['status'],
            'category_id'=>intval($post['category_id'])

        ]);
        return redirect()->action('PostController@getlist');
    }

    public function getEdit(){
       /* $p = DB::table('post')
            ->where('id', intval($id))
            ->first();*/
    return view('admin.post.edit'/*, ['p'=>$p]*/);
    }

    public function postEdit(postRequest $request, $id){
        $title = $request->input('title');
        $summary = $request->input('summary');
        $detail = $request->input('detail');
        $detail = $request->input('detail');
        // xử lý upload hình vào thư mục
        if($request->hasFile('img'))
        {
            $file=$request->file('img');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('admin/post/edit')->with('Lỗi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("public/iags",$imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $p = DB::table('post')
                ->where('id', intval($id))
                ->first();
            
            $detail = $request->input('detail');    $imageName = $p->image;
        }
        $status = $request->input('status');
        $category_id = $request->input('category_id');

        $p = DB::table('post')
                ->where('id', intval($id))
                ->update([
                    'title'=>$post['title'],
                    'summary'=>$post['summary'],
                    'detail'=>$post['detail'],
                    'img'=>$imageName,
                    'status'=>$post['status'],
                    'category_id'=>intval($post['category_id'])       
                ]);
        return redirect()->action('ProductController@index');
    }

    public function getDelete($id){
        $p = DB::table('post')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('PostController@getList');
    }
}
