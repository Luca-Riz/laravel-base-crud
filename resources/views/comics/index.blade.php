@extends('layouts.app')
@section('title', 'i miei fumetti')
    
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Price</th>
      <th scope="col">Series</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($fumetti as $fumetto)
      <tr>
        <th scope="row">{{ $fumetto->id }}</th>
        <td>{{ $fumetto->title }}</td>
        <td>{{ $fumetto->price }}</td>
        <td>
          <a href="" class="btn btn-success">Show</a>
          <a href="" class="btn btn-secondary">Edit</a>
          <a href="" class="btn btn-warning">Delete</a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>

<div>
  {{ $fumetti->links() }}
</div>


@endsection