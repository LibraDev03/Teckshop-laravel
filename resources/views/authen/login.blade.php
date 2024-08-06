@extends('layouts.clients.admin')
@section('title','Login TSL')    
@section('main')
        <!-- customer login start -->
        <div class="customer_login mt-60">
            <div class="container">
                <div class="row">
                    <!--login area start-->
                    <div class=""> 
                        <div class="account_form" >
                            <h2>login</h2>
                            <form action="" method="POST" role="form">
                                @csrf
                                @if (Session::has('no'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('no') }}
                                </div>
                                @endif
                                <p>
                                    <label>Username or email <span>*</span></label>
                                    <input type="text" name="email">
                                    @error('email')
                                        <small>{{ $message}}</small>
                                    @enderror
                                </p>
                                <p>
                                    <label>Passwords <span>*</span></label>
                                    <input type="password" name="password">
                                </p>
                                <div class="login_submit">
                                    <a href="#"><b>Lost your password</b></a>
                                    <a href="{{ route('authen.register') }}" class="login_submit_addRGT"><b>Register</b></a>
    
                                    <label for="remember">
                                        <input id="remember" type="checkbox">
                                        Remember me
                                    </label>
                                    <button type="submit">login</button>
                                </div>
    
                            </form>
                        </div>
                    </div>
                    <!--login area start-->
    
                    <!--register area start-->
                    <!--register area end-->
                </div>
            </div>
        </div>
        <!-- customer login end -->
@endsection