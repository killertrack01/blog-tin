<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UPost;
use VerifiesEmails;
use Auth;
use App\Category;

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
        if(file_exists($posts['img'])){
            unlink($posts['img']);
        }
        DB::table('post')->where('id', '=', $id)->update(['status'=>'1']);
        return redirect()->route('listuserpost')->with('alert', 'Duyệt thành công');
    }

    public function deletePost($id)
    {
        $posts = UPost::find($id);
        if(file_exists($posts['img'])){
            unlink($posts['img']);
        }
        DB::table('post')->where('id', '=', $id)->delete();
        return redirect()->route('listuserpost')->with('alert', 'Xóa thành công');
    }
//Qua user
    public function post()
    {
        $post = UPost::all();
        $cate = Category::all();
        return view('user.postUser',['cate' => $cate,'post'=>$post]);
    }

    public function listpost()
    {
        $users = auth()->user()->id;
        $posts = DB::table('post')->where('users_id',$users)->where('status','0')->get();
        $p = DB::table('post')->where('users_id',$users)->where('status','1')->get();
        return view('user.listpost',['posts'=> $posts, 'users' => $users,'p'=>$p]);
    }

    public function postCreate(Request $request)
    {
        $this -> validate($request,[
            'uTitle' => 'bail|required|string|min:10|max:180',
            'uMota' => 'bail|required|string|min:10|max:50',
            'uNoidung' => 'required',
            'uAuthor' => 'bail|required|string|min:2|max:20',
            'uCategory' => 'required',
            'uImage' => 'bail|file|image|mimes:jpeg,png,jpg|max:10240',
        ],[
            'uTitle.required' => 'Vui lòng nhập tên tiêu đề',
            'uTitle.min' => 'Độ dài Tiêu đề ít nhất 10 ký tự',
            'uTitle.max' => 'Độ dài Tiêu đề nhiều nhất 180 ký tự',
            'uMota.required' => 'Vui lòng nhập mô tả',
            'uMota.min' => 'Độ đài mô tả ít nhất 10 ký tự',
            'uMota.max' => 'Độ đài mô tả nhiều nhất 50 ký tự',
            'uAuthor.required' => 'Vui lòng nhập tên tác giả',
            'uAuthor.min' => 'Tên tác giả ít nhất 2 ký tự',
            'uAuthor.max' => 'Tên tác giả nhiều nhất 20 ký tự',
            'uCategory.required' => 'Vui lòng chọn thể loại bài',
            'uImage.required' => 'Vui lòng chọn ảnh bìa bài viết',
            'uImage.file' => 'File phai la anh',
            'uImage.mimes' => 'Ảnh phải là các đuôi hợp lệ',
            'uImage.max' => 'Kích thước tối đa giới hạn 10MB',
            'uNoidung.required' => 'Vui lòng nhập nội dung bài viết',
            
        ]);

        // xử lý upload hình vào thư mục
        if($request->hasFile('uImage'))
        {
            $file=$request->file('uImage');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('user/postUser')->with('Lỗi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }

            $title = $request['uTitle'];
            $summary = $request['uMota'];
            $detail = $request['uNoidung'];
            $author = $request['uAuthor'];
            $category_id = $request['uCategory'];

            $imageName = $file->getClientOriginalName();
            $file->move("img/upload/ava-post",$imageName);

            $post = new UPost;
            $post['title']=$title;
            $post['summary']=$summary;
            $post['detail']=$detail;
            $post['author']=$author;
            $post['status']= '0';
            $post['category_id']=$category_id;
            $post['users_id']= auth()->user()->id;
            $post['img']=$imageName;
            $post -> save();


        }
        else
        {
            $imageName = null;
        }


        return redirect()->route('listpost')->with('alert', 'Thêm thành công');;
    }

    public function edit($id)
    {
        $users = auth()->user()->id;
        $cate = Category::all();
        $post = UPost::find($id);
        return view('user.edit',['post'=>$post,'cate'=>$cate,'users' => $users]);
        
    }

    public function postEdit(Request $request, $id)
    {

        $this -> validate($request,[
            'uTitle' => 'bail|required|string|min:10|max:180',
            'uMota' => 'bail|required|string|min:10|max:50',
            'uNoidung' => 'required',
            'uAuthor' => 'bail|required|string|min:2|max:20',
            'uCategory' => 'required',
            'uImage' => 'bail|file|image|mimes:jpeg,png,jpg|max:10240',
        ],[
            'uTitle.required' => 'Vui lòng nhập tên tiêu đề',
            'uTitle.min' => 'Độ dài Tiêu đề ít nhất 10 ký tự',
            'uTitle.max' => 'Độ dài Tiêu đề nhiều nhất 180 ký tự',
            'uMota.required' => 'Vui lòng nhập mô tả',
            'uMota.min' => 'Độ đài mô tả ít nhất 10 ký tự',
            'uMota.max' => 'Độ đài mô tả nhiều nhất 50 ký tự',
            'uAuthor.required' => 'Vui lòng nhập tên tác giả',
            'uAuthor.min' => 'Tên tác giả ít nhất 2 ký tự',
            'uAuthor.max' => 'Tên tác giả nhiều nhất 20 ký tự',
            'uCategory.required' => 'Vui lòng chọn thể loại bài',
            'uImage.required' => 'Vui lòng chọn ảnh bìa bài viết',
            'uImage.file' => 'File phai la anh',
            'uImage.mimes' => 'Ảnh phải là các đuôi hợp lệ',
            'uImage.max' => 'Kích thước tối đa giới hạn 10MB',
            'uNoidung.required' => 'Vui lòng nhập nội dung bài viết',
            
        ]);

        $title = $request->input('uTitle');
        $summary = $request->input('uMota');
        $detail = $request->input('uNoidung');
        $author = $request->input('uAuthor');
        $category_id = $request->input('uCategory');
        $users_id = auth()->user()->id;

        if($request->hasFile('uImage'))
        {
            $file=$request->file('uImage');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('user/edit')->with('Lỗi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("img/upload/ava-post",$imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $post = DB::table('post')
                ->where('id', intval($id))
                ->first();
            $imageName = $post->img;
        }

        $post = DB::table('post')
                ->where('id', intval($id))
                ->update([
                    'title'=>$title, 
                    'summary'=>$summary, 
                    'detail'=>$detail,
                    'author'=>$author,
                    'img'=>$imageName,
                    'status'=>'0',
                    'category_id'=>$category_id,
                    'users_id'=>$users_id
                    ]);
        return redirect()->route('listpost')->with('alert', 'Sửa thành công');

    }

    public function UserdeletePost($id)
    {
        $post = UPost::find($id);
        if(file_exists($post['img'])){
            unlink($post['img']);
        }
        DB::table('post')->where('id', '=', $id)->delete();
        return redirect()->route('listpost')->with('alert', 'Xóa thành công');;
    }

    public function detailUPost($id)
    {
        $cate = Category::all();
        $posts = UPost::find($id);
        return view('user.detailupost',['posts'=>$posts,'cate'=>$cate]);
        
    }

}
