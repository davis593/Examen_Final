<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Cliente;
use App\Producto;
use Illuminate\Http\Request;
use PDF;

class FacturasController extends Controller
{
    public function index(){

        $facturas = Factura::all();

        return view('Facturas.index', compact('facturas'));
    }

    public function search(Request $request){

         $facturas = Factura::where('Nombre','like','%'.$request->Nombre.'%')->get();
         return View('Facturas.index', compact('facturas'));
    }

    public function create(){

        $clientes = Cliente::all();
        $productos = Producto::all();

    	return view('Facturas.create', compact('clientes', 'productos'));
    }

    public function store(Factura $request){

    	Factura::create(request()->all());

        return redirect('/mfactura');
    }

    public function destroy($id){

         $factura = Factura::find($id);

         $factura->delete();

         return redirect('/mfacturasE')->with("deleted" , $id );
    }

    public function only(){

        $facturas = Factura::onlyTrashed()->get();

        return view('Facturas.only', compact('facturas'));
    }

    public function restore($id){

        $factura = Factura::withTrashed()->findOrFail($id)->restore();

        return redirect('/mfactura')->with("restored" , $id );
    }

    public function verpdf($id){

      $factura = Factura::find($id);

      $pdf = PDF::loadView('Pdf.pdf', compact('factura'));

      return $pdf->stream('factura.pdf');
    }

    public function pdf($id){

      $factura = Factura::find($id);

      $pdf = PDF::loadView('Pdf.pdf', compact('factura'));

      return $pdf->download('factura.pdf');
    }
}
