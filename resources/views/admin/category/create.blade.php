@extends('layouts.admin.index')
@section('main')
<div class="container">
    <h1>Create a new category</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" required placeholder="Category name">
        </div>
        <button type="submit" class="btn btn-dark">Create</button>
    </form>
</div>
@endsection