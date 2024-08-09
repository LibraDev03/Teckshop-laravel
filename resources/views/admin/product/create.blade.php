@extends('layouts.admin.index')
@section('main')

    <div class="container">
        <h1>Create a new Product</h1>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Name product">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" placeholder="Enter your text here..."></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-sm ">
                        <input type="text" class="form-control" id="price" name="price" required placeholder="Product price">
                    </div>
                    <div class="form-group col-sm">
                        <select name="category_id" class="form-control">
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm">
                        <input type="file" class="form-control" id="image" name="image" required placeholder="image">
                    </div>
                </div>
                
            <button type="submit" class="btn btn-dark">Create</button>  
        </form>
    </div>
 

@endsection