<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Exists;

class AuthController extends Controller
{
     // điều hướng đến trang xác thực
    public function authen() {
        return view('authen.authen');
    }

     // điều hướng đến trang đăng kí tk
    public function login() {           
        return view('authen.login');
    }

    // check lại dữ liệu đăng kí tk
    public function check_login() {      
        request()->validate([                               // validate để xác thực dữ liệu từ yêu cầu từ HTTP request
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $data = request()->only('email','password');         // Lấy tất cả dữ liệu từ yêu cầu HTTP, cả dữ liệu từ các input fields trong form, và lưu trữ chúng vào biến $data.
        if(auth()->attempt($data)) {                        // auth->attempt là kiểm tra thông tin có trên csdl trùng khớp là true còn lại false
            
            $role = auth()?->user()?->role;                 //ktra neu auth co du lieu tra ve db user , neu user co du lieu tra ve cot role trong bang user
            if($role != 0) {
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('admin.dashboard');
            }
        }else {
            // Đăng nhập thất bại
            return redirect()->back()->with('no', 'email or password is incorrect');
        }


    }

    // điều hướng đến đăng kí tk
    public function register() {
        return view('authen.register');
    }

    public function check_register() {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $data = request()->only('email','name','role');
        $data['password'] = bcrypt(request('password'));    // mã hóa mật khẩu và gán vào biến data
        User::create($data);                                // chèn các dữ liệu ở biến $data vào bảng User  
        return redirect()->route('authen.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login');
    }

    public function change_password() {           
        return view('authen.change_pass') ;
    }

    public function check_change_password(Request $request) {      
        $validated = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmnewpassword' => 'required|same:newpassword',
        ]);

        if (Hash::check($validated['oldpassword'], auth()->user()->password)) {
            // Cập nhật mật khẩu mới
            $user = User::query()->findOrFail(auth()->user()->id);
            $user->password = Hash::make($validated['newpassword']);
            $user->save();
    
            return redirect()->route('authen.login');
        }else {
            return back();
        }
        
    }

    public function forgot_password() {           
        //
    }

    public function check_forgot_password() {      
        //
    }

    public function profile() {           
        //
    }

    public function check_profile() {      
        //
    }


}
