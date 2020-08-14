<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Boleta;
use App\Detalle;
use App\MedioPago;
use App\Producto;
use App\Categoria;
use App\Carrito;


class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();
        $boletas = Boleta::all();
        $detalles = Detalle::all();
        $mediopagos = MedioPago::all();
        return view('boleta.index', compact('productos','categorias','boletas','detalles','mediopagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boleta = new Boleta;
        $boleta->rut_cliente = request('rut_cliente');
        $boleta->total = request('total');
        $boleta->estado = request('estado');

        $boleta->save();

        $mediopago = new MedioPago;
        $mediopago->codigo_boleta = $boleta->id ;
        $mediopago->codigo_pago = request('id_pago');
        $mediopago->total_pago = request('total');

        $mediopago->save();

        $array_id = request('array_id');
        $array_cantidad = request('array_cantidad');
        $array_precio = request('array_precio');
        $array_totalcp = request('array_totalcp');
        $carritos = Carrito::all();
     
        foreach($carritos as $carrito){
            if(request('rut_cliente')==$carrito->rut){
                $detalle = new Detalle;
                $detalle->codigo_producto = $carrito->codigo_producto;
                $detalle->codigo_boleta = $boleta->id ;
                $detalle->cantidad = $carrito->cantidad ;
                $detalle->precio_unitario = $carrito->precio_unitario;
                $detalle->total = $carrito->cantidad*$carrito->precio_unitario;
    
                $detalle->save();
            }
        }

  

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boletas = Boleta::all();
        return view('boleta.edit', compact('boletas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boleta = new Boleta;
        $boleta->rut_cliente = request('rut_cliente');
        $boleta->total = request('total');
        $boleta->estado = request('estado');

        $boleta->save();

        
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}