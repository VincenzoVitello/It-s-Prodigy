@extends('layout.base')

@section('title', 'modifica informazioni cliente')

@section('content')
    <form action="{{route('clienti.update', $cliente->id)}}" method="POST">
    @csrf
    @method('PUT')
        <div class="container d-flex flex-column justify-content-between align-items-center">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{$cliente->name}}" class="ms_create_form">

        <label for="surname">Cognome</label>
        <input type="text" name="surname" id="surname" value="{{$cliente->surname}}" class="ms_create_form">

        <label for="phone">Numero di telefono</label>
        <input type="text" name="phone" id="phone" value="{{$cliente->phone}}" class="ms_create_form">

        <label for="surname">Mail</label>
        <input type="text" name="mail" id="mail" value="{{$cliente->mail}}" class="ms_create_form">

        <label for="surname">Descrizione Lavoro</label>
        <input type="textarea" name="descrizione_lavoro" id="descrizione_lavoro" value="{{$cliente->descrizione_lavoro}}" class="ms_create_form">

        <input type="submit" name="" id="" value="invia" class="btn btn-primary">
        </div>

        <form action="{{route('clienti.index')}}">
            <input type="submit"  name="" id="" value="home" class="btn btn-primary">
        </form>
       
    </form> 
@endsection