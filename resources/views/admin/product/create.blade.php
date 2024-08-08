@extends('layouts.admin.index')
@section('main')

    <div class="container">
        <h1>Create a new Product</h1>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required placeholder="Name product">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="name" name="name" required placeholder="Product price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" required placeholder="Description">
            </div>
            <div class="form-group">
                <input type="image" class="form-control" id="name" name="name" required placeholder="image">
            </div>
            
        
            <button type="submit" class="btn btn-dark">Create</button>
        </form>
    </div>
 

@endsection