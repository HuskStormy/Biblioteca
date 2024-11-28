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
                    <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i>
                    </button>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Id</label>
                            <input type="text" class="form-control" id="titulo" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="autor" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="autor" value="">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="isbn" value="">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">rol</label>
                            <input type="text" class="form-control" id="isbn" value="">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">CentroReginal</label>
                            <input type="text" class="form-control" id="isbn" value="">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="isbn" value="">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">contraseña</label>
                            <input type="text" class="form-control" id="isbn" value="">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">Codigo Primer Ingreso</label>
                            <input type="text" class="form-control" id="isbn" value="">
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Id</label>
                        <input type="text" class="form-control" id="titulo" value="" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="autor" value="">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">Estado</label>
                        <input type="text" class="form-control" id="isbn" value="">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">rol</label>
                        <input type="text" class="form-control" id="isbn" value="">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">CentroReginal</label>
                        <input type="text" class="form-control" id="isbn" value="">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">Correo</label>
                        <input type="text" class="form-control" id="isbn" value="">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">contraseña</label>
                        <input type="text" class="form-control" id="isbn" value="">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">Codigo Primer Ingreso</label>
                        <input type="text" class="form-control" id="isbn" value="">
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

