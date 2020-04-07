@extends('layouts.menu')

@section('title')

   Lista de Proveedores

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Proveedores Eliminados</h4>
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('deleted'))
            <div class="alert alert-warning"  role="alert"> Producto eliminado, desea eliminar otro producto <a href="/mproveedores"> Click aqui</a></div>
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
						<th><center>Accion</center></th>
						
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
                        <a href="/restaurarproveedor/{{ $proveedor->id }}" class="btn btn-primary btn-sm">Restaurar</a>
                        </td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
