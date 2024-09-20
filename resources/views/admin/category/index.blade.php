@extends('layouts.admin.index')

@section('main')
    <div class="d-flex"><a href="{{ route('category.create') }}" class="btn btn-dark mx-auto m-3 ">Create new category</a></div>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-dark">Edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Delete</button>
                    </form>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
@endsection