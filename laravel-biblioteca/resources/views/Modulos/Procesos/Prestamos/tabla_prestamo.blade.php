@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Gestión de Préstamos')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<!-- TABLA -->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <!-- Encabezado con botones alineados a la derecha -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Listado de Préstamos</h5>

                <!-- Botones alineados al lado derecho -->
                <div class="d-flex gap-2 ms-auto">
                    <!-- Botón Agregar -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle"></i> Agregar
                    </button>
                    
                    <!-- Botón Imprimir -->
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{ url('pdf-prestamos') }}">
                        <i class="bi bi-printer"></i> Imprimir
                    </a>
                </div>
            </div>

            <!-- Contenido de la tarjeta -->
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

<!-- Modal para Agregar -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Agregar Préstamo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-2"></div>

                    <div class="col-8">
                        <form>
                            <!-- Información del Usuario -->
                            <div class="row">
                                <label for="titulo" class="form-label">Información del Usuario</label>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Usuario</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Usuario">
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>

                            <!-- Información del Préstamo -->
                            <div class="row">
                                <label for="titulo" class="form-label">Información del Préstamo</label>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Material</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Material a prestar">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Tipo de Préstamo</span>
                                        </div>
                                        <select class="form-control">
                                            <option>Tipo 1</option>
                                            <option>Tipo 2</option>
                                            <option>Tipo 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Fechas del Préstamo -->
                            <div class="row">
                                <label for="titulo" class="form-label">Fechas del Préstamo</label>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Fecha Préstamo</span>
                                        </div>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Fecha Devolución</span>
                                        </div>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- Información Adicional -->
                            <div class="row">
                                <label for="titulo" class="form-label">Información Adicional</label>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Código de Verificación</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Ingrese el código">
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>

                            <!-- Observaciones -->
                            <div class="mb-3">
                                <label for="observaciones" class="form-label">Observaciones</label>
                                <textarea class="form-control" id="observaciones" rows="3" placeholder="Detalles o notas adicionales"></textarea>
                            </div>

                            <!-- Botón de registro -->
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary">Registrar Préstamo</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
