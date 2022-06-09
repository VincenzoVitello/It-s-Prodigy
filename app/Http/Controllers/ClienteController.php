<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Storage;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienti = Cliente::all();
        return view('clienti.index', compact('clienti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clienti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_cliente = new Cliente;
        $new_cliente->name = $data['name'];
        $new_cliente->surname = $data['surname'];
        $new_cliente->phone = $data['phone'];
        $new_cliente->mail = $data['mail'];
        $new_cliente->descrizione_lavoro = $data['descrizione_lavoro'];
        if(isset($data['image'])){
            $img_path = Storage::put('uploads', $data['image']);
            $data['image'] = $img_path;
        }
        $new_cliente->image = $data['image'];
        $new_cliente->save();

        return redirect()->route('clienti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $cliente = Cliente::find($id);
        return view('clienti.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clienti.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $data = $request->all();
        $cliente->name = $data['name'];
        $cliente->surname = $data['surname'];
        $cliente->phone = $data['phone'];
        $cliente->mail = $data['mail'];
        $cliente->descrizione_lavoro = $data['descrizione_lavoro'];
        $cliente->save();
        return redirect()->route('clienti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('clienti.index');
    }
}
