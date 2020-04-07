<div class="form-group">
		<label>Fecha de Compra</label>
		<input class="form-control" name="Fecha" value="{{ old('Fecha', date('Y-m-d')) }}" type="date" class="form-control" required>
	</div>
	<div class="form-group">
			<label>Hora de Compra</label>
			<input class="form-control" name="Hora" value="{{ old('Hora', date('H:i')) }}" type="time" class="form-control" required>
		</div>
	<div class="form-group">
		<label>Cliente</label>
		<select class="form-control" name="cliente_id" value="{{old('cliente_id')}}">
			<option value="">==Ninguno==</option>
			@foreach($clientes as $cliente)
			<option value="{{ $cliente->id }}">{{ $cliente->Nombres }} {{ $cliente->Apellidos }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Producto</label>
		<select class="form-control" name="producto_id" value="{{old('producto_id')}}">
			<option value="">==Ninguno==</option>
			@foreach($productos as $producto)
			<option value="{{ $producto->id }}">{{ $producto->Nombre }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Cantidad</label>
		<input class="form-control" name="Cantidad" value="{{old('Cantidad')}}" type="number" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Precio</label>
		<input class="form-control" name="Precio" value="{{old('Precio')}}" type="text" class="form-control" required>
	</div>
	<hr>
