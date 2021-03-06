@extends('layouts.app')
@section('content')

<head>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <title>DataTable</title>

</head>

<body>

  <div class="container">

    <div class="card">
      <div class="card-header" style="background: #bd362f; color: white;"> Historial</div>
      <div class="card-body">
        <table id="boletas" class="table table-borderless table-dark">
          <thead>
            <tr>
              <th scope="col">N° boleta</th>
              <th scope="col">Total</th>
              <th scope="col">Vigente</th>
              <th scope="col">Fecha</th>
              <th scope="col">&nbsp;</th>
               

            </tr>
          </thead>

          <tbody>
            @foreach ($boletas as $boleta)
      
              @if ($boleta->rut_cliente==auth()->user()->rut)
              <tr>
              <td>{{$boleta->id}}</td>
              <td>{{$boleta->total}}</td>
              <td>{{$boleta->estado}}</td>
              <td>{{$boleta->created_at}}</td>
              <td><button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{$boleta->id}}">Ver detalle</button>
               
              
                <!-- Modal-->

                <div id="{{$boleta->id}}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

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

                              @if ($boleta->rut_cliente==auth()->user()->rut)
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
                        <script>
                          $(document).ready(function() {
                            $('#detalle').DataTable();
                          });
                        </script>

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
  {{$boletas->links()}}



</body>




@endsection