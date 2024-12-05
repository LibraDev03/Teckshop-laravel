<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            'address'=>'required',
            'phone_number'=>'required|max:10',
            'gender'=>'required',
            'birthday'=> 'required'
        ]);

        $data = request()->only('email','name','role', 'address', 'phone_number', 'gender', 'birthday');
        $data['password'] = bcrypt(request('password'));    // mã hóa mật khẩu bằng hàm bcrypt và gán vào biến data
        
        // dd($data);
        if($acc = User::create($data) ) {
            Mail::to($acc->email)->send(new VerifyAccount($acc));
            // dd('oke');
            return redirect()->route('authen.login')->with('suc', 'Successful account registration');
        }else{
            return redirect()->back()->with('fail', 'Account registration failed');
        }
         
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('authen.login')->with('suc', 'dang xuat thanh cong');
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

    public function profile() {
        $authen = auth()->user();         
        return view('authen.profile', compact('authen'));
    }

    public function check_profile() {      
        $data = request()->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'address' => 'required',
            'password'=> ['required', function($attr, $value, $fail){
                if (!Hash::check($value, auth()->user()->password)) {
                    return $fail('Mật khẩu của bạn không đúng để thay đổi profile');
                }
            }],
            'email' => ['required','email','unique:users,email,' . auth()->user()->id,
                function($attr, $value, $fail) {
                    if ($value !== auth()->user()->email) {
                        return $fail('Email của bạn không đúng để thay đổi hồ sơ');
                    }
                }
            ]
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $updated = $user->update([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'address' => $data['address'],
        ]);

        if($updated) {

            return redirect()->route('authen.profile')->with('suc', 'Sửa thông tin thành công');
        } else {
            // Xử lý khi cập nhật thất bại
            return redirect()->back()->with('error', 'Không thể cập nhật thông tin.Vui lòng thử lại.');
        }
        
    }

    public function forgot_password() {           
        //
    }

    public function check_forgot_password() {      
        //
    }



}