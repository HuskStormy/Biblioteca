@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'REPOSITORIO MATERIAL')
@section('PAG_GRUPO', 'Matenimiento')
@section('content')

<style>
    .content-section {
        display: none; /* Oculta todas las secciones por defecto */
    }
    .content-section.active {
        display: block; /* Muestra solo la sección activa */
    }
</style>
<!--NOMBRES DE SECCIONES-->
<nav class="nav nav-tabs">
    <a class="nav-link nav-dest active" href="#" data-target="section1">Tipo y Estado de Material</a>
    <a class="nav-link nav-dest" href="#" data-target="section2">Autores y Estantes</a>
    <a class="nav-link nav-dest" href="#" data-target="section3">Idioma y coleccion</a>
</nav>

<!--Secciones con su contenido-->
<div id="section1" class="content-section active">
  <div class="row">
    <!--TABLA TIPO MATERIAL-->
    <div class="card-group col-6">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Tipo de Material </h5>

                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">
                        <!-- Botón Agregar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </button>

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Tipo de material</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Descripción de material</td>
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
                                <th>Tipo de materal</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
    <!--/.FIN DE TABLA TIPO MATERIAL-->

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

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Tipo de material</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita el tipo de material">
                    </div>
                   
                    <!-- Agrega más campos según tus necesidades -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
     </div>
    </div>

    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Agregar tipo de material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Tipo de material</label>
                            <input type="text" class="form-control" id="titulo" value="Editas el tipo de material ">
                        </div>
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>



    <!--__________________________________________________________________________________________________________________-->
    <!--TABLA TABLA ESTADO DE MATERIAL-->
    <div class="card-group col-6">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Estado de material</h5>

                        <!-- Botones alineados al lado derecho -->
                        <div class="d-flex gap-2 ms-auto">
                            <!-- Botón Agregar -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal1">
                                <i class="bi bi-plus-circle"></i> Agregar
                            </button>

                            <!-- Botón Imprimir -->
                            <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                                <i class="bi bi-printer"></i> Imprimir
                            </a>
                        </div>
                </div>

                <div class="card-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Descripción</th>
                                    <th>Observación</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>n°</td>
                                    <td>buen estado/mal estado </td>
                                    <td>Observación del usuario del estado del libro</td>
                                    <td>
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal1">
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
                                    <th>Descripción</th>
                                    <th>Observación</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                        </table>

                </div>
            </div>
    </div>
    <!--/.FIN TABLA ESTADO MATERIAL -->


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

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita el buen estado ó mal estado del material">
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Observación</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita observación del usuario del estado del libro">
                    </div>
                    <!-- Agrega más campos según tus necesidades -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
     </div>
    </div>

    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal1" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="titulo" value="Buen estado ó mal Estado ">
                        </div>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Observacion</label>
                            <input type="text" class="form-control" id="titulo" value="El usuario coloca el estado del libro ">
                        </div>
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>   


<div id="section2" class="content-section active">
  <div class="row">
    <!--TABLA MATERIAL AUTOR-->
    <div class="card-group col-6">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Autores </h5>

                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">
                        <!-- Botón Agregar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal3">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </button>

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Autor</th>
                                <th>Nacionalidad</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>Nombre autor</td>
                                <td>Nacionalidad autor</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal3">
                                            <i class="bi bi-pen-fill">     Editar  </i>
                                        </button>
                                        <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal3">
                                            <i class="bi bi-trash3-fill">  Eliminar </i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Autor</th>
                                <th>Nacionalidad</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
    <!--/.FIN DE TABLA AUTOR-->

     <!-- Modal para Eliminar -->
     <div class="modal fade" id="deleteModal3" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal3" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita el nombre autor">
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita nacionalidad autor">
                    </div>
                   
                    <!-- Agrega más campos según tus necesidades -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
     </div>
    </div>

    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal3" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Autor</label>
                            <input type="text" class="form-control" id="titulo" value="Agregas Nombre Autor ">
                        </div>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Nacionalidad</label>
                            <input type="text" class="form-control" id="titulo" value="Agregas Nacionalidad ">
                        </div>
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>



    <!--__________________________________________________________________________________________________________________-->
    <!--TABLA TABLA ESTANTE-->
    <div class="card-group col-6">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Estantes</h5>

                        <!-- Botones alineados al lado derecho -->
                        <div class="d-flex gap-2 ms-auto">
                            <!-- Botón Agregar -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal4">
                                <i class="bi bi-plus-circle"></i> Agregar
                            </button>

                            <!-- Botón Imprimir -->
                            <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                                <i class="bi bi-printer"></i> Imprimir
                            </a>
                        </div>
                </div>

                <div class="card-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Estante</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>n°</td>
                                    <td>Estante fisico</td>
                                    <td>
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal4">
                                                <i class="bi bi-pen-fill">     Editar  </i>
                                            </button>
                                            <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal4">
                                                <i class="bi bi-trash3-fill">  Eliminar </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Estante</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                        </table>

                </div>
            </div>
    </div>
    <!--/.FIN TABLA ESTANTEL -->


        <!-- Modal para Eliminar -->
     <div class="modal fade" id="deleteModal4" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal4" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Estante</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita estante">
                    </div>
                   
                    <!-- Agrega más campos según tus necesidades -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
     </div>
    </div>

    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal4" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Estante</label>
                            <input type="text" class="form-control" id="titulo" value="Estante fisico">
                        </div>
                       
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>

