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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a href="" class="btn btn-primary">Show</a>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-primary">Delete</a>
      </td>
    </tr>

  </tbody>
</table>


@endsection