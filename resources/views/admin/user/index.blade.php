@extends('layouts.admin.index')
@section('main')

<div class="d-flex"><a href="{{ route('user.create') }}" class="btn btn-dark mx-auto m-3 ">Create New User</a></div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <a href="{{ route('user.edit', $user->id) }}" class="btn btn-dark">Edit</a>
          <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit=" return confirm('Are you sure')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-dark">Delete</button>
          </form>
        </td>
      </tr>   
    @endforeach
    
  </tbody>
</table>
@endsection