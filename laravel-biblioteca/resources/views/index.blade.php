@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'BIBLIOTECA VIRTUAL INFOP 24/7')
@section('PAG_GRUPO', '')
@section('content')
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
                  <p>Usuarios</p>
                </div>
                <div class="icon"> <i class="bi bi-person-fill"></i> </div>
                <a href="{{url('/table_usuarios')}}" class="small-box-footer"> Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px"></sup></h3>

                  <p>Usuario pendientes</p>
                </div>
                <div class="icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <a href="{{url('/table_material')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
                  <p>Materiales</p>
                </div>
                <div class="icon">
                    <i class="bi bi-book-half"></i>
                </div>
                <a href="#" class="small-box-footer">Mas Informacion  <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
                  <p>fichas biliograficas</p>
                </div>
                <div class="icon">
                    <i class="bi bi-journal-text"></i>
                </div>
                <a href="#" class="small-box-footer">Mas Informacion  <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>


@endsection
