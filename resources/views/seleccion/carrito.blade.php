@extends('layouts.app')

@section('content')

<head>
     
      
       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>

</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Carrito</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <body>

                    <div class="container" STYLE="BACKGROUND-COLOR: WHITE">
                        <table id="carrito">
                          <thead>
                           <tr>
                               <th>Producto</th>
                               <th>Cantidad</th>
                               <th>Precio</th>
                               <th>&nbsp;</th>
                                 <th>&nbsp;</th>
                    
                           </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <?php
                                $total=0;
                                ?>
                             @foreach ($carritos as $carrito)
                             @foreach ($users as $user)
                                 @if ($user->rut==$carrito->rut)
                                 @foreach ($productos as $producto)
                                
                            
                                 @if ($carrito->codigo_producto==$producto->id)

                                 <td>{{$producto->nombre}}</td>
                                 <td>{{$carrito->cantidad}}</td>
                                 <td>{{$producto->precio}}</td>
                                 
                                 <?php
                                $total=$total+($carrito->cantidad*$producto->precio);
                                 ?>

                                 <td><img src="{{asset('storage').'/'.$producto->imagen}}" alt="producto" width="50"></td>
                                 <td><form action="/seleccion/{{$carrito->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
                                 @endif
    
    
                                 @endforeach
                                 
                                 @endif
                             @endforeach
                          
                                 </tr>
                             
                              
                             @endforeach
                    
                          </tbody>
                          </table>
                          ${{$total}}
                          </div>
                          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                          <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                          <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
                    
                      <script>
                         $(document).ready(function() {
                           $('#carrito').DataTable();
                         } );</script>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
