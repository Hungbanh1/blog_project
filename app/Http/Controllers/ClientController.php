<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ClientController extends Controller
{
    //
    protected $redirectTo = '/';

    function show()
    {
        return view('auth.login-client');
    }
    function login(Request $request)
    {
        Auth::guard('client')->logout();
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('client')->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            // return redirect()->intended($this->redirectTo);
            return redirect()->route('client')->with('success', 'Đăng ký thành công!');
        } else {
            return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Tài khoản hoặc mật khẩu không đúng.']);
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('client')->logout();


        return redirect('/client'); // Chuyển hướng sau khi đăng xuất, ví dụ chuyển về trang chính.
    }
    function ui_register_client()
    {
        $list_title = [
            'professor' => "Giáo sư",
            'doctor' => "Tiến sĩ",
            'worker' => "Công nhân",
            'teacher' => "Giáo viên",
            'student' => "Sinh viên",
            'developer' => "Lập trình viên",
            'other' => "Khác",

        ];
        return view('auth.register-client', compact('list_title'));
    }
    function RegisterClient(Request $request)
    {

        // echo $request->input('title');
        $messages = [
            'name.required' => 'Tên là trường bắt buộc.',
            'email.required' => 'Email là trường bắt buộc.',
            'email.email' => 'Email phải là địa chỉ email hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Mật khẩu là trường bắt buộc.',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không thành công , vui lòng kiểm tra lại !!!'
        ];
        //unique:bc kiem tra ton tai cua email
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'email' => 'required|string|email|max:255',

        ], $messages);
        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->title = $request->input('title');
        $client->password = Hash::make($request->input('password'));
        $client->save();
        // Client::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'title' => $request->input('title'),
        //     'password' => Hash::make($request->input('password')),


        // ]);
        return redirect()->route('ui_register_client')->with('success', 'Đăng ký thành công!');
        // return redirect('/client')->with('success', 'Đăng ký thành công!');

        // return redirect('/shop')->with('success', 'Đăng ký thành công!');
    }
}
