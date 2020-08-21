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
                <table id="boletas">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Total Pagado</th>
                            <th>Estado</th>
                            <th>&nbsp;</th>


                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($boletas as $boleta)
                        <tr>
                            @if($boleta->estado == 'VIGENTE')
                            <td>{{$boleta->rut_cliente}}</td>
                            <td>{{$boleta->total}}</td>
                            <td>{{$boleta->estado}}</td>
                            <td>
                                <form action="/despacho/{{$boleta->id}}" method="POST">
                                    @method('PUT')
                                    {{ csrf_field() }}
                                    <input type="hidden" name="estado" id="estado" value="DESPACHADA">
                                    <button type="submit" class="btn btn-primary">Despachar</button></form>
                            </td>
                            @endif



                            @endforeach

                        </tr>



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