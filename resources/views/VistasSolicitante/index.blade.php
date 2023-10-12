@extends('Roles.Solicitante')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<div class="container-fluid">
  <div class="card-header">
    <div class="container w-40 border p-4 mt-3">
      <div class="row">
        <div class="col-md-3">
          <label class="label Fecha"><Strong>Fecha:</Strong></label>
          <h4 class="Hora col-md-10" id="fecha"></h4>
        </div>
        <div class="col-md-3">
          <label class="label"><Strong>Area:</Strong></label>
          <input class="Requesicion col-md-10" type="text" name="Area" class="form-control" disabled>
        </div>
        <div class="col-md-3">
          <label class="label"><Strong>Requesicion No.</Strong></label>
          <input class="Requesicion col-md-8" type="text" id="Requesicion" name="Requesicion_No" class="form-control" disabled>
        </div>
        <div class="col-md-3">
          <label class="label form-label"><strong>Empresa</strong></label>
          <select class="form-select" name="Empresa" required>
            <option selected>SELECCIONAR...</option>
            @foreach ($solicitudes as $solicitud)
            <option value="{{ $solicitud->Id_Empresa }}">{{ $solicitud->Nombre }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-10 p-2">
          <label class="label"><Strong>Justificación</Strong></label>
          <input class="Requesicion col-md-12" type="text" name="Justificacion" class="form-control"  oninput="this.value = this.value.toUpperCase()">
        </div>
      </div>

      <hr>
      <!--<div class="d-flex justify-content-between align-items-center">
        <h4 class="Titulo card-title"><Strong>Solicitar Requerimiento</Strong></h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</button>
      </div>
       MODAL DE AGREGAR 
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="Titulo modal-title fs-5" id="staticBackdropLabel">Solicitud de Requerimiento</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
              <form class="row g-3" method="POST" action="{{route('Registro')}}">
                @csrf

                <div class="col-md-3">
                  <label class="label form-label"><strong>Cantidad</strong></label>
                  <input type="number" name="Cantidad" class="form-control" required oninput="this.value = this.value.toUpperCase()">
                </div>
                <div class="col-md-4">
                  <label class="label form-label"><strong>Unidad</strong></label>
                  <select class="form-select" name="Unidad" required>
                    <option selected>SELECCIONAR..</option>
                    <option value="PIEZAS">PIEZAS</option>
                    <option value="CAJONES">CAJONES</option>
                    <option value="PAQUETES">PAQUETES</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label class="label form-label"><strong>Descripción</strong></label>
                  <input type="text" name="Descripcion" class="form-control" required oninput="this.value = this.value.toUpperCase()">
                </div>
                <div class="col-md-12">
                  <label class="label form-label"><strong>Justificación</strong></label>
                  <input type="text" name="Justificacion" min="0" class="form-control" required oninput="this.value = this.value.toUpperCase()">
                </div>
                <div class="col-12">
                  <button class="btn btn-primary btn-lg" type="submit" name="Ingresar"> Agregar</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
      FINAL DEL MODAL-->

      <div class="card-body">
        <table class="table table-striped table-bordered mt-3">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">CANTIDAD</th>
              <th scope="col">UNIDAD</th>
              <th scope="col">DESCRIPCION DEL ARTICULO</th>
              <th scope="col">ACCIONES</th>
            </tr>
          </thead>
          <tbody id="dynamic-table-body">
            <!-- Filas dinámicas se agregarán aquí -->
          </tbody>
        </table>
        <button class="btn btn-primary" onclick="addRow()">Agregar Fila</button>
        <button class="btn btn-success" onclick="saveData()" name="Ingresar">Guardar Datos</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>

@endsection