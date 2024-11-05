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

    public function login() {           
        return view('authen.login');
    }

    // check lại dữ liệu đăng kí tk
    public function check_login() {      
        request()->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $data = request()->all('email','password');

        // dd($data);
        if(auth()->attempt($data)) {                        // auth->attempt là kiểm tra thông tin có trên csdl trùng khớp là true còn lại false
            
            $role = auth()?->user()?->role;
            if($role != 0) {
                return redirect()->route('admin.home')->with('suc', 'dang nhap thanh cong');
            }else{
                return redirect()->route('admin.dashboard')->with('suc', 'dang nhap thanh cong');
            }
        }else {
            // Đăng nhập thất bại
            return redirect()->back()->with('fail', 'email or password is incorrect');
        }


    }

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
        $data['password'] = bcrypt(request('password'));    // mã hóa mật khẩu bằng hàm bcrypt và gán vào biến data
        
        // dd($data);
        User::create($data);
        return redirect()->route('authen.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login')->with('fail', 'dang xuat thanh cong');
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
    
            return redirect()->route('authen.logout')->with('no', 'change success your password');
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
        return view('authen.profile');
    }

    public function check_profile() {      
        //
    }


}