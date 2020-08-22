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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #bd362f; color: white;">{{ __('Mensaje') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    'Haz iniciado sesion '
                    {{ $user->name }}
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
