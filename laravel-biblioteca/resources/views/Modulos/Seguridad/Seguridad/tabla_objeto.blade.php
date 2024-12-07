@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Objeto')
@section('PAG_GRUPO', 'Seguridad')
@section('content')


<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Objeto</h5>

                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">
                        <!-- Botón Agregar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </button>

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-objeto')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Objeto</th>
                                <th>tipo</th>
                                <th>descripcion</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Objeto</td>
                                <td>tipo</td>
                                <td>descripcion</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pen-fill">     Editar  </i>
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
                                <th>Objeto</th>
                                <th>tipo</th>
                                <th>descripcion</th>
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
                        <h5 class="modal-title" id="addModal">Crear Objeto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">

                                <div class="col-12">
                                    <div class="row">
                                        <label for="titulo" class="form-label">Objeto</label>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                                <input type="text" class="form-control" placeholder="Texto">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Tipo</span>
                                                <select class="form-control">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                    <option value="5">Option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="titulo" class="form-label">descripcion</label>
                                        <div class="col-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"> <span class="input-group-text">Descripcion</span></div>
                                                <textarea class="form-control" placeholder="descripcion" maxlength="255" rows="5"></textarea>
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
                    <h5 class="modal-title" id="editModalLabel">Editar Objeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">

                            <div class="col-12">
                                <div class="row">
                                    <label for="titulo" class="form-label">Objeto</label>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Tipo</span>
                                            <select class="form-control">
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                                <option value="4">Option 4</option>
                                                <option value="5">Option 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="titulo" class="form-label">descripcion</label>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Descripcion</span></div>
                                            <textarea class="form-control" placeholder="descripcion" maxlength="255" rows="5"></textarea>
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
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Objeto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este Objeto? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>




@endsection
