    <div class="form-group">
		<label>Nombres</label>
		<input class="form-control" name="Nombres" value="{{ old('Nombres', isset($proveedor) ? $proveedor->Nombres : '') }}" type="text" placeholder="Escriba sus nombres" required>
	</div>
	<div class="form-group">
		<label>Apellidos</label>
		<input class="form-control" type="text" value="{{ old('Apellidos', isset($proveedor) ? $proveedor->Apellidos : '') }}" name="Apellidos" placeholder="Escriba sus apellidos" required>
	</div>
	<div class="form-group">
		<label>Cedula</label>
		<input class="form-control" type="text" value="{{ old('Cedula', isset($proveedor) ? $proveedor->Cedula : '') }}" name="Cedula" placeholder="Escriba la cedula" required>
	</div>
	<div class="form-group">
		<label>Elija el Sexo</label><br>
		         <label for="radio1" class="radio-inline">
		             <input type="radio" value="Hombre" name="Sexo">Hombre
		         </label>
		         <label for="radio2" class="radio-inline">
		             <input type="radio" value="Mujer" name="Sexo">Mujer
	             </label>
	</div>
	<div class="form-group">
		<label>Direccion</label>
		<input class="form-control" type="text" value="{{ old('Direccion', isset($proveedor) ? $proveedor->Direccion : '') }}" name="Direccion" placeholder="Escriba la direccion" required>
	</div>
	<div class="form-group">
		<label>Telefono</label>
		<input class="form-control" type="text" name="Telefono" placeholder="Escriba el telefono" value="{{ old('Telefono', isset($proveedor) ? $proveedor->Telefono : '') }}" required>
	</div>
	<hr>
						