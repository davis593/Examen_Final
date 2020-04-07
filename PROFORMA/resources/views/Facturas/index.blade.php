@extends('layouts.menu')

@section('title')

   Lista de Facturas

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Facturas <a href="{{URL('/factura')}}""><button class="btn btn-success btn-sm">Nueva Factura</button></a></h4>
			<hr>
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Factura restaurada, desea restaurar otra factura eliminada <a href="/mfacturasE"> Click aqui</a></div>
            @endif
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Fecha de Compra</th>
						<th>Hora de Compra</th>
						<th>Cliente</th>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th colspan="3"><center>Accion</center></th>
					</thead>
					@foreach($facturas as $factura)
					<tr>
						<td>{{ $factura->id }}</td>
						<td>{{ $factura->Fecha }}</td>
            <td>{{ $factura->Hora }}</td>
						<td>{{ $factura->cliente->Nombres }} {{ $factura->cliente->Apellidos }}</td>
						<td>{{ $factura->producto->Nombre }}</td>
						<td>{{ $factura->Cantidad }}</td>
						<td>{{ $factura->Precio }}</td>
            <td>
            <form action="/eliminarfactura/{{ $factura->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <center><button type="button" class="btn btn-danger btn-sm btn-sm btn-delete">Eliminar</button></center>
            </form>
            </td>
            <td><a href="/verfactura/{{ $factura->id }}" target="_blank" ><button class="btn btn-block btn-primary btn-xs">ver PDF</button></a></td>
            <td><a href="/descargarfactura/{{ $factura->id }}"><button class="btn btn-block btn-success btn-xs">Descargar PDF</button></a></td>
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
    	if(confirm('¿Esta seguro de eliminar la Factura?')){
    		$(this).parents('form:first').submit();
    	}
    });
   </script>
@endsection
