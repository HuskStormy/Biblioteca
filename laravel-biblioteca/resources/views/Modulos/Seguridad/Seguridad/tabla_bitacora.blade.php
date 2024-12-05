@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Bitacora')
@section('PAG_GRUPO', 'Seguridad')
@section('content')


<!--TABLA-->
<div class="card-group">
    <div class="col-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Bitacora</h5>
                <!-- Botones alineados al lado derecho -->
                <div class="d-flex gap-2 ms-auto">
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-bitacora')}}">
                    <i class="bi bi-printer"></i> Imprimir
                    </a>
                </div>
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
                                <th>fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Usuario</td>
                                <td>Objeto</td>
                                <td>Accion</td>
                                <td>Descripcion</td>
                                <td>fecha</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Usuario</th>
                                <th>Objeto</th>
                                <th>Accion</th>
                                <th>Descripcion</th>
                                <th>fecha</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
</div>
<!--/.TABLA-->

@endsection
