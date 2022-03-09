<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Zapato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carritos.index', [
            'carritos' => Auth::user()->carritos->sortBy('id'),
        ]);
    }

    public function add(Zapato $zapato)
    {
        $carrito = Carrito::where('zapato_id', $zapato->id)->first();

        if ($carrito == null) {
            $carrito = new Carrito();
            $carrito->user_id = Auth::user()->id;
            $carrito->zapato_id = $zapato->id;
            $carrito->cantidad = 1;
            $carrito->save();
        } else {
            $carrito->cantidad++;
            $carrito->save();
        }

        return redirect()->route('zapatos.index')
            ->with('success', "$zapato->denominacion añadido a la cesta");
    }

    public function sumar(Zapato $zapato)
    {
        $carrito = Carrito::where('zapato_id', $zapato->id)->first();

        $carrito->cantidad++;
        $carrito->save();

        return redirect()->route('carritos.index');
    }

    public function restar(Zapato $zapato)
    {
        $carrito = Carrito::where('zapato_id', $zapato->id)->first();

        if ($carrito->cantidad == 1) {
            $carrito->delete();
        } else {
            $carrito->cantidad--;
            $carrito->save();
        }

        return redirect()->route('carritos.index');
    }

    public function delete(Zapato $zapato)
    {
        $carrito = Carrito::where('zapato_id', $zapato->id)->first();

        $carrito->delete();

        return redirect()->route('carritos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }
}
