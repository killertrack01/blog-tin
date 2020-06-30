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
        return view('admin.control-admin.list')-> with('users',$users);;
    }
    public function createAdmin() {
        return view('admin.control-admin.create');
    }

    public function editAdmin() {
        return view('admin.control-admin.edit');
    }
    public function deleteAdmin($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('admin/control-admin/list')->with('status1','Xóa Thành Công');
    }
}


