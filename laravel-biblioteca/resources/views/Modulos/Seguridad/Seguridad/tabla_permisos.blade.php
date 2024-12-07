@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Permisos')
@section('PAG_GRUPO', 'Seguridad')
@section('content')




<div class="row">
    <div class="col-6">
        <div class="input-group">
            <span class="input-group-text">Rol</span>
            <select class="form-control">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
            </select>
            <div class="input-group-append">
                <a type="button" class="btn btn-secondary" href="#"> Aplicar</a>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="row">
<!--TABLA-->
<div class="card-group">

    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Permisos</h5>

                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-permisos')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
            </div>

            <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Permiso</th>
                                    <th>Pantalla</th>
                                    <th>Guardar</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                    <th>Buscar</th>
                                    <th>Crear</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>n°</td>
                                    <td>Permiso</td>
                                    <td>Pantalla</td>
                                    <td><i class="bi bi-check-circle-fill icon-greed"></i></td>
                                    <td><i class="bi bi-check-circle-fill icon-greed"></i></td>
                                    <td><i class="bi bi-x-circle-fill icon-red"></i></td>
                                    <td><i class="bi bi-check-circle-fill icon-greed"></i></td>
                                    <td><i class="bi bi-check-circle-fill icon-greed"></i></td>
                                    <td>
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                                <i class="bi bi-pen-fill">     Accion  </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Permiso</th>
                                    <th>Pantalla</th>
                                    <th>Guardar</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                    <th>Buscar</th>
                                    <th>Crear</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                        </table>
            </div>
        </div>
    </div>
</div>
<!--/.TABLA-->
</div>

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Permiso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">

                            <div class="col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rol</span>
                                    <select class="form-control" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pantalla</span>
                                    <select class="form-control" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <label for="titulo" class="form-label">Permisos</label>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                    <label class="custom-control-label" for="customSwitch1">Guardar</label>
                                </div>
                            </div>
                            <div class="col-2">
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
                                <label class="custom-control-label" for="customSwitch2">Editar</label>
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                <label class="custom-control-label" for="customSwitch3">Crear</label>
                              </div>
                            </div>
                            <div class="col-2">
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                <label class="custom-control-label" for="customSwitch4">Eliminar</label>
                              </div>
                            </div>
                            <div class="col-2">
                                <div class="custom-control custom-switch">
                                  <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                  <label class="custom-control-label" for="customSwitch3">Buscar</label>
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
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Rol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este Rol? Esta acción no se puede deshacer y puede que tengas inconvenientes mas adelante.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>




@endsection
