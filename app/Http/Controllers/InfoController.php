<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

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
        return view('user.postUser');
    }
    public function updateuser(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->dob = $request->input('dob');
        $users->gender = $request->input('gender');
        $users->tel = $request->input('tel');
        $users->update();
        return redirect('/info')->with('status','Cập Nhật Thành Công');

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
