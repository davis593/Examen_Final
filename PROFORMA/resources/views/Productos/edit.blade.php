@extends('layouts.menu')

@section('title')

     Editar Producto
     
@endsection

@section('contenidos')  
<div class="panel panel-default">
    <div class="panel-heading"><label>Editar Datos del Producto</label></div>
      <div class="panel-body">
        <form action="/actualizarproducto/{{ $producto->id }}" method="POST" role="form">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        @include('Productos._form')
        <div class="form-group">  
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>          
        </form>
    </div>
</div><!-- /.panel-->
@endsection