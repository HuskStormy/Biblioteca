@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Gestión de Solvencias')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Gestión de Solvencias</h5>
                <!-- Botones alineados al lado derecho -->
                <div class="d-flex gap-2 ms-auto">
                    <!-- Botón Agregar -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i> Agregar
                    </button>

                    <!-- Botón Imprimir -->
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-solvencias')}}">
                        <i class="bi bi-printer"></i> Imprimir
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="align-middle">
                            <th>#</th>
                            <th>ID de Solvencia</th>
                            <th>Usuario</th>
                            <th>Responsable</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>SV-001</td>
                            <td>USR-123</td>
                            <td>Juan Pérez</td>
                            <td>Activo</td>
                            <td>2024-12-01</td>
                            <td>
                                <div class="button-group">
                                    <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pen-fill"> Editar </i>
                                    </button>
                                    <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash3-fill"> Eliminar </i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="align-middle">
                            <th>#</th>
                            <th>ID de Solvencia</th>
                            <th>Usuario</th>
                            <th>Responsable</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
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
                <h5 class="modal-title" id="addModalLabel">Agregar Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">ID de Solvencia</span>
                                <input type="text" class="form-control" placeholder="Ingrese el ID">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Usuario</span>
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
                                <span class="input-group-text">Estado</span>
                                <select class="form-control">
                                    <option>Activo</option>
                                    <option>Cancelado</option>
                                    <option>Finalizado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Fecha de Creación</span>
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
                <h5 class="modal-title" id="editModalLabel">Editar Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="idSolvencia" class="form-label">ID de Solvencia</label>
                        <input type="text" class="form-control" id="idSolvencia" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <input type="text" class="form-control" id="responsable">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" id="estado">
                            <option>Activo</option>
                            <option>Cancelado</option>
                            <option>Finalizado</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fechaCreacion" class="form-label">Fecha de Creación</label>
                        <input type="date" class="form-control" id="fechaCreacion">
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
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar esta solvencia? Esta acción no se puede deshacer.</p>
                <p><strong>ID de Solvencia:</strong> <span id="idSolvenciaEliminar"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection
