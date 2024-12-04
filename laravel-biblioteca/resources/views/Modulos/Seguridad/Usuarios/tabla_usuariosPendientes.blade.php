@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Usuarios Pendientes')
@section('PAG_GRUPO', 'Seguridad')
@section('content')


<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Usuarios Pendiente a confirmarse</h5>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Nombre Usuario</th>
                                <th>Rol</th>
                                <th>Centro Regional</th>
                                <th>Correo</th>
                                <th>contraseña</th>
                                <th>Codigo Primer ingreso</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Nombre Usuario</td>
                                <td>Rol</td>
                                <td>Centro Regional</td>
                                <td>Correo</td>
                                <td>contraseña</td>
                                <td>Codigo Primer ingreso</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn_aceptar" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pen-fill">     confirmar  </i>
                                        </button>
                                        <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash3-fill">  rechazar </i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Nombre Usuario</th>
                                <th>Rol</th>
                                <th>Centro Regional</th>
                                <th>Correo</th>
                                <th>contraseña</th>
                                <th>Codigo Primer ingreso</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
</div>
<!--/.TABLA-->




    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Aceptar Usuario</h5>
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
                            <input type="text" class="form-control" id="autor" value="" disabled>
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
                            <input type="text" class="form-control" id="isbn" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="isbn" value="" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">Codigo Primer Ingreso</label>
                            <input type="text" class="form-control" id="isbn" value="" disabled>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal para Eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Rechazar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas Rechazar este usuario? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">rechazar</button>
            </div>
        </div>
    </div>
</div>


@endsection

