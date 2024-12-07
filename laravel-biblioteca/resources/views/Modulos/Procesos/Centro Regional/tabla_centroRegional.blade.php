@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Crear un nuevo centro Regional')
@section('PAG_GRUPO', 'Gestion Procesos')
@section('content')



<!--TABLA-->
    <div class="card-group">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Centro Regionales INFOP</h5>
                    <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="bi bi-plus-circle">Agregar</i>
                    </button>

                    <!-- Botón Imprimir -->
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-solvencias')}}">
                        <i class="bi bi-printer"></i> Imprimir
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="align-middle">
                        <th>Codigo de Centro</th>
                        <th>Nombre de Centro</th>
                                    <th>Gerente</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Descripcion de Ubicacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>448625</td>
                            <td>Infop Miraflores</td>
                            <td>Carlos Alvarez</td>
                            <td>carlos12@gmail.com</td>
                            <td>7896-4852</td>
                            <td>Francisco Morazan</td>
                            <td>Tegucigalpa</td>
                            <td>A la par de Transito</td>
                            <td>
                                <div class="button-group">
                                    <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pen-fill"> Editar </i>
                                    </button>
                                    <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash3-fill"> Eliminar </i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="align-middle">
                        <th>Codigo de Centro</th>
                        <th>Nombre de Centro</th>
                                    <th>Gerente</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Descripcion de Ubicacion</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.TABLA-->

<!-- Modal para Agregar -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                 <!--Titulo del modal-->    <h5 class="modal-title" id="editModalLabel">Agregar Centro Regional</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-2">
                                <img src="{{asset('https://pngimg.com/uploads/gps/gps_PNG29.png')}}" class="img-thumbnail" alt="Cinque Terre" width="150px" height="150px">
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <label for="titulo" class="form-label">Datos Centro Regional</label>
                                    <div class="col-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Codigo de Centro</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"> <span class="input-group-text">Nombre de Centro</span></div>
                                            <input type="text" class="form-control" placeholder="Texto">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <label for="titulo" class="form-label">Gerencia de Region</label>
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"> <span class="input-group-text">Gerente de zona </span></div>
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
                                    <div class="input-group-prepend"> <span class="input-group-text">Telefono</span></div>
                                    <input type="text" class="form-control" placeholder="Texto">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="titulo" class="form-label">Descripcion Geografica de Region</label>
                            <div class="col-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Departamento</span>
                                    <select class="form-control">
                                    <option>1	Atlántida</option>	
                                    <option>2	Colón	</option>
                                    <option>3	Comayagua</option>	
                                    <option>4	Copán	</option>
                                    <option>5	Cortés	</option>
                                    <option>6	Choluteca</option>	
                                    <option>7	El Paraíso</option>		
                                    <option>8	Francisco Morazán</option>		
                                    <option>9	Gracias a Dios</option>	
                                    <option>10	Intibucá</option>	
                                    <option>11	Islas de la Bahía</option>
                                    <option>12	La Paz</option>
                                    <option>13	Lempira	</option>
                                    <option>14	Ocotepeque</option>	
                                    <option>15	Olancho	</option>
                                    <option>16	Santa Bárbara</option>
                                    <option>17	Valle</option>
                                    <option>18	Yoro</option>
                                    
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Municipio</span>
                                    <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                    </select>
                                </div>
                            </div>
                                               
                        <div class="col-10">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"> <span class="input-group-text">Descripcion de ubicacion</span></div>
                                    <input type="text" class="form-control" placeholder="Texto">
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
                <h5 class="modal-title" id="editModalLabel">Editar Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="idSolvencia" class="form-label">ID de Solvencia</label>
                        <input type="text" class="form-control" id="idSolvencia" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario">
                    </div>
                    <div class="mb-3">
                        <label for="responsable" class="form-label">Responsable</label>
                        <input type="text" class="form-control" id="responsable">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select class="form-control" id="estado">
                            <option>Activo</option>
                            <option>Cancelado</option>
                            <option>Finalizado</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fechaCreacion" class="form-label">Fecha de Creación</label>
                        <input type="date" class="form-control" id="fechaCreacion">
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
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Solvencia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que deseas eliminar esta solvencia? Esta acción no se puede deshacer.</p>
                <p><strong>ID de Solvencia:</strong> <span id="idSolvenciaEliminar"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection
