
@extends('layout.base')

@section('title', 'lista clienti')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Descrizione Lavoro</th>
                <th scope="col">Link</th>
                <th>
                    <a href="{{route('clienti.create')}}"><button type="button" class="btn btn-success">Crea</button></a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clienti as $cliente)
               <tr>
                    <td scope="row">{{$cliente->id}}</td>
                    <td scope="row">{{$cliente->name}}</td>
                    <td scope="row">{{$cliente->surname}}</td>
                    <td scope="row"> {{$cliente->phone}}</td>
                    <td scope="row"> {{$cliente->mail}}</td>
                    <td scope="row"> {{$cliente->descrizione_lavoro}}</td>
                    <td scope="row">
                        <a href="{{route('clienti.show', $cliente->id)}}"><button type="button" class="btn btn-primary">Show</button></a>
                        <a href="{{route('clienti.edit', $cliente->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                        <form action="{{route('clienti.destroy', $cliente->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit"  name="" id="" value="X" class="btn btn-danger">
                        </form>
                    </td>
               </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection
    