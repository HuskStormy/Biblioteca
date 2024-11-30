@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Gestión de Solvencias')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<!-- TABLA -->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Listado de Solvencias</h5>
            </div>

            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="align-middle">
                            <th>#</th>
                            <th>ID Solvencia</th>
                            <th>Usuario</th>
                            <th>Responsable</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Datos de prueba -->
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>SOLV-{{ 1000 + $i }}</td>
                                <td>Usuario {{ $i }}</td>
                                <td>Responsable {{ $i }}</td>
                                <td>{{ $i % 2 == 0 ? 'Activo' : 'Pendiente' }}</td>
                                <td>{{ now()->subDays($i)->format('Y-m-d') }}</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn btn-warning btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal" 
                                            data-id="SOLV-{{ 1000 + $i }}">
                                            <i class="bi bi-pen-fill"></i> Editar
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#deleteModal" 
                                            data-id="SOLV-{{ 1000 + $i }}">
                                            <i class="bi bi-trash3-fill"></i> Eliminar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr class="align-middle">
                            <th>#</th>
                            <th>ID Solvencia</th>
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
<!-- /.TABLA -->

<!-- Modal para Editar -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="id_solvencia" class="form-label">ID Solvencia</label>
                        <input type="text" class="form-control" id="id_solvencia" value="SOLV-1001" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" value="Usuario 1">
                    </div>
                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <input type="text" class="form-control" id="responsable" value="Responsable 1">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" id="estado">
                            <option value="Activo">Activo</option>
                            <option value="Pendiente">Pendiente</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha de Creación</label>
                        <input type="text" class="form-control" id="fecha" value="{{ now()->format('Y-m-d') }}" disabled>
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
                ¿Estás seguro de que deseas eliminar esta solvencia? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection
