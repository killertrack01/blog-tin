<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;
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
