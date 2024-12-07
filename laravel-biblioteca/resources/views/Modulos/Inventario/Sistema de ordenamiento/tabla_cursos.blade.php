@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Cursos')
@section('PAG_GRUPO', 'Sistema de ordenamiento')
@section('content')



<!-- TABLA -->
<div class="card-group">
    <div class="col-12">
        <div class="card">
            <!-- Encabezado de la tarjeta -->
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Autores Bibliográficos</h5>
                
                





                <!-- Botones alineados al lado derecho -->
                <div class="d-flex gap-2 ms-auto">
                    <!-- Botón Agregar -->
                    <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addSolvenciaModal">
                      <i class="bi bi-plus-circle"></i> Agregar
                    </button>


                    <!-- Botón Imprimir -->
                    <a type="button" class="btn btn-secondary btn_imprimir" href="{{ url('pdf-solvencias') }}">
                        <i class="bi bi-printer"></i> Imprimir
                    </a>
                </div>
            </div>


                <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr class="align-middle">
                                    <th>ID Autor</th>
                                    <th>Nombre</th>
                                    <th>Generos</th>
                                    <th>Descripción</th>
                                    <th>Editorial</th>
                                    <th>Código de Editorial</th>
                                    
                                   
                                </tr>
                                </thead>
                    <tbody>
                        <!-- Datos de prueba -->
                        @for ($i = 1; $i <= 5; $i++)
                            <tr>
                            <td>#-{{ 2000 + $i }}</td>
                                <td>DEW#-{{ 104 + $i }}</td>
                                <td>HISTORIA{{ $i }}</td>
                                <td>COLOR/FORMA/ISSBN {{ $i }}</td>
                                <td>ROJO/AMARILLO/VERDE-{{ 1000 + $i }}</td>
                                <td>#-{{ 50 + $i }}</td>
                                <td>
                                    <div class="button-group">
                                        <button type="button" class="btn btn-warning btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal" 
                                            data-id="SOLV-{{ 1000 + $i }}">
                                            <i class="bi bi-pen-fill"></i> Editar
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#deleteModal" 
                                            data-id="SOLV-{{ 1000 + $i }}">
                                            <i class="bi bi-trash3-fill"></i> Eliminar
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr class="align-middle">
                        <th>ID Autor</th>
                                    <th>Nombre</th>
                                    <th>Generos</th>
                                    <th>Descripción</th>
                                    <th>Editorial</th>
                                    <th>Código de Editorial</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- /.TABLA -->

<!-- Modal para Agregar Dewey -->
<div class="modal fade" id="addSolvenciaModal" tabindex="-1" aria-labelledby="addSolvenciaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Encabezado del Modal -->
            <div class="modal-header">
                <h5 class="modal-title" id="addSolvenciaModalLabel">Ingresar nuevo DEWEY</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <form>
                            <!-- Datos material multimedia -->
                            <div class="row">
                                <label for="titulo" class="form-label">Material multimedia</label>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Id DEWEY</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Id DEWEY">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Nombre </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>

                            <!-- Información Adicional -->
                            <div class="row">
                                <label for="titulo" class="form-label">Información Adicional</label>
                                <div class="col-10">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tipo</span>
                                        <select class="form-control">
                                            <option>CIENCIAS SOCIALES</option>
                                            <option>MATEMATICAS</option>
                                            <option>ESPAÑOL</option>
                                        </select>
                                        </div>
                                        <div class="col-8">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">COLOR</span>
                                        <select class="form-control">
                                            <option>ROJO</option>
                                            <option>VERDE</option>
                                            <option>AMARILLO</option>
                                        </select>
                                    </div>
                                </div>
                                
                            <div class="col-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Estante </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Estante">
                                    </div>
                                </div>
                            </div>
                            </div> 

                            <!-- Observaciones -->
                            <div class="mb-3">
                                <label for="Descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control" id="observaciones" rows="3" placeholder="Detalles adicionales o comentarios"></textarea>
                            </div>

                            <!-- Botón de registro -->
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary">Registrar Dewey</button>
                            </div>
                        </form>
                     
                </div>
                   
            </div>
        </div>
    </div>
</div>



 

@endsection
