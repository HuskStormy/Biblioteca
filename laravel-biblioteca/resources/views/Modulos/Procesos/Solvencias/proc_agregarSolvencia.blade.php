@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Registrar Solvencias')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<div class="row">
    <div class="col-2"></div>

    <div class="col-8">
        <form>
            <!-- Datos del Solicitante -->
            <div class="row">
                <label for="titulo" class="form-label">Datos del Solicitante</label>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                        <input type="text" class="form-control" placeholder="Nombre del solicitante">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Apellido</span></div>
                        <input type="text" class="form-control" placeholder="Apellido del solicitante">
                    </div>
                </div>
            </div>

            <!-- Información Adicional -->
            <div class="row">
                <label for="titulo" class="form-label">Información Adicional</label>
                <div class="col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Estado</span>
                        <select class="form-control">
                            <option>Pendiente</option>
                            <option>Aprobada</option>
                            <option>Rechazada</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Centro Regional</span>
                        <select class="form-control">
                            <option>Centro 1</option>
                            <option>Centro 2</option>
                            <option>Centro 3</option>
                        </select>
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

@endsection
