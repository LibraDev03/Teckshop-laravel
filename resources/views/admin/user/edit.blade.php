@extends('layouts.admin.index')
@section('main')
<div class="container">
    <h1>Edit users</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            @error('name')
                    <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            @error('email')
                    <small>{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Your new password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">confirm your new password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-dark">Update</button>
    </form>
</div>
@endsection