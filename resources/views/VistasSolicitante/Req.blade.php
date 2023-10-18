@extends('Roles.Solicitante')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<div class="container-fluid">
  <div class="card-header ">
    <div class="container w-40 border p-4 mt-3 border border-dark border-1">
      <div class="d-flex justify-content-between align-items-center">
        <h4 class="Titulo card-title"><Strong>Solicitar Requerimiento</Strong></h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</button>
      </div>
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="Titulo modal-title fs-5" id="staticBackdropLabel">Solicitud de Requerimiento</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
              <form class="row g-3" method="POST" action="">
                @csrf
                <div class="row g-3">
                  <div class="col-md-4">
                    <label class="label Fecha"><strong>Fecha:</strong></label>
                    <h4 class="Hora" id="fecha"></h4>
                  </div>
                  <div class="col-md-4">
                    <label class="label"><strong>Área</strong></label>
                    <input class="Requesicion form-control border-success" type="text" disabled>
                  </div>
                  <div class="col-md-4">
                    <label class="label"><strong>Requisición No.</strong></label>
                    <input id="Requesicion" class="Requesicion form-control border-success" type="text" name="Requesicion_No" disabled>
                  </div>
                  <div class="col-md-12">
                    <label class="label"><strong>Descripción General</strong></label>
                    <textarea id="Descripción_General" class="Requesicion form-control  border-success" name="Descripción_General" type="text" oninput="this.value = this.value.toUpperCase()" rows="3"></textarea>
                  </div>
                  <div class="col-md-12">
                    <label class="label"><strong>Justificación</strong></label>
                    <textarea id="Justificacion" class="Requesicion form-control  border-success" name="Justificacion" type="text" oninput="this.value = this.value.toUpperCase()" rows="3"></textarea>
                  </div>
                </div>
              </form>
              <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            </div>

          </div>
        </div>
      </div>
      <hr>
      <div class="card-body">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">REQUESICION_NO</th>
              <th scope="col">FECHA</th>
              <th scope="col">DESCRIPCION GENERAL</th>
              <th scope="col">JUSTIFICACION</th>
              <th scope="col">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection