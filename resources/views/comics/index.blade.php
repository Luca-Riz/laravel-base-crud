@extends('layouts.app')
@section('title', 'i miei fumetti')
    
@section('content')
  <div class="container">
    <p>
      @if (session('modifica'))
        <div class="alert alert-success">
          {{session('modifica')}}
        </div>  
      @endif
      @if (session('deleted'))
        <div class="alert alert-danger">
          {{session('deleted')}}
        </div>  
      @endif
    </p>

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
              <a href="{{ route('comics.show', ['comic' => $fumetto->id])}}" class="btn btn-success">Show</a>
              <a href="{{ route('comics.edit', ['comic' => $fumetto->id])}}" class="btn btn-secondary">Edit</a>
              <form action="{{ route('comics.destroy', $fumetto->id)}}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete" class="btn btn-danger">
              </form>
            </td>
          </tr>
        @endforeach
    
      </tbody>
    </table>
    
    <div>
      {{ $fumetti->links() }}
    </div>
  </div>

@endsection