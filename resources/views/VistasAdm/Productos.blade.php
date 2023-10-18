@extends('Roles.Administrador')
@section('Administrador')

<div class="container-fluid">
    <div class="card-header">
        <div class="container w-40 border p-4 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Productos En Stock</h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</button>
            </div>
            <!-- MODAL DE AGREGAR -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i>Agregar Producto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-5">
                            <form class="row g-3" method="POST" action="{{route('Productos')}}">
                                @csrf
                                <div class="col-md-4">
                                    <label class="form-label">Nombre</label>
                                    <input type="text" name="Nombre" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Cantidad</label>
                                    <input type="number" name="Cantidad" class="form-control" required>
                                </div>

                                
                                <div class="col-md-4">
                                    <label class="form-label">Unidad</label>
                                    <select class="form-select" name="Unidad" required>
                                        <option selected>Seleccionar Unidad..</option>
                                        <option value="PZAS">PZAS</option>
                                        <option value="CAJONES">CAJONES</option>
                                        <option value="PAQUETES">PAQUETES</option>
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
            <!--FINAL DEL MODAL-->
            <hr>
            <div class="card-body">
                <table class="table table-striped table-bordered mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Unidades</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($productos as $producto )
                        <tr>  
                            <td>{{$producto->Id_Productos}}</td>
                            <td>{{$producto->Nombre}}</td>
                            <td>{{$producto->Cantidad}}</td>
                            <td>{{$producto->Unidad}}</td>
                            <td>Editar</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection