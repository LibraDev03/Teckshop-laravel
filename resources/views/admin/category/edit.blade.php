@extends('layouts.admin.index')
@section('main')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
            @error('name')
                    <small>{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark">Edit</button>
    </form>
</div>
@endsection