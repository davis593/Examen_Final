@extends('layouts.menu')

@section('title')

   Lista de Clientes

@endsection

@section ('contenidos')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h4>Listado de Clientes <a href="{{URL('/clientes')}}""><button class="btn btn-success btn-sm">Nuevo</button></a></h4>
			@include('Clientes.search')
		</div>
	</div>
	<!--<div class="panel panel-default">-->
	<div class="row">
		<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			@if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Cliente restaurado, desea restaurar otro cliente eliminado <a href="/mclientesE"> Click aqui</a></div>
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
						<th colspan="2"><center>Accion</center></th>
						
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
                        <a href="/editarcliente/{{ $cliente->id }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                        <form action="/eliminarcliente/{{ $cliente->id }}" method="POST">
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
    	if(confirm('¿Esta seguro de eliminar el Cliente?')){
    		$(this).parents('form:first').submit();
    	}
    });
   </script>
@endsection