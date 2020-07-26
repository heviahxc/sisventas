<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
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
            'rut' => 'required',
            'contrasena' => 'required',
            'tipo_usuario' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
            'fono' => 'required',
        ]);

        $usuario = new Usuario;
        $usuario->rut = request('rut');
        $usuario->contrasena = request('contrasena');
        $usuario->tipo_usuario = request('tipo_usuario');
        $usuario->nombre = request('nombre');
        $usuario->apellidos= request('apellidos');
        $usuario->correo = request('correo');
        $usuario->fono = request('fono');

        $usuario->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('usuarios.edit');
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
            'rut' => 'required',
            'contrasena' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'correo' => 'required',
            'fono' => 'required',
        ]);

        $usuario = Usuario::find($rut);
        $usuario->rut = request('rut');
        $usuario->contrasena = request('contrasena');
        $usuario->nombre = request('nombre');
        $usuario->apellidos= request('apellidos');
        $usuario->correo = request('correo');
        $usuario->fono = request('fono');

        $usuario->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rut)
    {
       $usuario = Usuario::findOrfail($rut);
       $usuario -> delete();

       return redirect('/');
    }
}
