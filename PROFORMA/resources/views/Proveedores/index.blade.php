@extends('layouts.menu')

@section('title')

   Lista de Proveedores

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Proveedores <a href="{{URL('/clientes')}}""><button class="btn btn-success btn-sm">Nuevo</button></a></h4>
			@include('Proveedores.search')
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Proveedor restaurado, desea restaurar otro provedor eliminado <a href="/mproductosE"> Click aqui</a></div>
            @endif
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cedula</th>
						<th>Sexo</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th colspan="2"><center>Accion</center></th>
						
					</thead>
					@foreach($proveedores as $proveedor)
					<tr>
						<td>{{ $proveedor->id }}</td>
						<td>{{ $proveedor->Nombres }}</td>
						<td>{{ $proveedor->Apellidos }}</td>
						<td>{{ $proveedor->Cedula }}</td>
						<td>{{ $proveedor->Sexo }}</td>
						<td>{{ $proveedor->Direccion }}</td>
						<td>{{ $proveedor->Telefono }}</td>
						<td>
                        <a href="/editarproveedor/{{ $proveedor->id }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                        <form action="/eliminarproveedor/{{ $proveedor->id }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-danger btn-sm btn-sm btn-delete">Eliminar</button>
                        </form>
                        </td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
   <script>	
    $('.btn-delete').on('click', function(e){
    	if(confirm('¿Esta seguro de eliminar el Proveedor?')){
    		$(this).parents('form:first').submit();
    	}
    });
   </script>
@endsection