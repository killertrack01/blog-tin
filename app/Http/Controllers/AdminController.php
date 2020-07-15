<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
    public function addadmin()
    {
        return view('admin.control-admin.createadmin');
    }
    public function addad(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:2|max:255',
            'email' => 'required|unique:users|max:255',
            'email' => ['regex:/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/'],
            'password' => 'required|min:8|max:32',
            'repassword' => 'required'
        ],
        [   
            'name.required' => 'Họ và tên không được bỏ trống !',
            'password.required' => 'Vui lòng nhập mật khẩu !',
            'password.min' => 'Mật khẩu ít nhất là 8 kí tự !',
            'password.max' => 'Mật khẩu nhiều nhất là 32 kí tự !',
            'name.min' => 'Họ và tên phải có độ dài từ 2 ký tự',
            'name.max' => 'Họ và tên phải có độ dài từ 2 đến 255 kí tự',
            'email.required' => 'Email không được bỏ trống !',
            'email.unique' => 'Email đã tồn tại !',
            'email.max' =>'Email tối đa 255 kí tự !',
            'email.regex' =>'Vui lòng nhập đúng địa chỉ Email !',
            'repassword.required' => 'Vui lòng nhập lại mật khẩu !',
        ]
        );
        if ($request->password !== $request->repassword) {
            return redirect()->route('ad')->with('status1','Nhập lại mật khẩu không chính xác');
        }
            $password=Hash::make($request->password);
            $result=DB::insert("insert into users(name,email,password,role) value(?,?,?,?)",[$request->input('name'),$request->input('email'),$password,0]);
            return redirect()->route('ad')->with('status','Thêm Admin Thành Công');
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


