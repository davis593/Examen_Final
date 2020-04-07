@extends('layouts.menu')

@section('title')

   Lista de Facturas

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Facturas Eliminadas</h4>
			<hr>
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('deleted'))
            <div class="alert alert-warning"  role="alert"> Factura eliminada, desea eliminar otra factura <a href="/mfactura"> Click aqui</a></div>
            @endif
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Fecha de Compra</th>
						<th>Cliente</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th><center>Accion</center></th>
					</thead>
					@foreach($facturas as $factura)
					<tr>
						<td>{{ $factura->id }}</td>
						<td>{{ $factura->Fecha }}</td>
						<td>{{ $factura->cliente->Nombres }} {{ $factura->cliente->Apellidos }}</td>
						<td>{{ $factura->producto->Nombre }}</td>
						<td>{{ $factura->Cantidad }}</td>
						<td>{{ $factura->Precio }}</td>
            <td>
            <center><a href="/restaurarfactura/{{ $factura->id }}" class="btn btn-primary btn-sm">Restaurar</a></center>
            </td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
