@extends('layouts.menu')

@section('title')

   Lista de Clientes

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Clientes Eliminados</h4>
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('deleted'))
            <div class="alert alert-warning"  role="alert"> Cliente eliminado, desea eliminar otro cliente <a href="/mclientes"> Click aqui</a></div>
            @endif
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cedula</th>
						<th>Direccion</th>
						<th>Telefono</th>
						<th><center>Accion</center></th>
						
					</thead>
					@foreach($clientes as $cliente)
					<tr>
						<td>{{ $cliente->id }}</td>
						<td>{{ $cliente->Nombres }}</td>
						<td>{{ $cliente->Apellidos }}</td>
						<td>{{ $cliente->Cedula }}</td>
						<td>{{ $cliente->Direccion }}</td>
						<td>{{ $cliente->Telefono }}</td>
						<td>
                        <a href="/restaurarcliente/{{ $cliente->id }}" class="btn btn-primary btn-sm">Restaurar</a>
                        </td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
