@extends('Roles.Solicitante')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<div class="container-fluid">

  <div class="card-header ">
    <div class="container w-40 border p-4 mt-3 border border-dark border-1">
      <form method="POST" action="/guardar-datos">
        @csrf
        <div class="row g-3">
          <div class="col-md-4">
            <label class="label Fecha"><strong>Fecha:</strong></label>
            <h4 class="Hora" id="fecha"></h4>
          </div>
          <div class="col-md-4">
            <label class="label"><strong>Área:</strong></label>
            <input class="Requesicion form-control border-success" type="text" placeholder="EJEMPLO DE AREA" disabled>
          </div>
          <div class="col-md-4">
            <label class="label"><strong>Requisición No.</strong></label>
            <input id="Requesicion" class="Requesicion form-control border-success" type="text" name="Requesicion_No" disabled>
          </div>

          <div class="col-md-12">
            <label class="label"><strong>Descripción General</strong></label>
            <textarea  class="Requesicion form-control  border-success" type="text" placeholder="DESCRIPCION DE EJEMPLO" disabled></textarea>
          </div>
          <div class="col-md-12">
            <label class="label"><strong>Justificación</strong></label>
            <textarea class="Requesicion form-control  border-success" type="text" placeholder="JUSTIFICACION DE EJEMPLO"  disabled></textarea>
          </div>
        </div>
        <hr>
        <div class="card-body">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>CANTIDAD</th>
                <th>UNIDAD</th>
                <th>DESCRIPCION DEL ARTICULO</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody id="dynamic-fields">
              <tr class="field">
                <td>1</td>
                <td><input type="number" name="quantities[]" class="form-control border-success" required></td>
                <td>
                  <select name="unidads[]" class="form-select border-success" required>
                    <option selected>SELECCIONAR..</option>
                    <option value="PIEZAS">PIEZAS</option>
                    <option value="CAJON">CAJON</option>
                    <option value="PAQUETES">PAQUETES</option>
                  </select>
                </td>
                <td>
                  <input type="text" name="descriptions[]" class="form-control border-success" oninput="this.value = this.value.toUpperCase()" required>
                </td>
                <td>

                </td>
              </tr>
            </tbody>
          </table>
          <button type="button" id="add-field" class="btn btn-primary">Agregar Campo</button>
          <button type="submit" class="btn btn-warning">Enviar</button>
          <button type="" class="btn btn-danger">Cancelar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>

@endsection