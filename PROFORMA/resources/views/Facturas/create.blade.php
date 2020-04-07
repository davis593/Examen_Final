@extends('layouts.menu')

@section('title')

     Crear nueva Factura
     
@endsection

@section('contenidos')	
<div class="panel panel-default">
    <div class="panel-heading"><label>Procesar Datos de Factura</label></div>
		<div class="panel-body">
            <form action="{{URL('/ingfactura')}}" method="POST" role="form">
			        {{ csrf_field() }}

                @include('Facturas._form')
                <div class="form-group">	
                    <button type="submit" class="btn btn-primary">Guardar Datos</button>
                </div>			
            </form>
        </div>
</div><!-- /.panel-->
@endsection