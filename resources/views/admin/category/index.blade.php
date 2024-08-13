@extends('layouts.admin.index')

@section('main')
    <div class="d-flex"><a href="{{ route('category.create') }}" class="btn btn-dark mx-auto m-3 ">Create New User</a></div>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">category_id</th>
            <th scope="col">price</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->cat->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td><img src="{{ asset('assets/img/product/' . $product->image) }}" alt="" width="50px"></td>
                <td>
                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-dark">Edit</a>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-dark">Delete</button>
                </form>
                </td>
            </tr>   
            @endforeach --}}
        </tbody>
    </table>
@endsection