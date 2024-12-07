@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Tabla Material')
@section('PAG_GRUPO', 'Modulos')
@section('content')




    <div class="card-group">
        <div class="col-10">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Materiales</h5>
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
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Autor</th>
                                    <th>ISBN</th>
                                    <th>DEWEY</th>
                                    <th>Centro Regional</th>
                                    <th>Visibilidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Harry Potter</td>
                                    <td>Libro</td>
                                    <td>J. K. Rowling</td>
                                    <td>978-1-2345-6789-0</td>
                                    <td>823.92</td>
                                    <td>Centro Norte</td>
                                    <td>Público</td>
                                    <td>
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
                                <tr>
                                    <td>El Señor de los Anillos</td>
                                    <td>Libro</td>
                                    <td>J. R. R. Tolkien</td>
                                    <td>978-3-4567-8912-3</td>
                                    <td>823.91</td>
                                    <td>Centro Sur</td>
                                    <td>Público</td>
                                    <td>
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
                                <tr>
                                    <td>Cien Años de Soledad</td>
                                    <td>Libro</td>
                                    <td>Gabriel García Márquez</td>
                                    <td>978-0-1234-5678-9</td>
                                    <td>863.64</td>
                                    <td>Centro Caribe</td>
                                    <td>Restringido</td>
                                    <td>
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
                                <tr>
                                    <td>1984</td>
                                    <td>Libro</td>
                                    <td>George Orwell</td>
                                    <td>978-9-8765-4321-0</td>
                                    <td>823.91</td>
                                    <td>Centro Este</td>
                                    <td>Público</td>
                                    <td>
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
                                <tr>
                                    <td>Don Quijote de la Mancha</td>
                                    <td>Libro</td>
                                    <td>Miguel de Cervantes</td>
                                    <td>978-8-7654-3210-9</td>
                                    <td>863.32</td>
                                    <td>Centro Europa</td>
                                    <td>Histórico</td>
                                    <td>
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
                                <tr>
                                    <td>Crónica de una Muerte Anunciada</td>
                                    <td>Libro</td>
                                    <td>Gabriel García Márquez</td>
                                    <td>978-1-0987-6543-2</td>
                                    <td>863.62</td>
                                    <td>Centro Pacífico</td>
                                    <td>Restringido</td>
                                    <td>
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
                                <tr>
                                    <th>Título</th>
                                    <th>Tipo</th>
                                    <th>Autor</th>
                                    <th>ISBN</th>
                                    <th>DEWEY</th>
                                    <th>Centro Regional</th>
                                    <th>Visibilidad</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>

                </div>
            </div>
        </div>
        <div class="col-2">


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Verlo por</h4>
                    <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Libros</li>
                    <li class="list-group-item">Curriculas</li>
                    <li class="list-group-item">Periodicos</li>
                    <li class="list-group-item">Resvistas</li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tablas Adicionales</h4>
                    <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Autor</li>
                    <li class="list-group-item">Centro Regional</li>
                    <li class="list-group-item">Material Prestados</li>
                    <li class="list-group-item">Pendientes</li>
                </ul>
            </div>

        </div>
    </div>



    <!-- Modal para Agregar -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Agragar Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" value="Harry Potter">
                        </div>
                        <div class="mb-3">
                            <label for="autor" class="form-label">Autor</label>
                            <input type="text" class="form-control" id="autor" value="J. K. Rowling">
                        </div>
                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbn" value="978-1-2345-6789-0">
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
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" value="Harry Potter">
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" value="J. K. Rowling">
                    </div>
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" value="978-1-2345-6789-0">
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

