<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

     public function index(){

        $productos = Producto::all();

        return view('Productos.index', compact('productos'));
    }

     public function search(Request $request){

         $productos = Producto::where('Nombre','like','%'.$request->Nombre.'%')->get();
         return View('Productos.index', compact('productos'));

    }

    public function create(){

    	return view('Productos.create');
    }

    public function store(Producto $request){

    	Producto::create(request()->all());

        return redirect('/mproductos');
    }

    public function edit(Producto $producto){

        return view('Productos.edit', compact('producto'));
    }

    public function update(Producto $producto){

         $producto->update(request()->all());

        return redirect('/mproductos');
    }

    public function destroy($id){

         $producto = Producto::find($id);

         $producto->delete();

         return redirect('/mproductosE')->with("deleted" , $id );
    }

    public function only(){

        $productos = Producto::onlyTrashed()->get();

        return view('Productos.only', compact('productos'));
    }

    public function restore($id){

        $producto = Producto::withTrashed()->findOrFail($id)->restore();

        return redirect('/mproductos')->with("restored" , $id );
    }
}
