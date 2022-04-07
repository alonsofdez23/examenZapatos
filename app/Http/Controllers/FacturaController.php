<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Factura;
use App\Models\Linea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facturas.index', [
            'facturas' => Factura::where('user_id', Auth::id())->get(),
        ]);
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
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        return view('facturas.show', [
            'lineas' => Factura::where('id', $factura->id)->first()->lineas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }

    public function factura()
    {
        $factura = new Factura();

        $factura->user_id = Auth::id();

        $factura->save();

        foreach(Auth::user()->carritos as $fila) {
            $linea = new Linea([
                'factura_id'=> $factura->id,
                'zapato_id' => $fila->zapato_id,
                'cantidad' => $fila->cantidad,
            ]);

            $linea->save();
        }

        Carrito::where('user_id', Auth::id())->delete();

        return redirect()->route('carritos.index');
    }
}
