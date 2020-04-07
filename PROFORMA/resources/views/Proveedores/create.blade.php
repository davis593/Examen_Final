@extends('layouts.menu')

@section('title')

     Crear nuevo Proveedor 
     
@endsection

@section('contenidos')	
<div class="panel panel-default">
    <div class="panel-heading"><label>Procesar Datos del Proveedor</label></div>
		<div class="panel-body">
            <form action="{{URL('/ingproveedor')}}" method="POST" role="form">
			        {{ csrf_field() }}

                @include('Proveedores._form')
                <div class="form-group">	
                    <button type="submit" class="btn btn-primary">Guardar Datos</button>
                </div>			
            </form>
        </div>
</div><!-- /.panel-->
@endsection