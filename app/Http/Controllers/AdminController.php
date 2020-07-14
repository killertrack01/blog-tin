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
    public function createad(){
        return view('admin.control-admin.createadmin');
    }
    public function createadm(Request $request){
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
        return redirect('admin.control-admin.createadmin');
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


