@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Gestión de Préstamos')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<!-- TABLA -->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Listado de Préstamos</h5>
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
                            <th>Fecha de Préstamo</th>
                            <th>Fecha de Devolución</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Datos de prueba -->
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>PREST-{{ 1000 + $i }}</td>
                                <td>Usuario {{ $i }}</td>
                                <td>Responsable {{ $i }}</td>
                                <td>Material {{ $i }}</td>
                                <td>{{ $i % 2 == 0 ? 'Temporal' : 'Permanente' }}</td>
                                <td>{{ $i % 2 == 0 ? 'Devuelto' : 'Pendiente' }}</td>
                                <td>{{ now()->subDays($i)->format('Y-m-d') }}</td>
                                <td>{{ now()->addDays($i)->format('Y-m-d') }}</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn btn-warning btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal" 
                                            data-id="PREST-{{ 1000 + $i }}">
                                            <i class="bi bi-pen-fill"></i> Editar
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#deleteModal" 
                                            data-id="PREST-{{ 1000 + $i }}">
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
                            <th>ID Préstamo</th>
                            <th>ID Usuario</th>
                            <th>Responsable</th>
                            <th>Material</th>
                            <th>Tipo de Préstamo</th>
                            <th>Estado</th>
                            <th>Fecha de Préstamo</th>
                            <th>Fecha de Devolución</th>
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
                <h5 class="modal-title" id="editModalLabel">Editar Préstamo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="id_prestamo" class="form-label">ID Préstamo</label>
                        <input type="text" class="form-control" id="id_prestamo" value="PREST-1001" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" value="Usuario 1" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <input type="text" class="form-control" id="responsable" value="Responsable 1" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="material" class="form-label">Material</label>
                        <input type="text" class="form-control" id="material" value="Material 1">
                    </div>
                    <div class="mb-3">
                        <label for="tipo_prestamo" class="form-label">Tipo de Préstamo</label>
                        <select class="form-control" id="tipo_prestamo">
                            <option value="Temporal">Temporal</option>
                            <option value="Permanente">Permanente</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" id="estado">
                            <option value="Pendiente">Pendiente</option>
                            <option value="Devuelto">Devuelto</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                        <input type="date" class="form-control" id="fecha_prestamo" value="{{ now()->format('Y-m-d') }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
                        <input type="date" class="form-control" id="fecha_devolucion" value="{{ now()->addDays(7)->format('Y-m-d') }}">
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
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Préstamo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este préstamo? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection
