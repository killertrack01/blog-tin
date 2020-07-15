<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string','min:2','max:255'],
            'email' => ['required', 'string', 'regex:/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8','max:32','confirmed'],
        ],[
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
            'password.confirmed' => 'Nhập lại mật khẩu không chính xác'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
