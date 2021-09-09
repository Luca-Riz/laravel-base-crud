@extends('layouts.app')

@section('title', 'dettaglio prodotto')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1> {{ $comic->title }} </h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="rounded">
        </div>
        <div class="col-md-9">
          <p>{{ $comic->description }}</p>
          {{-- <p>{!! $comic->description !!}</p>  //? se ci fosse stata della formattazione html all'interno della descrizione, bastava mettere le parentesi cosí e l'avrebbe presa -> {!! testo !!} --}}
        </div>

        <div class="row">
          <div class="col text-center">
            <div class="badge bg-dark p-2 my-2 text-white">{{ $comic->price }} €</div>
            <div class="badge bg-dark p-2 my-2 text-white">Data vendita: {{ $comic->sale_date }}</div>
            <div class="badge bg-dark p-2 my-2 text-white">Tipo: {{ $comic->type }}</div>
          </div>
        </div>
      </div>
    </div>

@endsection