@extends('layout.base')

@section('title', 'cliente')

@section('content')
    <h1>Cliente: {{$preventivo->cliente}}</h1>
    <div><strong>Offerta di lavoro: </strong>{{$preventivo->offerta_di_lavoro}}</div>
    <div><strong>Dettagli del preventivo: </strong>{{$preventivo->dettagli_preventivo}}</div>
    
    <a href="{{route('preventivi.index')}}"><button type="button" class="btn btn-primary mt-5">Preventivi</button></a>
                  
@endsection