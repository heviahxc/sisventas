<?php

namespace App\Http\Controllers;
use App\carrito;
use App\producto;
use App\categoria;
use App\user;
use App\tipopago;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(4);
        $categorias = Categoria::all();
        $users = User::all();
        return view('seleccion.index', compact('productos','categorias','users'));
    }
    public function carrito()
    {   $productos = Producto::all();
        $categorias = Categoria::all();
        $users = User::all();
        $carritos = Carrito::all();
        $tipopagos = Tipopago::all();
        return view('seleccion.carrito',compact('productos','categorias','users','carritos','tipopagos'));
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

        $this->validate(request(),[
            'id' => 'required',
            'rut' => 'required',
            'cantidad' => 'required',
            'precio'=>'required',
        ]);
        $productos = Producto::all();
        foreach($productos as $producto){
            
                if($producto->id== request('id')){
if($producto->stock> request('cantidad')){

    $carrito = new Carrito;
    $carrito->codigo_producto = request('id');
    $carrito->rut = request('rut');
    $carrito->cantidad = request('cantidad');
    $carrito->precio_unitario = request('precio');

    $carrito->save();
    return redirect('/seleccion');

        
                }else{
                    return redirect('seleccion')->with('msj', 'Cantidad supera el stock');
                }
            }
            

        
    }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrito = Carrito::findOrfail($id);
        $carrito -> delete();
 
        return redirect('/carrito');
    }
}
