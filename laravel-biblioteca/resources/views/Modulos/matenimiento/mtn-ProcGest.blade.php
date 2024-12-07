@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Procesos y Gestiones')
@section('PAG_GRUPO', 'Matenimiento')
@section('content')


<div class="row">
    <!--TABLA-->
    <div class="card-group col-6">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Estado de Usuario</h5>

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
                                <th>Estado Usuario</th>
                                <th>Descripción</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Estado Usuario</td>
                                <td>Descripción</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pen-fill">     Editar  </i>
                                        </button>
                                        <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash3-fill">  Rechazar </i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Estado Usuario</th>
                                <th>Descripción</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
    <!--/.TABLA-->
    <!--TABLA-->
    <div class="card-group col-6">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Tipo Objeto</h5>

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
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Objeto tipo</th>
                                    <th>Descripción</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>n°</td>
                                    <td>Objeto tipo</td>
                                    <td>Descripción</td>
                                    <td>
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                                <i class="bi bi-pen-fill">     Editar  </i>
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
                                    <th>Objeto tipo</th>
                                    <th>Descripción</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                        </table>

                </div>
            </div>
    </div>
    <!--/.TABLA-->
</div>



<!-- Modal para Eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar parametro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este parametro? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>


@endsection
