@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Usuarios')
@section('PAG_GRUPO', 'Seguridad')
@section('content')



<!--TABLA-->
    <div class="card-group">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Usuarios</h5>
                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">
                        <!-- Botón Agregar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </button>

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
                </div>
                <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Nombre Usuario</th>
                                    <th>Estado</th>
                                    <th>Rol</th>
                                    <th>Centro Regional</th>
                                    <th>Correo</th>
                                    <th>contraseña</th>
                                    <th>Fecha Ultima coneccion</th>
                                    <th>Codigo Primer ingreso</th>
                                    <th>fecha vencimiento</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>n°</th>
                                    <td>Nombre Usuario</td>
                                    <td>Estado</td>
                                    <td>Rol</td>
                                    <td>Centro Regional</td>
                                    <td>Correo</td>
                                    <td>contraseña</td>
                                    <td>Fecha Ultima coneccion</td>
                                    <td>Codigo Primer ingreso</td>
                                    <td>fecha vencimiento</td>
                                    <td>
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                                <i class="bi bi-pen-fill">     Editar   </i>
                                            </button>
                                            <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                <i class="bi bi-trash3-fill">  Eliminar </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Nombre Usuario</th>
                                    <th>Estado</th>
                                    <th>Rol</th>
                                    <th>Centro Regional</th>
                                    <th>Correo</th>
                                    <th>contraseña</th>
                                    <th>Fecha Ultima coneccion</th>
                                    <th>Codigo Primer ingreso</th>
                                    <th>fecha vencimiento</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                        </table>

                </div>
            </div>
        </div>
    </div>
<!--/.TABLA-->


    <!-- Modal para Agregar -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Crear Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-2">
                                <img src="{{asset('dist/img/default-150x150.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150px" height="150px">
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <label for="titulo" class="form-label">Datos Personales</label>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Apellido</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">RTN</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <label for="titulo" class="form-label">Datos de Usuario</label>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"> <span class="input-group-text">Usuario</span></div>
                                    <input type="text" class="form-control" placeholder="Texto">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"> <span class="input-group-text">Correo</span></div>
                                    <input type="text" class="form-control" placeholder="Texto">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"> <span class="input-group-text">Contraseña</span></div>
                                    <input type="text" class="form-control" placeholder="Texto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="titulo" class="form-label">Registro</label>
                            <div class="col-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Estado</span>
                                    <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rol</span>
                                    <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"> <span class="input-group-text">Codigo Primer Ingreso</span></div>
                                    <input type="text" class="form-control" placeholder="Texto">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Centro Regional</span>
                                    <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
</div>


    <!-- Modal para Editar -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-2">
                            <img src="{{asset('dist/img/default-150x150.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150px" height="150px">
                        </div>
                        <div class="col-10">
                            <div class="row">
                                <label for="titulo" class="form-label">Datos Personales</label>
                                <div class="col-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Id</span></div>
                                        <input type="text" class="form-control" placeholder="Texto" disabled>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                        <input type="text" class="form-control" placeholder="Texto">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">Apellido</span></div>
                                        <input type="text" class="form-control" placeholder="Texto">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"> <span class="input-group-text">RTN</span></div>
                                        <input type="text" class="form-control" placeholder="Texto">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <label for="titulo" class="form-label">Datos de Usuario</label>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">Usuario</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">Correo</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">Contraseña</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label for="titulo" class="form-label">Registro</label>
                        <div class="col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Estado</span>
                                <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rol</span>
                                <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">Codigo Primer Ingreso</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Centro Regional</span>
                                <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este registro? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>






@endsection

