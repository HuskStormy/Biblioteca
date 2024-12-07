@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Parametros')
@section('PAG_GRUPO', 'Seguridad')
@section('content')


<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Parametros</h5>

                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">
                        <!-- Botón Agregar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </button>

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-Parametros')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Nombre del Parametro</th>
                                <th>Valor</th>
                                <th>Usuario creador</th>
                                <th>Fecha Creacion</th>
                                <th>Fecha Modificacion</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Nombre del Parametro</td>
                                <td>Valor</td>
                                <td>Usuario creador</td>
                                <td>Fecha Creacion</td>
                                <td>Fecha Modificacion</td>
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
                                <th>Nombre del Parametro</th>
                                <th>Valor</th>
                                <th>Usuario creador</th>
                                <th>Fecha Creacion</th>
                                <th>Fecha Modificacion</th>
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
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModal">Crear parametro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">

                                <div class="col-12">
                                    <div class="row">
                                        <label for="titulo" class="form-label">Parametro</label>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                                <input type="text" class="form-control" placeholder="Texto">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"> <span class="input-group-text">valor</span></div>
                                                <input type="text" class="form-control" placeholder="Texto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="titulo" class="form-label">Datos</label>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"> <span class="input-group-text">Usuario</span></div>
                                                <input type="text" class="form-control" value="Usuario" disabled>
                                            </div>
                                        </div>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar parametro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">

                            <div class="col-12">
                                <div class="row">
                                    <label for="titulo" class="form-label">Parametro</label>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">valor</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="titulo" class="form-label">Datos</label>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Usuario</span></div>
                                            <input type="text" class="form-control" value="Usuario" disabled>
                                        </div>
                                    </div>
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
