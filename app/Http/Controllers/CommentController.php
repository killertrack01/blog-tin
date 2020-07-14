<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    //Danh sách bình luận trang admin
    public function listComment()
    {
        $comment = Comment::all();
        $user = User::all();
        return view('admin.comment.list')->with(['comment' => $comment, 'user' => $user]);
    }

     //Admin sửa bình luận
     public function editCmt($id)
     {
         $comment = Comment::find($id);
         return view('admin.comment.edit', ['comment' => $comment]);
     }
 
     public function postEditComment(Request $request, $id)
     {
 
         $comment = Comment::find($id);
         $this->validate(
             $request,
             [
                 'detail' => 'required',
             ],
             [
                 'detail.required' => 'Bạn chưa nhập lại bình luận !',
             ]
         );
         $comment->detail = $request->detail;
         $comment->save();
 
         return redirect('admin/comment/edit/' . $id)->with('alert', 'Sửa bình luận thành công ');
     }
 

    //Admin xóa bình luận
    public function deleteComment($id)
    {
        $c = Comment::find($id);
        $c->delete();
        return redirect()->action('CommentController@listComment')->with('success', 'Xóa thành công');
    }

    //Lịch sử bình luận user
    public function userlistCmt()
    {
        $users = auth()->user()->id;
        $post = Post::all();
        $cmt = DB::table('comment')->where('users_id', $users)->get();

        return view('user.listcomment')->with(['cmt' => $cmt, 'users' => $users, 'post' => $post]);
    }

    //User bình luận
    public function postComment(Request $request, $post_id)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $cmt = new Comment;
            $cmt['users_id'] = $user_id;
            $cmt['post_id'] = $post_id;
            $cmt['detail'] = $request['detail'];
            $cmt->save();
            return back();
        }
        else{
            return back()->with('phanquyen' , 'Bạn chưa đăng nhập !');
        }
    }

    //User sửa bình luận
    public function editComment($id)
    {
        $comment = Comment::find($id);
        return view('user.editcmt', ['comment' => $comment]);
    }

    public function postEditCmt(Request $request, $id)
    {

        $comment = Comment::find($id);
        $this->validate(
            $request,
            [
                'detail' => 'required',
            ],
            [
                'detail.required' => 'Bạn chưa nhập lại bình luận !',
            ]
        );
        $comment->detail = $request->detail;
        $comment->save();

        return redirect('user/editcmt/' . $id)->with('alert', 'Sửa bình luận thành công ');
    }

    //User xóa bình luận
    public function userdelCmt($id)
    {
        $cmt = Comment::find($id);
        DB::table('comment')->where('id', '=', $id)->delete();
        return redirect()->action('CommentController@userlistCmt')->with('success', 'Xóa thành công');
    }
}
