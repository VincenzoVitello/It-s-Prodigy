<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preventivo;

class PreventivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preventivi = Preventivo::all();
        return view('preventivi.index', compact('preventivi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('preventivi.create');
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

        $new_preventivo = new Preventivo;
        $new_preventivo->cliente = $data['cliente'];
        $new_preventivo->offerta_di_lavoro = $data['offerta_di_lavoro'];
        $new_preventivo->dettagli_preventivo = $data['dettagli_preventivo'];
        
        $new_preventivo->save();

        return redirect()->route('preventivi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preventivo = Preventivo::find($id);
        return view('preventivi.show', compact('preventivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preventivo = Preventivo::find($id);
        return view('preventivi.edit', compact('preventivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preventivo $preventivo)
    {
        $data = $request->all();
        $preventivo->cliente = $data['cliente'];
        $preventivo->offerta_di_lavoro = $data['offerta_di_lavoro'];
        $preventivo->dettagli_preventivo = $data['dettagli_preventivo'];
        $preventivo->save();
        return redirect()->route('preventivi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $preventivo = Preventivo::find($id);
        $preventivo->delete();
        return redirect()->route('preventivi.index');
    }
}
