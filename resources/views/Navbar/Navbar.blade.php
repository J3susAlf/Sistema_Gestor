@extends('Roles.Administrador')
@section('Administrador')

<div class="container-fluid">
    <div class="card-header">

        <div class="container w-40 border p-4 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Lista de Solicitudes</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</button>
            </div>
            <!-- MODAL DE AGREGAR -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Requerimiento</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Requesicion No</label>
                                    <input type="text" class="form-control" name="Requesicion_No">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                                    <input type="text" class="form-control" name="Fecha">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" name="Descripcion">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Justificación</label>
                                    <input type="text" class="form-control" name="Justificacion">
                                </div>
                                <button type="submit" class="btn btn-primary" name="Ingresar">Ingresar</button>
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
                            <th scope="col">No</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Unidad</th>
                            <th scope="col">Descripción del Articulo</th>
                            <th scope="col">Justificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ejemplo 1</td>
                            <td>ejemplo Cantidad</td>
                            <td>Ejemplo Descripción</td>
                            <td>@Justificación</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Ejemplo 2</td>
                            <td>ejemplo Cantidad</td>
                            <td>Ejemplo Descripción</td>
                            <td>@Justificación</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ejemplo 3</td>
                            <td>ejemplo Cantidad</td>
                            <td>Ejemplo Descripción</td>
                            <td>@Justificación</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection