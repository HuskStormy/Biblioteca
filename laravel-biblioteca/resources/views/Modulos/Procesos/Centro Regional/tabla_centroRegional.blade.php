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

                    <!--boton de imprimir--> 
                    <a type="button" class="btn_imprimir" href="{{url('pdf-usuarios')}}"> Imprimir  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg></a>

 <!--boton de Ejecutar Reporte-->
                    <a type="button" class="btn_imprimir" href="{{url('pdf-usuarios')}}"> Ejecutar Reporte<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg> </a>

 <!--boton de exportar Detalles-->
                    <a type="button" class="btn_imprimir" href="{{url('pdf-usuarios')}}"> Exportar Detalles </a>
                </div>


                <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>Codigo de centro</th>
                                    <th>Nombre de Centro</th>
                                    <th>Gerente</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Departamento</th>
                                    <th>Municipio</th>
                                    <th>Descripcion de Ubicacion</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal">
                                                <i class="bi bi-pen-fill">     Editar   </i>
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


<!-- Modal para Eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este registro? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>






@endsection

