@extends('layouts.app')

@section('title', 'creazione fumetto')

@section('content')

  <div class="container mt-3">
    <h2>Inserimento nuovo fumetto</h2>
    <form action="{{ route('comics.store')}}" method="post">
    @csrf 
      {{-- title --}}
      <div class="mb-3">
        <label for="titl" class="form-label">Titolo</label>
        <input type="text" name='title' class="form-control" id="titl">
      </div>

      {{-- description --}}
      <div class="mb-3">
        <label for="desc" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="desc" rows="6"></textarea>
      </div>

      {{-- thumb --}}
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" name='thumb' class="form-control" id="thumb">
      </div>

      {{-- price --}}
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" name='price' class="form-control" id="price">
      </div>

      {{-- series --}}
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" name='series' class="form-control" id="series">
      </div>

      {{-- sale_date --}}
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data vendita</label>
        <input type="text" name='sale_date' class="form-control" id="sale_date">
      </div>

      {{-- type --}}
      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <select name="type" id="type" class="form-control">
          <option value="graphic_novel">Graphic novel</option>
          <option value="comic_book">Comic book</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    
@endsection