<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('administradors.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('administradors.create', compact('users'));
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
            'name' => 'required',
            'apellidos' => 'required',
            'fono' => 'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $userss = User::all();
        $comparacion = '';
        foreach($userss as $user){

        if($user->rut== request('rut')){
        $comparacion = $user->rut;
        }
    }
    if($comparacion==request('rut')){
        return redirect('/administradors')->with('msj', 'Usuario ya existe');
    }else{
        $users = new User;
        $users->rut = request('rut');
        $users->name = request('name');
        $users->apellidos = request('apellidos');
        $users->fono = request('fono');
        $users->email= request('email');
        $users->tipo_usuario= request('tipo_usuario');
        $users->password= Hash::make(request('password'));
        $users->estado= request('estado');
        
      

        $users->save();
        $users->removeRole('CLIENTE');
        $users->assignRole('EMPLEADO');
        if($users->save()){
            return redirect('/administradors')->with('msjes', 'Datos Guardados');
        
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

    public function cliente (){
        $users = User::all();
        return view('administradors.cliente',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('administradors.edit', compact('users'));
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
            
        ]);

        $users = User::find($id);
        $users->name = request('name');
        $users->apellidos = request('apellidos');
        $users->fono = request('fono');
        $users->email = request('email');
        $users->estado= request('estado');
        $users->password= Hash::make(request('password'));
        

        $users->save();
        if($users->save()){
            return redirect('/administradors')->with('msj', 'Datos Modificados');
        
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $users= User::findOrfail($id);
       $users -> delete();

       return redirect('/administradors');
    }
}
