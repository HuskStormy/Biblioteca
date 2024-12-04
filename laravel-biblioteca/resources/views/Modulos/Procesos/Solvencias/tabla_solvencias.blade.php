@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Gestión de Solvencias')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<!-- TABLA -->
<div class="card-group">
    <div class="col-12">
        <div class="card">
            <!-- Encabezado de la tarjeta -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Listado de Solvencias</h5>
                
                <!-- Botones alineados al lado derecho -->
                <div class="d-flex gap-2 ms-auto">
                    <!-- Botón Agregar -->
                    <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addSolvenciaModal">
                      <i class="bi bi-plus-circle"></i> Agregar
                    </button>


                    <!-- Botón Imprimir -->
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{ url('pdf-solvencias') }}">
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

<!-- Modal para Agregar Solvencia -->
<div class="modal fade" id="addSolvenciaModal" tabindex="-1" aria-labelledby="addSolvenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Encabezado del Modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="addSolvenciaModalLabel">Registrar Nueva Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <form>
                            <!-- Datos del Solicitante -->
                            <div class="row">
                                <label for="titulo" class="form-label">Datos del Solicitante</label>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nombre</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre del solicitante">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Apellido</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Apellido del solicitante">
                                    </div>
                                </div>
                            </div>

                            <!-- Información Adicional -->
                            <div class="row">
                                <label for="titulo" class="form-label">Información Adicional</label>
                                <div class="col-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Estado</span>
                                        <select class="form-control">
                                            <option>Pendiente</option>
                                            <option>Aprobada</option>
                                            <option>Rechazada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Centro Regional</span>
                                        <select class="form-control">
                                            <option>Centro 1</option>
                                            <option>Centro 2</option>
                                            <option>Centro 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Observaciones -->
                            <div class="mb-3">
                                <label for="observaciones" class="form-label">Observaciones</label>
                                <textarea class="form-control" id="observaciones" rows="3" placeholder="Detalles adicionales o comentarios"></textarea>
                            </div>

                            <!-- Botón de registro -->
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary">Registrar Solvencia</button>
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
