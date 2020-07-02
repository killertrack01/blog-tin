<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use VerifiesEmails;
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
