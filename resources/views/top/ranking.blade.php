@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
	<div class="container margenSup fuenteTitulo" style="font-size: 20px">
		<div class="row">

			<div class="col-md-2"></div>
			
			<div class="col-md-8 colorBlanco divOpaco">
				<table class="table">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Usuario</th>
				      <th>Puntuacion</th>
				      <th>Cantidad de criminales capturados</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td></td>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td></td>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td></td>
				      <td></td>
				      <td></td>
				    </tr>
				  </tbody>
				</table>
				<div class="text-center margenInf"><a href="{{asset('inicio')}}" class="btn btn-danger boton margenInf">Volver</div></a> 
			</div>

			<div class="col-md-2"></div>

		</div>
	</div>
@endsection