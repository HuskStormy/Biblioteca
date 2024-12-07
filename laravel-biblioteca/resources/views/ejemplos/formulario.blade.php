@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'formulario - ejemplo')
@section('PAG_GRUPO', 'Modulos')
@section('content')





            <!-- Input addon -->
            <div class="card card-info">

                <div class="card-header">
                  <h3 class="card-title">Input Addon</h3>
                </div>

                <div class="card-body">
                    <h4>Título</h4>

                    <!-- texto -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text">@</span></div>
                        <input type="text" class="form-control" placeholder="Texto">
                    </div>

                    <!-- cantidad -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text">N</span></div>
                        <input type="text" class="form-control" placeholder="numero enteros">
                    </div>



                    <!-- TEXTO CON ICONO -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-envelope"></i></span> </div>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                        <label>Select</label>
                        <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                        </select>
                    </div>


                  <!-- /input-group -->
                </div>
                <!-- /.card-body -->
              </div>



@endsection

