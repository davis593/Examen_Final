<form action="/productos/search" method="POST" class="form-inline">
	{{ csrf_field() }}
    <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" class="form-control" name = "Nombre" >
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>