<div id="section3" class="content-section active">
  <div class="row">
    <!--TABLA PREFIJO-->
    <div class="card-group col-6">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Colección </h5>

                    <!-- Botones alineados al lado derecho -->
                    <div class="d-flex gap-2 ms-auto">
                        <!-- Botón Agregar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal5">
                            <i class="bi bi-plus-circle"></i> Agregar
                        </button>

                        <!-- Botón Imprimir -->
                        <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                            <i class="bi bi-printer"></i> Imprimir
                        </a>
                    </div>
            </div>

            <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Colección</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>n°</td>
                                <td>descripción de la colección</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal5">
                                            <i class="bi bi-pen-fill">     Editar  </i>
                                        </button>
                                        <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal5">
                                            <i class="bi bi-trash3-fill">  Eliminar </i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="align-middle">
                                <th>n°</th>
                                <th>Coleccion</th>
                                <th>-</th>
                            </tr>
                        </tfoot>
                    </table>

            </div>
        </div>
    </div>
    <!--/.FIN DE TABLA AUTOR-->

     <!-- Modal para Eliminar -->
     <div class="modal fade" id="deleteModal5" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal5" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Colección</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita la descripcion de la colección">
                    </div>
                   
                    <!-- Agrega más campos según tus necesidades -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
     </div>
    </div>

    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal5" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Colección</label>
                            <input type="text" class="form-control" id="titulo" value="Agrega la coleccion ">
                        </div>  
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>



    <!--__________________________________________________________________________________________________________________-->
    <!--TABLA MATERIAL IDIOMA-->
    <div class="card-group col-6">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Idioma material</h5>

                        <!-- Botones alineados al lado derecho -->
                        <div class="d-flex gap-2 ms-auto">
                            <!-- Botón Agregar -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal6">
                                <i class="bi bi-plus-circle"></i> Agregar
                            </button>

                            <!-- Botón Imprimir -->
                            <a type="button" class="btn btn-secondary btn_imprimir" href="{{url('pdf-usuarios')}}">
                                <i class="bi bi-printer"></i> Imprimir
                            </a>
                        </div>
                </div>

                <div class="card-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Idioma material</th>
                                    <th>-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>n°</td>
                                    <td>Idioma del material</td>
                                    <td>
                                        <div class="button-group">
                                            <button type="button" class="btn_editar" data-bs-toggle="modal" data-bs-target="#editModal6">
                                                <i class="bi bi-pen-fill">     Editar  </i>
                                            </button>
                                            <button type="button" class="btn_eliminar" data-bs-toggle="modal" data-bs-target="#deleteModal6">
                                                <i class="bi bi-trash3-fill">  Eliminar </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="align-middle">
                                    <th>n°</th>
                                    <th>Idioma material</th>
                                    <th>-</th>
                                </tr>
                            </tfoot>
                        </table>

                </div>
            </div>
    </div>
    <!--/.FIN TABLA ESTANTEL -->


        <!-- Modal para Eliminar -->
     <div class="modal fade" id="deleteModal6" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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

    <!-- Modal para Editar -->
    <div class="modal fade" id="editModal6" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Idioma material</label>
                        <input type="text" class="form-control" id="titulo" value="Aqui se edita idioma del material">
                    </div>
                   
                    <!-- Agrega más campos según tus necesidades -->
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </div>
     </div>
    </div>

    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal6" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Idioma material</label>
                            <input type="text" class="form-control" id="titulo" value="idioma del material">
                        </div>
                       
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>

  </div>
</div>
 



<script>
    // Cambiar entre secciones
    const navLinks = document.querySelectorAll('.nav-dest');
    const sections = document.querySelectorAll('.content-section');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            navLinks.forEach(link => link.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));
            link.classList.add('active');
            const targetSection = document.getElementById(link.getAttribute('data-target'));
            targetSection.classList.add('active');
        });
    });

    // Ir a la siguiente sección
    function goToNextSection(nextSectionId) {
        navLinks.forEach(link => link.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));
        document.querySelector(`a[data-target="${nextSectionId}"]`).classList.add('active');
        document.getElementById(nextSectionId).classList.add('active');
    }
</script>

@endsection