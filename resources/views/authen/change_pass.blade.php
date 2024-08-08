@extends('layouts.clients.admin')

@section('main')

    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
                <div class=""> 
                    <div class="account_form" >
                        <h2>Change the password</h2>
                        <form action="{{ route('authen.change_password') }}" method="POST" role="form">
                            @csrf
                            @if (Session::has('no'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ Session::get('no') }}
                            </div>
                            @endif
                            <p>
                                <label>Old Passwords<span>*</span></label>
                                <input type="password" name="oldpassword">
                            </p>
                            <p>
                                <label>New Password <span>*</span></label>
                                <input type="password" name="newpassword">
                            </p>
                            <p>
                                <label>Confirm new password <span>*</span></label>
                                <input type="password" name="confirmnewpassword">
                            </p>
                            <div class="login_submit">
                                <a href="#"><b>Lost your password</b></a>
                                <a href="{{ route('authen.register') }}" class="login_submit_addRGT"><b>Register</b></a>

                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">Change</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection