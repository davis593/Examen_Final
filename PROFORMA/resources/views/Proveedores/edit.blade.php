@extends('layouts.menu')

@section('title')

     Editar Proveedor
     
@endsection

@section('contenidos')  
<div class="panel panel-default">
    <div class="panel-heading"><label>Editar Datos del Proveedor</label></div>
      <div class="panel-body">
        <form action="/actualizarproveedor/{{ $proveedor->id }}" method="POST" role="form">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        @include('Proveedores._form')
        <div class="form-group">  
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>          
        </form>
    </div>
</div><!-- /.panel-->
@endsection