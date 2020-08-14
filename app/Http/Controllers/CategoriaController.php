<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Collection;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
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
            'nombre_categoria' => 'required',
        ]);
        $cs = Categoria::all();
        foreach($cs as $cate){
            if($cate->nombre_categoria==request('nombre_categoria')){
                $categoria = new Categoria;
                $categoria->nombre_categoria = request('nombre_categoria');
                $categoria->estado = request('estado');
        
                if($categoria->save()){
                    return redirect('/categorias')->with('msj', 'Datos guardados');
                
                }
            }else{
                return redirect('/categorias')->with('msje', 'Categoria ya existe');
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
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
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
            'nombre_categoria' => 'required',
        ]);

        $categoria = Categoria::find($id);
        $categoria->nombre_categoria = request('nombre_categoria');
        $categoria->estado = request('estado');

        $categoria->save();
        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrfail($id);
        $categoria -> delete();

        return redirect('/categorias');
    }
}
