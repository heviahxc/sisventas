@extends('layouts.app')
@section('content')
@if (session()->has('msj'))
<div class="row justify-content-center">
<div class="alert alert-success" role="alert">
  {{session('msj')}}
  <button type="button" class="close" data-dismiss="alert">x</button>
</div>
</div>
@endif
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header" style="background: #bd362f; color: white;"> Despacho </div>
            <div class="card-body">
                <table id="boletas" class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Cliente</th>
                            <th scope="col">Total Pagado</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">&nbsp;</th>


                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($boletas as $boleta)
                        <tr>
                            @if ($boleta->estado=="VIGENTE")
                                
                            
                            <td>{{$boleta->rut_cliente}}</td>
                            <td>{{$boleta->total}}</td>
                            <td>{{$boleta->estado}}</td>
                            <td>{{$boleta->direccion}}</td>
                           
                            <td><form action="/despacho/{{$boleta->id}}" method="GET">
                              @method('PUT')
                              {{ csrf_field() }}
                              <input type="hidden" name="estado" id="estado" value="DESPACHADA">
                              <button type="submit" class="btn btn-primary">Despachar</button></form>
                            </td>
                            
                            <td><button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{$boleta->id}}">Ver detalle</button>
                            
                            <div id="{{$boleta->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                  
                                  <?php
                                  $condicion = $boleta->id
                                  ?>
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header" style=" background: #bd362f;">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
              
                                    </div>
                                    <div class="modal-body"style=" color: black;">
                                      <table id="detalle" class="table table-borderless">
                                        <thead>   
                                          <tr>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio unitario</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">&nbsp;</th>
                                           
              
                                          </tr>
                                        </thead>
              
                                        <tbody>
                                          @foreach ($detalles as $detalle)
                                          <tr>
              
                                            @if ($boleta->id==$condicion)
                                            @if ($detalle->codigo_boleta==$boleta->id)
                                            @foreach ($productos as $producto)
                                            @if ($producto->id == $detalle->codigo_producto)
                                            <td>{{$producto->nombre}}</td>
                                            @endif
                                            @endforeach
              
                                            <td>{{$detalle->cantidad}}</td>
                                            <td>{{$detalle->precio_unitario}}</td>
                                            <td>{{$detalle->total}}</td>
              
                                            @endif
              
                                            @endif
             
                                            @endforeach
                                            
                                        </tbody>
                                      </table>
        
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                  </div>
                                 
                                </div>
                              </div>
                              
                        </tr>
                        @endif
                        @endforeach

                            

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  
    <script>
      $(document).ready(function() {
        $('#boletas').DataTable();
      });
    </script>
    
  
</body>




@endsection