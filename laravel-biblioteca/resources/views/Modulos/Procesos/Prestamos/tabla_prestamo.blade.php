@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Préstamos')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Lista Préstamos</h5>
                <!-- Botones alineados al lado derecho -->
                <div class="d-flex gap-2 ms-auto">
                    <!-- Botón Agregar -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i> Agregar
                    </button>

                    <!-- Botón Imprimir -->
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-prestamos')}}">
                        <i class="bi bi-printer"></i> Imprimir
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="align-middle">
                            <th>#</th>
                            <th>ID Préstamo</th>
                            <th>ID Usuario</th>
                            <th>Responsable</th>
                            <th>Material</th>
                            <th>Tipo de Préstamo</th>
                            <th>Estado</th>
                            <th>Fecha Préstamo</th>
                            <th>Fecha Devolución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PR-001</td>
                            <td>USR-123</td>
                            <td>Juan Pérez</td>
                            <td>Libro de Física</td>
                            <td>Temporal</td>
                            <td>Activo</td>
                            <td>2024-12-01</td>
                            <td>2024-12-15</td>
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
                            <th>#</th>
                            <th>ID Préstamo</th>
                            <th>ID Usuario</th>
                            <th>Responsable</th>
                            <th>Material</th>
                            <th>Tipo de Préstamo</th>
                            <th>Estado</th>
                            <th>Fecha Préstamo</th>
                            <th>Fecha Devolución</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.TABLA-->

<!-- Modal para Agregar -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Agregar Préstamo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">ID Préstamo</span>
                                <input type="text" class="form-control" placeholder="Ingrese el ID">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">ID Usuario</span>
                                <input type="text" class="form-control" placeholder="Ingrese el ID del Usuario">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Responsable</span>
                                <input type="text" class="form-control" placeholder="Ingrese el nombre del responsable">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Material</span>
                                <input type="text" class="form-control" placeholder="Descripción del material">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Tipo de Préstamo</span>
                                <select class="form-control">
                                    <option>Temporal</option>
                                    <option>Permanente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Estado</span>
                                <select class="form-control">
                                    <option>Activo</option>
                                    <option>Completado</option>
                                    <option>Cancelado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Fecha Préstamo</span>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Fecha Devolución</span>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Editar -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Campo de ejemplo: Id del préstamo -->
                    <div class="mb-3">
                        <label for="idPrestamo" class="form-label">ID de Préstamo</label>
                        <input type="text" class="form-control" id="idPrestamo" placeholder="12345" readonly>
                    </div>

                    <!-- Ejemplo de otros campos -->
                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <input type="text" class="form-control" id="responsable" placeholder="Nombre del responsable">
                    </div>
                    <div class="mb-3">
                        <label for="material" class="form-label">Material</label>
                        <input type="text" class="form-control" id="material" placeholder="Descripción del material">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" id="estado">
                            <option value="pendiente">Pendiente</option>
                            <option value="completado">Completado</option>
                            <option value="cancelado">Cancelado</option>
                        </select>
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
                <p>¿Estás seguro de que deseas eliminar este registro? Esta acción no se puede deshacer.</p>
                <!-- Campo para mostrar el registro que se va a eliminar (opcional) -->
                <p><strong>ID del Préstamo:</strong> <span id="idPrestamoEliminar">12345</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection
