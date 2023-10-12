@extends('Roles.Administrador')
@section('Administrador')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b1b47db464.js" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container-fluid">
    <div class="card-header">
      <div class="container w-40 border p-4 mt-3">
        <div class="d-flex justify-content-between align-items-center">
          <h4 class="card-title">Registro de Solicitantes</h4>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</button>
        </div>
        <!-- MODAL DE AGREGAR -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Solicitante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body p-5">
                <form class="row g-3" method="POST" action="{{route('Registro')}}">
                  @csrf
                  <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="Nombre" class="form-control" required>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="Apellido" class="form-control" required>
                  </div>

                  <div class="col-md-4">
                    <label class="form-label">Telefono</label>
                    <input type="number" name="Telefono" min="0" class="form-control" required>
                  </div>
                  <div class="col-md-5">
                    <label class="form-label">Correo</label>
                    <div class="input-group">
                      <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      <input type="text" name="Correo" class="form-control" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Contraseña</label>
                    <input type="text" name="Contrasena" class="form-control" required>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label">Area</label>
                    <select class="form-select" name="Area" required>
                      <option selected>Seleccionar Area..</option>

                     
                      <!-- Agrega más opciones según sea necesario -->
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label class="form-label">Asignar Rol</label>
                    <select class="form-select" name="Rol" required>
                      <option selected>Seleccionar Rol..</option>

                    </select>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="Ingresar"> Agregar</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card-body">
          <table class="table table-striped mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Area</th>
                <th scope="col">Rol</th>
              </tr>
            </thead>
            <tbody>
              @foreach($areas as $area)
              <tr>
                <td>{{ $area->Id_Solicitante }}</td>
                <td>{{ $area->Nombre }}</td>
                <td>{{ $area->Apellido }}</td>
                <td>{{ $area->Telefono }}</td>
                <td>{{ $area->Correo }}</td>
                <td>{{ $area->Contrasena }}</td>
                <td>{{ $area->Id_Area }}</td>
                <td>{{ $area->Id_Rol }}</td>

              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>

@endsection