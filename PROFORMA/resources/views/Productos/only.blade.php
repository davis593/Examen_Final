@extends('layouts.menu')

@section('title')

   Lista de Productos

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Poductos Eliminados</h4>
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('deleted'))
            <div class="alert alert-warning"  role="alert"> Producto eliminado, desea eliminar otro producto <a href="/mproductos"> Click aqui</a></div>
            @endif
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Nombre</th>
						<th>Fecha de Elaboracion</th>
						<th>Fecha de Caducidad</th>
						<th><center>Accion</center></th>
					</thead>
					@foreach($productos as $producto)
					<tr>
						<td>{{ $producto->id }}</td>
						<td>{{ $producto->Nombre }}</td>
						<td>{{ $producto->Fecha_Elab }}</td>
						<td>{{ $producto->Fecha_Cad }}</td>
						<td>
                        <center><a href="/restaurarproducto/{{ $producto->id }}" class="btn btn-primary btn-sm">Restaurar</a></center>
                        </td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection