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
class InfoController extends Controller
{
    public function info()
    {
        $users = User::all();
        return view('user.infor')->with('users',$users);
    }
    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('user.updateIF')->with('users',$users); 
    }
    public function post()
    {
        $post = UPost::all();
        $cate = Category::all();
        return view('user.postUser',['cate' => $cate,'post'=>$post]);
    }

    public function listpost()
    {
        $users = auth()->user()->id;
        $posts = DB::table('post')->where('users_id',$users)->get();
        return view('user.listpost',['posts'=> $posts, 'users' => $users]);
    }

    public function postCreate(Request $request)
    {
        $this -> validate($request,[
            
        ],[
            
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
            $file->move("images",$imageName);

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


        return redirect()->route('listpost');
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
            
        ],[
            
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
            $file->move("images",$imageName);
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
        return redirect()->route('listpost');

    }

    public function deletePost($id)
    {
        $post = UPost::find($id);
        if(file_exists($post['img'])){
            unlink($post['img']);
        }
        DB::table('post')->where('id', '=', $id)->delete();
        return redirect()->route('listpost');
    }

    public function updateuser(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:2|max:100',
                'email' => 'required|email',
                'tel' => 'min:10|max:10',
                'tel'=>['regex:/(03|02|09|07|08)[0-9]{8}/']
            ],
            [
                'email' => 'Vui lòng nhập đúng email',
                'name.required' => 'Bạn chưa nhập',
                'name.min' => 'Tên phải đạt ít nhất 2 kí tự',
                'name.max' => 'Tên không được vượt quá 100 kí tự',
                'tel.min' => 'Số điện thoại phải có chiều dài là 10',
                'tel.max' => 'Số điện thoại phải có chiều dài là 10',
            ]
        );
        $check=true;
        $users = User::find($id);
        $user = User::all();
        $emailtemp = $users->email;
        foreach ($user as $row) {
            if($row ->email == $request->input('email') ){
                if ($row->id ===($idx=auth()->user()->id)) {
                    $emailtemp = $users->email;
                    $users->email = "xxxxx@email.com";
                    $users->update();
                    $users->email = $request->input('email');
                }
                else
                {
                    $check = false;
                    break;
                }  
            }
            else
            $check = true;
        }
        if($check == false){
            $users->email = $emailtemp;
            $users->update();
            return redirect('/updateIF/'.$id)->with('status','Email đã tồn tại');
        }
        else
        {
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->dob = $request->input('dob');
            $users->gender = $request->input('gender');
            $users->tel = $request->input('tel');
            $users->update();
            return redirect('/info')->with('status','Cập Nhật Thành Công');
        }
        

    }
    public function feedback()
    {
        return view('user.feedback');
    }
    public function contact()
    {
        return view('user.contact');
    }
}
