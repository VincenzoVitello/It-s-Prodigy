

@extends('layout.base')

@section('title', 'crea nuovo cliente')

@section('content')
    <form action="{{route('clienti.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container d-flex flex-column justify-content-between align-items-center mt-5">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="ms_create_form">

            <label for="surname">Cognome</label>
            <input type="text" name="surname" id="surname" class="ms_create_form">

            <label for="phone">Telefono</label>
            <input type="number" name="phone" id="phone" class="ms_create_form">

            <label for="mail">Indirizzo email</label>
            <input type="email" name="mail" id="mail" class="ms_create_form">

            <label for="descrizione_lavoro">Proposta di lavoro</label>
            <input type="text" name="descrizione_lavoro" id="descrizione_lavoro" class="ms_create_form">
            {{-- aggiunta dell'immagine --}}
                <label for="image">Inserisci Immagine</label>
                <input type="file" name="image" id="image" class="ms_create_form">
            
            <div class="d-flex">
                <input type="submit" class="btn btn-success mx-3" value="Registra">
                <a href="{{route('clienti.index')}}"><button type="button" class="btn btn-primary mx-3">Home</button></a>
            </div>
        </div>
    </form>
@endsection