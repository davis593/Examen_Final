    <div class="form-group">
		<label>Nombres</label>
		<input class="form-control" name="Nombres" value="{{ old('Nombres', isset($cliente) ? $cliente->Nombres : '') }}" type="text" class="form-control" placeholder="Escriba sus nombres" required>
	</div>
	<div class="form-group">
		<label>Apellidos</label>
		<input class="form-control" type="text" value="{{ old('Apellidos', isset($cliente) ? $cliente->Apellidos : '') }}" name="Apellidos" class="form-control" placeholder="Escriba sus apellidos" required>
	</div>
	<div class="form-group">
		<label>Cedula</label>
		<input class="form-control" type="text" value="{{ old('Cedula', isset($cliente) ? $cliente->Cedula : '') }}" name="Cedula" class="form-control" placeholder="Escriba la cedula" required>
	</div>
	<div class="form-group">
		<label>Direccion</label>
		<input class="form-control" type="text" value="{{ old('Direccion', isset($cliente) ? $cliente->Direccion : '') }}" name="Direccion" class="form-control" placeholder="Escriba la direccion" required>
	</div>
	<div class="form-group">
		<label>Telefono</label>
		<input class="form-control" type="text" name="Telefono" class="form-control" placeholder="Escriba el telefono" value="{{ old('Telefono', isset($cliente) ? $cliente->Telefono : '') }}" required>
	</div>
	<hr>
						