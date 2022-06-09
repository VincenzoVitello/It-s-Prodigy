@extends('layout.base')

@section('title', 'modifica informazioni cliente')

@section('content')
    <form action="{{route('preventivi.store')}}" method="POST">
    @csrf
        <div class="container d-flex flex-column justify-content-between align-items-center">
        <label for="cliente">Cliente</label>
        <input type="text" name="cliente"  value="" class="ms_create_form">

        <label for="offerta_di_lavoro">Offerta di lavoro</label>
        <input type="text" name="offerta_di_lavoro"  value="" class="ms_create_form">

        <label for="dettagli_preventivo">Dettagli preventivo</label>
        <input type="text" name="dettagli_preventivo"  value="" class="ms_create_form dettagli_preventivo">
        

        <input type="submit" name="" id="" value="invia" class="btn btn-primary">
        </div>
    </form> 
@endsection