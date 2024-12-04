@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Registrar Préstamo')
@section('PAG_GRUPO', 'Procesos')
@section('content')

<div class="row">
    <div class="col-2"></div>

    <div class="col-8">
        <form>
            <!-- Información del Usuario -->
            <div class="row">
                <label for="titulo" class="form-label">Información del Usuario</label>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text"> Usuario</span></div>
                        <input type="text" class="form-control" placeholder="Usuario">
                    </div>
                </div>
                <div class="col-6">
                </div>
            </div>

            <!-- Información del Préstamo -->
            <div class="row">
                <label for="titulo" class="form-label">Información del Préstamo</label>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Material</span></div>
                        <input type="text" class="form-control" placeholder="Material a prestar">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Tipo de Préstamo</span></div>
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
                        <div class="input-group-prepend"> <span class="input-group-text">Fecha Préstamo</span></div>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Fecha Devolución</span></div>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Información Adicional -->
            <div class="row">
                <label for="titulo" class="form-label">Información Adicional</label>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Código de Verificación</span></div>
                        <input type="text" class="form-control" placeholder="Ingrese el código">
                    </div>
                </div>
                <div class="col-6">
                </div>
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

@endsection
