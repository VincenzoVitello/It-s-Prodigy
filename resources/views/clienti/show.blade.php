@extends('layout.base')

@section('title', 'preventivo')


@section('content')

    <h1>{{$cliente->name}}</h1>
    <h1>{{$cliente->surname}}</h1>
    <p> {{$cliente->phone}}</p>
    <p> {{$cliente->mail}}</p>
    <p> {{$cliente->descrizione_lavoro}}</p>
    <img src="{{asset('storage/' . $cliente->image)}}" alt="" class="cliente_img">
    <a href="{{route('clienti.index')}}"><button type="button" class="btn btn-primary">Home</button></a>
                  
@endsection