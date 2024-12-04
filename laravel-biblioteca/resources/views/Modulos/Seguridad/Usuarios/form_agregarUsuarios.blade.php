@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Agregar Usuarios')
@section('PAG_GRUPO', 'Seguridad')
@section('content')





<div class="row">
    <div class="col-2"></div>

    <div class="col-8">
        <form>
            <div class="row">
                <div class="col-2">
                    <img src="{{asset('dist/img/default-150x150.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150px" height="150px">
                </div>
                <div class="col-10">
                    <div class="row">
                        <label for="titulo" class="form-label">Datos Personales</label>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">Nombre</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">Apellido</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"> <span class="input-group-text">RTN</span></div>
                                <input type="text" class="form-control" placeholder="Texto">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <label for="titulo" class="form-label">Datos de Usuario</label>
                <div class="col-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Usuario</span></div>
                        <input type="text" class="form-control" placeholder="Texto">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Correo</span></div>
                        <input type="text" class="form-control" placeholder="Texto">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Contraseña</span></div>
                        <input type="text" class="form-control" placeholder="Texto">
                    </div>
                </div>
            </div>

            <div class="row">
                <label for="titulo" class="form-label">Registro</label>
                <div class="col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Estado</span>
                        <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rol</span>
                        <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">Cod Primer Ingreso</span></div>
                        <input type="text" class="form-control" placeholder="Texto">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Centro Regional</span>
                        <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                        </select>
                    </div>
                </div>
            </div>

        </form>
        <button type="button" class="btn btn-primary">Agregar</button>
    </div>

    <div class="col-2"></div>
</div>


@endsection
