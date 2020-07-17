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
        $users->banned_until=now()->addDays(5000);
        $users->update();
        return redirect('admin/member/list')->with('status','Khóa Người Dùng Thành Công');
    }
    public function unlock($id)
    {
        $users = User::findOrFail($id);
        $users->banned_until=NULL;
        $users->update();
        return redirect('admin/member/list')->with('status','Đã Mở Khóa Người Dùng');
    }
    public function report()
    {
        $users= User::all();
        return view('admin.member.report')->with('user',$users);
    }
}
