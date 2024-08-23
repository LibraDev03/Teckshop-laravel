@extends('layouts.admin.index') 
@section('main')
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('product.update', $products->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$products->name}}" name="name" required placeholder="Name product">
                </div>
                <div class="form-group">
                    <textarea class="form-control"  value="{{$products->description}}" name="description" placeholder="Enter your text here..."></textarea>
                </div>
                <div class="row">
                    <div class="form-group col-sm ">
                        <input type="text" class="form-control" value="{{$products->price}}" name="price" required placeholder="Product price">
                    </div>
                    <div class="form-group col-sm">
                        <select name="category_id" class="form-control" value="{{$products->category_id}}">
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm">
                        <input type="file" class="form-control" value="{{$products->image}}" name="image" required placeholder="image">
                    </div>
                </div>
                
            <button type="submit" class="btn btn-dark">Edit</button>  
        </form>
    </div>
@endsection