@extends('layouts.menu')

@section('title')

     Crear nuevo Producto 
     
@endsection

@section('contenidos')
     <div class="panel panel-default">
         <div class="panel-heading"><label>Procesar Datos del Producto</label></div>
		     <div class="panel-body">
                 <form action="{{URL('/ingproducto')}}" method="POST" role="form">
			             {{ csrf_field() }}

                     @include('Productos._form')
                     <div class="form-group">	
                         <button type="submit" class="btn btn-primary">Guardar Datos</button>
                     </div>			
                 </form>
             </div>
     </div><!-- /.panel--> 
@endsection