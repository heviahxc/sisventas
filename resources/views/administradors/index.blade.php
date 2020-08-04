@extends('layouts.app')


@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

       <title>DataTable</title>

   </head>
   <body>
       <div class="container">
       <table id="users">
         <thead>
          <tr>
              <th>Rut</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Fono</th>
              <th>email</th>
              <th>Tipo</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>

          </tr>
         </thead>
         <tbody>
            @foreach ($users as $user)
            @if ($user->tipo_usuario == 'EMPLEADO')
            <tr>
                <td>{{$user->rut}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->fono}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tipo_usuario}}</td>
                <td><form action="/administradors/{{$user->id}}/edit" method="GET">
                    <button type="submit" class="btn btn-primary">Editar</button></form></td>
                <td><form action="/administradors/{{$user->id}}/editestado" method="GET">
                    <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
               
                </tr>
            @else
                
            @endif
             
            @endforeach

         </tbody>
         </table>
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
         <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

     <script>
        $(document).ready(function() {
          $('#users').DataTable();
        } );</script>
   </body>

   <h1> <button type="button" class="btn btn-outline-primary" style="margin: 5%"><a href="/administradors/create">Agregar Nuevo Empleado</a></button></h1>


   @endsection
  