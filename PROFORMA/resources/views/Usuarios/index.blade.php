@extends('layouts.menu')

@section('title')

   Usuarios

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Usuarios</h4>
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Nombre</th>
						<th>Correo</th>
					</thead>
					@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->id }}</td>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection