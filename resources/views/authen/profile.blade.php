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
                            <h2>Profile</h2>
                            <form action="{{route('authen.profile')}}" method="POST" role="form">
                                @csrf
                                <div style="display: flex; gap: 10px;">
                                    <p style="flex: 1;">
                                        <label>Name <span>*</span></label>
                                        <input type="text" name="name" required placeholder="{{$authen->name}}">
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Address <span>*</span></label>
                                        <input type="text" name="address" required placeholder="{{$authen->address}}">
                                    </p>
                                </div>
                            
                                <div style="display: flex; gap: 10px;">
                                    <p style="flex: 1;">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text" name="phone_number" required placeholder="{{$authen->phone_number}}">
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Gender <span>*</span></label>
                                        <select id="gender" class="form-control shadow-none" style="border-radius: 0;" required name="gender">
                                            <option value="" >Choose gender</option>
                                            <option value="Male" {{ $authen->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $authen->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Other" {{ $authen->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Birthday <span>*</span></label>
                                        <input type="date" name="birthday" required value="{{$authen->birthday}}">
                                    </p>
                                   
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <p style="flex: 1;">
                                        <label>Email<span>*</span></label>
                                        <input type="email" name="email" required placeholder="Xác nhận mail của bạn để đổi profile">
                                    </p>
                                    <p style="flex: 1;">
                                        <label>Password <span>*</span></label>
                                        <input type="password" name="password"required placeholder="Xác nhận mật khẩu của bạn để đổi profile">
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

