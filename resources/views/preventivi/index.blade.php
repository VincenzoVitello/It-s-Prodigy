@extends('layout.base')

@section('title', 'lista preventivi')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Offerta di lavoro</th>
                <th scope="col">Dettagli Preventivo</th>
                <th>
                    <a href="{{route('preventivi.create')}}"><button type="button" class="btn btn-success">Crea Preventivo</button></a>
                </th>
            </tr>
        </thead>
        <tbody>
            {{-- inserire foreach --}}
               @foreach ($preventivi as $preventivo)
               <tr>
                    <td scope="row">{{$preventivo->id}}</td>
                    <td scope="row">{{$preventivo->cliente}}</td>
                    <td scope="row">{{$preventivo->offerta_di_lavoro}}</td>
                    <td scope="row">{{$preventivo->dettagli_preventivo}}</td>
                    <td scope="row">
                        <a href="{{route('preventivi.show', $preventivo->id)}}"><button type="button" class="btn btn-primary">Mostra</button></a>
                        <a href="{{route('preventivi.edit', $preventivo->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                        <form action="{{route('preventivi.destroy', $preventivo->id)}}" method="POST">
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
