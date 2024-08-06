<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
     // điều hướng đến trang xác thực
    public function authen() {            // điều hướng đến trang xác thực
        return view('authen.authen');
    }

     // điều hướng đến trang đăng kí tk
    public function login() {           
        return view('authen.login');
    }

    // check lại dữ liệu đăng kí tk
    public function check_login() {      
        request()->validate([                               // validate để xác thực dữ liệu từ yêu cầu từ HTTP request
            'email' => 'required|email|exists:users',       // email là phải có định dạng email / exists là có tồn tại trong bảng user không
            'password' => 'required',
        ]);

        $data = request()->all('email','password');         // Lấy tất cả dữ liệu từ yêu cầu HTTP, cả dữ liệu từ các input fields trong form, và lưu trữ chúng vào biến $data.
        if(auth()->attempt($data)) {                        // auth->attempt là kiểm tra thông tin có trên csdl trùng khớp là true còn lại false
            //
            return redirect()->route('admin.home');
        }else {
            // Đăng nhập thất bại
            return redirect()->back()->with('no', 'Email hoặc mật khẩu không đúng');
        }


    }

    // điều hướng đến đăng kí tk
    public function register() {
        return view('authen.register');
    }

    public function check_register() {
        request()->validate([                               // validate để xác thực dữ liệu từ yêu cầu từ HTTP request
            'name' => 'required',                           // required là abwts buộc phải có
            'email' => 'required|email|unique:users',       // email là phải có định dạng email / unique là duy nhất trong bảng user
            'password' => 'required',
            'confirm_password' => 'required|same:password', // same:password là xác thực lại giống mk
        ]);

        $data = request()->all('email','name');             // Lấy tất cả dữ liệu từ yêu cầu HTTP, cả dữ liệu từ các input fields trong form, và lưu trữ chúng vào biến $data.
        $data['password'] = bcrypt(request('password'));    // mã hóa mật khẩu và gán vào biến data
        User::create($data);                                // chèn các dữ liệu ở biến $data vào bảng User  
        return redirect()->route('authen.login');          // điều hướng đến trang client người dùng
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login');
    }

    
}
