<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factura extends Model
{
    use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = ['Fecha','Hora','cliente_id','producto_id','Cantidad','Precio'];

public function cliente(){

	return $this->belongsTo(Cliente::Class);
  }

public function producto(){

	return $this->belongsTo(Producto::Class);
  }
}
