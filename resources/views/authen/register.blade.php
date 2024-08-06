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
                            <form action="" method="POST" role="form" >
                                @csrf
                                <p>
                                    <label>Name<span>*</span></label>
                                    <input type="text" name="name">
                                    
                                </p>
                                <p>
                                    <label>Email address <span>*</span></label>
                                    <input type="text" name="email">
                                    @error('email')
                                        <small>{{ $message }}</small>
                                    @enderror
                                    
                                </p>
                                <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password">
                                    
                                </p>
                                <p>
                                    <label>Confirm Passwords <span>*</span></label>
                                    <input type="password" name="confirm_password">
                                    @error('confirm_password')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </p>
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

