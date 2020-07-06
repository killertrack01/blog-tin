<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use App\User;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function listAdmin() {
        $users = User::all();
        return view('admin.control-admin.list')-> with('users',$users);
    }
    public function createAdmin() {
            $users = User::all();
            return view('admin.control-admin.create')-> with('users',$users);
    }
   public function creAdmin($id) {
        $users = User::findOrFail($id);
        $users->role = 0;
        $users->update();
        return redirect('admin/control-admin/create')->with('status','Thêm Admin Thành Công');
}
    public function editAdmin() {
        return view('admin.control-admin.edit');
    }
    /*public function deleteAdmin($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('admin/control-admin/list')->with('status1','Xóa Thành Công');
    }*/
    public function deletepersionAdmin($id)
    {
        $users = User::findOrFail($id);
        $users ->role = 1;
        $users->update();
        return redirect('admin/control-admin/list')->with('status1','Xóa Quyền Admin Thành Công');
    }
}


