@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Bitacora')
@section('PAG_GRUPO', 'Seguridad')
@section('content')


<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Usuarios Pendiente a confirmarse</h5>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Usuario</th>
                                <th>Objeto</th>
                                <th>Accion</th>
                                <th>Descripcion</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Usuario</td>
                                <td>Objeto</td>
                                <td>Accion</td>
                                <td>Descripcion</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn_aceptar" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pen-fill">     confirmar  </i>
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
                                <th>Usuario</th>
                                <th>Objeto</th>
                                <th>Accion</th>
                                <th>Descripcion</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
</div>
<!--/.TABLA-->

@endsection
