@extends('layouts.admin.index')
@section('main')

<div class="text-center" ><h1>ORDER LIST</h1></a></div>
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Stt</th>
        <th scope="col">Order date</th>
        <th scope="col">Total</th>
        <th scope="col">Details</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $items)
          <tr>
              <th scope="row">{{ $items->id }}</th>
              <td>{{ $items->created_at }}</td>
              <td>${{ number_format($items->totalPrice) }}</td>
              <td><a href="{{ route('admin.details', $items->id) }}">Details</a></td>
              <td>
                  <form action="" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
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
<!-- Hiển thị phân trang -->
<div class="d-flex justify-content-center mt-3">
    {{ $orders->links('pagination::bootstrap-5') }}
</div>

@endsection
