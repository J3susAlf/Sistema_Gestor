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
          <input id="Area" class="Requesicion col-md-10" type="text" name="Area" class="form-control" disabled>
        </div>
        <div class="col-md-3">
          <label class="label"><Strong>Requesicion No.</Strong></label>
          <input id="Requesicion" class="Requesicion col-md-8" type="text" id="Requesicion" name="Requesicion_No" class="form-control" disabled>
        </div>
        <div class="col-md-3">
          <label class="label form-label"><strong>Empresa</strong></label>
          <select id="Empresa" class="form-select" name="Empresa" required>
            <option selected>SELECCIONAR...</option>
            @foreach ($solicitudes as $solicitud)
            <option value="{{ $solicitud->Id_Empresa }}">{{ $solicitud->Nombre }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-10 p-2">
          <label class="label"><Strong>Justificación</Strong></label>
          <input id="Justificacion" class="Requesicion col-md-12" type="text" name="Justificacion" class="form-control" oninput="this.value = this.value.toUpperCase()">
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
<script>
  let dataRows = 1; // Inicializa con una fila de datos

  function addRow() {
    const tableBody = document.querySelector("#dynamic-table-body");
    const newRow = document.createElement("tr");
    newRow.innerHTML = `
      <th scope="row">${dataRows}</th>
      <td><input type="number" name="Cantidad[]" class="form-control"></td>
      <td>
        <select class="form-control" name="Unidad[]" >
        <option selected>SELECCIONAR...</option>
          <option value="PZAS">PZAS</option>
          <option value="CAJON">CAJON</option>
          <option value="PAQUETE">PAQUETE</option>  
        </select>
      </td>
      <td><input type="text" name="Descripcion[]" class="form-control" oninput="this.value = this.value.toUpperCase()"></td>
     
      <td><button class="btn btn-danger" onclick="removeRow(this)">Eliminar</button></td>
    `;
    tableBody.appendChild(newRow);
    dataRows++;

    // Agregar valores a los arrays en el objeto 'data'
    const cells = newRow.querySelectorAll("td input, td select");
    const rowData = Array.from(cells).map((cell) => {
      if (cell.tagName === "SELECT") {
        return cell.options[cell.selectedIndex].text;
      }
      return cell.value;
    });

    data.Cantidad.push(rowData[0]);
    data.Unidad.push(rowData[1]);
    data.Descripcion.push(rowData[2]);
  }

  function removeRow(button) {
    const row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }

  function saveDataToServer(data) {
    const jsonData = JSON.stringify(data);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/guardar-datos", true); // Ruta de Laravel para guardar datos
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("Datos guardados exitosamente en el servidor.");
      }
    };

    xhr.send(jsonData);
  }

  function saveData() {
    const tableRows = document.querySelectorAll("#dynamic-table-body tr");

    const data = {
      _token: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"), // Agregar el token CSRF
      Area: document.getElementById('Area').value,
      Requesicion_No: document.getElementById('Requesicion').value,
      Justificacion: document.getElementById('Justificacion').value,
      Id_Empresa: document.getElementById('Empresa').value,

      dynamicData: [],
    };

    tableRows.forEach((row) => {
      const cells = row.querySelectorAll("td input, td select");
      const rowData = Array.from(cells).map((cell) => {
        if (cell.tagName === "SELECT") {
          return cell.options[cell.selectedIndex].text;
        }
        return cell.value;
      });
      data.dynamicData.push(rowData);
    });

    // Envía los datos al servidor
    saveDataToServer(data);
  }
</script>

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>

@endsection