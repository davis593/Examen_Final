@extends('layouts.menu')

@section('title')

     Crear nuevo Cliente 
     
@endsection

@section('contenidos')	
<div class="panel panel-default">
    <div class="panel-heading"><label>Procesar Datos del Cliente</label></div>
		<div class="panel-body">
            <form action="{{URL('/ingcliente')}}" method="POST" role="form">
			        {{ csrf_field() }}

                @include('Clientes._form')
                <div class="form-group">	
                    <button type="submit" class="btn btn-primary">Guardar Datos</button>
                </div>			
            </form>
        </div>
</div><!-- /.panel-->
@endsection