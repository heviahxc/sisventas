<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
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
        return view('productos.index', compact('productos','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
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
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'id_categoria' => 'required',
            'imagen'=>'required',

        ]);

        $producto = new Producto;
        $producto->nombre = request('nombre');
        $producto->precio = request('precio');
        $producto->stock = request('stock');
        $producto->id_categoria = request('id_categoria');
        $producto->imagen= request('imagen');

        $producto->save();
        return redirect('/productos');
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
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('productos.edit', compact('categorias','producto'));
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
        $this->validate(request(),[
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'id_categoria' => 'required',
        ]);

        $producto = Producto::find($id);
        $producto->nombre = request('nombre');
        $producto->precio = request('precio');
        $producto->stock = request('stock');
        $producto->id_categoria = request('id_categoria');

        $producto->save();
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $producto = Producto::findOrfail($id);
       $producto -> delete();

       return redirect('/productos');
    }
}
