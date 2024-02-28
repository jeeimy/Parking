<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarroRequest;
use App\Http\Requests\UpdateCarroRequest;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     */

     public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $carro = new Carro();
        $carro->marca =  $request->marca;
        $carro->modelo =  $request->modelo;
        $carro->anio =  $request->anio;
        $carro->kilometraje = $request->kilometraje;
        $carro->matricula = $request->matricula;
        $carro->placa = $request->placa;
        $carro->precio = $request->precio;
        $carro->foto = $request->foto;
        $carro->save();

        return redirect()->route('carros.index')->with('datos', 'Registro guardado correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carro $carro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarroRequest $request, Carro $carro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carro $carro)
    {
        //
    }
}
