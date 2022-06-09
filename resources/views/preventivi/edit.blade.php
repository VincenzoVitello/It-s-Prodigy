@extends('layout.base')

@section('title', 'modifica preventivo')

@section('content')
    <form action="{{route('preventivi.update', $preventivo->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="container d-flex flex-column justify-content-between align-items-center">
        <label for="clientie">Cliente</label>
        <input type="text" name="cliente" id="cliente" value="{{$preventivo->cliente}}" class="ms_create_form">

        <label for="offerta_di_lavoro">Offerta di lavoro</label>
        <input type="text" name="offerta_di_lavoro" id="offerta_di_lavoro" value="{{$preventivo->offerta_di_lavoro}}" class="ms_create_form">

        <label for="dettagli_preventivo">Dettagli preventivo</label>
        <input type="text" name="dettagli_preventivo" id="dettagli_preventivo" value="{{$preventivo->dettagli_preventivo}}" class="ms_create_form dettagli_preventivo">

        <input type="submit" name="" id="" value="invia" class="btn btn-primary">
        </div>
    </form>
@endsection