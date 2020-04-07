@extends('layouts.app')

@section('title')
  Binenvenido a {{ config('app.name') }}
@endsection

@section('content')
  <!DOCTYPE html>
  <html>
  <head>
  </head>
  <body>
  <center><h1><b>Proforma Electronica<b></h1></center>
  <!--<div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mt-4"><b>Consultorio Medico</b></h1>
          <p>{{ " Hoy " . date("d") . "/" . date("m") . "/" . date("Y") }}</p>
          <hr>
          <center><h2 class="mt-4"><b>Dr. Pedro Suarez Onofre</b></h2></center>
          <center><h3 class="mt-4"><b>Medico Cirujano</b></h3></center>
          <center><h2 class="mt-4"><b>Enfermedades de Niños y Adultos</b></h2></center>
          <center><h3 class="mt-4"><b>Ecografias</b></h3></center>
          <hr>
          <center><h2 class="mt-4"><b>Horarios de Atención</b></h2></center>
          <center><h3 class="mt-4"><b>Lunes a Sábado:</b></h3></center>
          <center><h4 class="mt-4">08H00 a 12H00 - 14H00 a 17H00</h4></center>
          <center><h3 class="mt-4"><b>Domingo:</b></h3></center>
          <center><h4 class="mt-4">09H00 a 12H00</h4></center>
        </div>
      </div>
        <div class="row">
          <div class="col-md-5">
           <center><h4><b>Direccion:</b> Garcia Moreno #115 y Sucre</h4></center>
          </div>
          <div class="col-md-5">
          <h4><b>Móvil:</b> 0997834880</h4>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-8">
        <center><h4 class="mt-4"><b>Email:</b> peja_suaro@hotmail.com</h4></center>
        <center><h2 class="mt-4"><b>VINCES - LOS RIOS - ECUADOR</b></h2></center>
        </div>
        </div>
  </div>-->
   </body>
</html>
@endsection