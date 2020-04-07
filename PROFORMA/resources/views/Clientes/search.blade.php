<form action="/clientes/search" method="POST" class="form-inline">
	{{ csrf_field() }}
    <div class="form-group">
                <label for="">Nombres</label>
                <input type="text" class="form-control" name = "Nombres" >
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>