@extends('layouts.clients.admin')
@section('title','Register TSL')    
@section('main')
        <!-- customer login start -->
        <div class="customer_login mt-60">
            <div class="container">
                <div class="row">
                    <!--register area start-->
                    <div class="">
                        <div class="account_form register">
                            <h2>Register</h2>
                            <form action="" method="POST" role="form">
                                @csrf
                                <p>
                                    <label>Email address <span>*</span></label>
                                    <input type="text" name="email" required>
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </p>
                            
                                <div style="display: flex; gap: 10px;">
                                    <p style="flex: 1;">
                                        <label>Password <span>*</span></label>
                                        <input type="password" name="password" required>
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Confirm Password <span>*</span></label>
                                        <input type="password" name="confirm_password" required>
                                        @error('confirm_password')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </p>
                                </div>
                            
                                <div style="display: flex; gap: 10px;">
                                    <p style="flex: 1;">
                                        <label>Name <span>*</span></label>
                                        <input type="text" name="name" required>
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Address <span>*</span></label>
                                        <input type="text" name="address" required>
                                    </p>
                                </div>
                            
                                <div style="display: flex; gap: 10px;">
                                    <p style="flex: 1;">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text" name="phone_number" required>
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Gender <span>*</span></label>
                                        <select id="gender" class="form-control shadow-none" style="border-radius: 0;" required name="gender">
                                            <option value="">Choose gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Birthday <span>*</span></label>
                                        <input type="date" name="birthday" required>
                                    </p>
                                   
                                </div>
                            
                                <div class="login_submit">
                                    <a href="{{ route('authen.login') }}"><b>Login</b></a>
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <!--register area end-->
                </div>
            </div>
        </div>
        <!-- customer login end -->
        
@endsection

