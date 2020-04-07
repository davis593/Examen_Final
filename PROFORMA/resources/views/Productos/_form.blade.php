	<div class="form-group">
		<label>Nombre</label>
		<input class="form-control" name="Nombre" value="{{ old('Nombre', isset($producto) ? $producto->Nombre : '') }}" type="text" class="form-control" placeholder="Escriba nombre" required>
	</div>
	<div class="form-group">
		<label>Fecha de Elaboracion</label>
		<input class="form-control" type="date" value="{{ old('Precio', isset($producto) ? $producto->Fecha_Elab : '') }}" name="Fecha_Elab" class="form-control" placeholder="Escriba el precio" required>
	</div>
	<div class="form-group">
		<label>Fecha de Caducidad</label>
		<input class="form-control" type="date" value="{{ old('Fecha', isset($producto) ? $producto->Fecha_Cad : '') }}" name="Fecha_Cad" class="form-control" placeholder="Escriba la fecha">
	</div>
	<hr>


