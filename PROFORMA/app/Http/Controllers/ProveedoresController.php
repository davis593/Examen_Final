<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index(){

        $proveedores = Proveedor::all();
 
        return view('Proveedores.index', compact('proveedores'));
    }

     public function search(Request $request){
        
         $proveedores = Proveedor::where('Nombres','like','%'.$request->Nombres.'%')->get();
         return View('Proveedores.index', compact('proveedores'));

    }

    public function create(){

    	return view('Proveedores.create');
    }

    public function store(Proveedor $request){

    	Proveedor::create(request()->all());

        return redirect('/mproveedores');
    } 

    public function edit(Proveedor $proveedor){
 
        return view('Proveedores.edit', compact('proveedor'));
    }

    public function update(Proveedor $proveedor){

        $proveedor->update(request()->all());

        return redirect('/mproveedores');

    }

    public function destroy($id){

         $proveedor = Proveedor::find($id);

         $proveedor->delete();

         return redirect('/mproveedoresE')->with("deleted" , $id );;
    }

    public function only(){

        $proveedores = Proveedor::onlyTrashed()->get();
 
        return view('Proveedores.only', compact('proveedores'));
    }

    public function restore($id){

        $proveedor = Proveedor::withTrashed()->findOrFail($id)->restore();

        return redirect('/mproveedores')->with("restored" , $id );
    }
}
