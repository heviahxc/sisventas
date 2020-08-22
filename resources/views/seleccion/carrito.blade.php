@extends('layouts.app')

@section('content')
@if (session()->has('error'))
<div class="row justify-content-center">
  <div class="alert alert-danger" role="alert">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert">x</button>
  </div>
</div>
@endif
<head>
     
      
       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>

</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #bd362f; color: white;">Carrito</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    <body>

                    <div class="container" >
                       
                         
                                {{ csrf_field() }}
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
                             
                                 @if (auth()->user()->rut==$carrito->rut)
                                 
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
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro quiere eliminar el articulo del carrito?')">Eliminar</button></form></td>
                                 @endif
    
    
                                 @endforeach
                                 
                                 @endif
                    
                          
                                 </tr>
                             
                              
                             @endforeach
                    

                             
                          </tbody>
                          </table>
                          <form action="/boleta" method="POST">
                            {{ csrf_field() }}
                          <p><Strong>Total:</Strong>${{$total}}</p>   
                          <label for="direccion">Direccion:</label><br>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ej: Villa Ancoa 32" required><br>
                         <strong>Seleccionar metodo de pago:<strong>
                            <select class="form-control form-control" id="id_pago" name="id_pago" size="1">
                                @foreach ($tipopagos as $tipopago)
                                    <option value={{$tipopago->id}}>{{$tipopago->descripcion}}</option>
                                @endforeach
                            </select>
                            <br>
                            
                            <input type="hidden" name="rut_cliente" id="rut_cliente" value="{{auth()->user()->rut}}">
                             <input type="hidden" name="total" id="total" value="{{$total}}">
                             <input type="hidden" name="estado" id="estado" value="VIGENTE">
                            <button type="submit" class="btn btn-success">Comprar</button></form>
                            </form>
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
