@extends('layouts.admin.index')
@section('main')

    
    <div class="container">
        <h1>Create a new user</h1>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required placeholder="Full name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" required placeholder=" Your email">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" required placeholder="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="password_confirmation">
                @error('password_confirmation')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Create</button>
        </form>
    </div>
 

@endsection