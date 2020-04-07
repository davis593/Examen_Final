@extends('layouts.menu')

@section('title')

     Editar Cliente
     
@endsection

@section('contenidos')  
<div class="panel panel-default">
    <div class="panel-heading"><label>Editar Datos del Cliente</label></div>
      <div class="panel-body">
        <form action="/actualizarcliente/{{ $cliente->id }}" method="POST" role="form">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        @include('Clientes._form')
        <div class="col-md-6">  
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>          
        </form>
    </div>
</div><!-- /.panel-->
@endsection