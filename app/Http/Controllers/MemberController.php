<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function listMem() {
        $users = User::all();
        return view('admin.member.list')-> with('users',$users);
    }
    public function deleteMember($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('admin/member/list')->with('status','Xóa Thành Công');
    }
}
