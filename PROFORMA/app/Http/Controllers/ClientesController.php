<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
     public function index(){

        $clientes = Cliente::all();
 
        return view('Clientes.index', compact('clientes'));
    }

    public function search(Request $request){
        
         $clientes = Cliente::where('Nombres','like','%'.$request->Nombres.'%')->get();
         return View('Clientes.index', compact('clientes'));
    }

    public function create(){

    	return view('Clientes.create');
    }

    public function store(Cliente $request){

    	Cliente::create(request()->all());

        return redirect('/mclientes');
    } 

    public function edit(Cliente $cliente){
 
        return view('Clientes.edit', compact('cliente'));
    }

    public function update(Cliente $cliente){

        $cliente->update(request()->all());

        return redirect('/mclientes');
    }

    public function destroy($id){

         $cliente = Cliente::find($id);

         $cliente->delete();

         return redirect('/mclientesE')->with("deleted" , $id );
    }

    public function only(){

        $clientes = Cliente::onlyTrashed()->get();
 
        return view('Clientes.only', compact('clientes'));
    }

    public function restore($id){

        $cliente = Cliente::withTrashed()->findOrFail($id)->restore();

        return redirect('/mclientes')->with("restored" , $id );
    }
}
