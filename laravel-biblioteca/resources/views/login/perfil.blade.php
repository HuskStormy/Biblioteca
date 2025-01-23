@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Usuarios')
@section('PAG_GRUPO', 'Seguridad')
@section('content')

@php
  $VRFT = "true";   
  echo($VRFT);
@endphp


<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="../../dist/img/user4-128x128.jpg"
                   alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{Session::get('user_nombre')}}</h3>
            <p class="text-muted text-center">{{Session::get('user_Rol')}}</p>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Sobre mi</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong> Descripción</strong>

            <p class="text-muted">
              Aquí se agrega una descripción del usuario que desee
            </p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Correo</strong>
            <p class="text-muted">ejemplo@gmail.com</p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Región</strong>
            <p class="text-muted">Centro Regional</p>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Actividades</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Editar</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                Agregaría un historial de los préstamos que obtuvo y talvez las solvencias

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <div class="form-group row">
                    <label class="col-sm-5" style="font-size: 22px">Foto de Perfil</label>
                </div>

                <form class="form-horizontal">
                    <div class="form-group row">
                        <!-- Image Column -->
                        <div class="col-md-4 text-center">
                            <img src="{{ asset('dist/img/default-150x150.png') }}"
                                 class="img-thumbnail mb-3"
                                 alt="User Image"
                                 width="300px"
                                 height="300px">
                            <button type="button" class="btn btn-danger btn-block mb-2">Eliminar Foto</button>
                        </div>

                        <!-- Form Controls Column -->
                        <div class="col-md-8">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Seleccionar Imagen</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Guardar Cambios</button>
                        </div>
                    </div>
                </form>


                <div class="form-group row">
                    <label class="col-sm-5" style="font-size: 22px">Datos Generales</label>
                </div>

                <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Nombre">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Ciudad</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ciudad">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                      </div>
                    </div>
                </form>


                <div class="form-group row">
                    <label class="col-sm-5" style="font-size: 22px">Cambio de Contraseña</label>
                </div>

                <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Contraseña Actual</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Contraseña Nueva</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                      </div>
                    </div>
                </form>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->


  @endsection
