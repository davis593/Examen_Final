@extends('layouts.menu')

@section('title')

   Lista de Productos

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Poductos <a href="{{URL('/productos')}}"><button class="btn btn-success btn-sm">Nuevo</button></a></h4>
			<hr>
			@include('Productos.search')
		</div>
	</div>
	<!--<div class="panel panel-default">-->

	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Producto restaurado, desea restaurar otro producto eliminado <a href="/mproductosE"> Click aqui</a></div>
        @endif
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Código</th>
						<th>Nombre</th>
						<th>Fecha de Elaboracion</th>
						<th>Fecha de Caducidad</th>
						<th colspan="2"><center>Accion</center></th>
					</thead>
					@foreach($productos as $producto)
					<tr>
						<td>{{ $producto->id }}</td>
						<td>{{ $producto->Nombre }}</td>
						<td>{{ $producto->Fecha_Elab }}</td>
						<td>{{ $producto->Fecha_Cad }}</td>
						<td>
                        <center><a href="/editarproducto/{{ $producto->id }}" class="btn btn-primary btn-sm">Editar</a></center>
                        </td>
                        <td>
                        <form action="/eliminarproducto/{{ $producto->id }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <center><button type="button" class="btn btn-danger btn-sm btn-sm btn-delete">Eliminar</button></center>
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
    	if(confirm('¿Esta seguro de eliminar el Producto?')){
    		$(this).parents('form:first').submit();
    	}
    });
   </script>
@endsection