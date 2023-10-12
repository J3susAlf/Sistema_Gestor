@extends('Roles.Administrador')
@section('Administrador')
<div class="container w-40 border p-4 mt-3">
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nombre Solicitante</th>
        <th scope="col">Requesicion No</th>
        <th scope="col">Fecha</th>
        <th scope="col">Descripción del Articulo</th>
        <th scope="col">Justificación</th>
        <th scope="col">Estatus</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Musk</td>
        <td>ejemplo 123/2023</td>
        <td>Fecha</td>
        <td>Descripción del producto solicitado</td>
        <td>Justificación</td>
        <td>
          <!-- <label for="status" class="control-label"><strong>Estado</strong></label>
          <br> -->
          <button class="btn btn-success"><span class="py-2 px-4 btn-flat btn-success">Ejemplo</span></button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Elon</td>
        <td>ejemplo 123/2023</td>
        <td>Fecha</td>
        <td>Descripción del producto solicitado</td>
        <td>Justificación</td>
       
        <td>
          <!-- <label for="status" class="control-label"><strong>Estado</strong></label>
          <br> -->
          <button class="btn btn-success"><span class="py-2 px-4 btn-flat btn-success">Ejemplo</span></button>
        </td>
        
    </tbody>
  </table>
  <div class="row mt-5">
    <div class="col-6">
      <label for="notes" class="control-label"><strong>Comentario</strong></label>
      <p>Ejemplo del comentario</p>
    </div>
   <!--  <div class="col-6">
      <label for="status" class="control-label"><strong>Estado</strong></label>
      <br>
      <button class="btn btn-success"><span class="py-2 px-4 btn-flat btn-success">Ejemplo</span></button>
    </div> -->
  </div>
</div>
@endsection