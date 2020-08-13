@extends('layouts.app')
@section('content')

<head>
     
      
       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>

</head>
<body>
    
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    <table id="boletas">
      <thead>
       <tr>
           <th>N° boleta</th>
           <th>Total</th>
           <th>Vigente</th>
           <th>Fecha</th>
           <th>&nbsp;</th>
           <th>&nbsp;</th>

       </tr>
      </thead>
      
      <tbody>
         @foreach ($boletas as $boleta)
         <tr>
             @if ($boleta->rut_cliente==auth()->user()->rut)
                 
         
             <td>{{$boleta->id}}</td>
             <td>{{$boleta->total}}</td>
             <td>{{$boleta->estado}}</td>
             <td>{{$boleta->created_at}}</td>
             @endif  
          
            
            
 <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ver detalle</button>


    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Detalle Boleta</h4>
            </div>
            <div class="modal-body">
                <table id="detalle">
                    <thead>
                     <tr>
                         <th>Producto</th>
                         <th>Cantidad</th>
                         <th>Precio unitario</th>
                         <th>Total</th>                  
                         <th>&nbsp;</th>
                         <th>&nbsp;</th>
              
                     </tr>
                    </thead>
                    
                    <tbody>
                       @foreach ($detalles as $detalle)
                       <tr>
                           @foreach ($boletas as $boleta)
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
                         
              
         @endforeach
        </tbody>
        </table>
        <script>
            $(document).ready(function() {
              $('#detalle').DataTable();
            } );</script>
        
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
      
        </div>
      </div>
             </tr>
      
         @endforeach
      </tbody>
      </table>

      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <script>
     $(document).ready(function() {
       $('#boletas').DataTable();
     } );</script>

            </div>
        </div>
    </div>
</body>




@endsection