@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Restaurar Base de Datos')
@section('PAG_GRUPO', 'Base de datos')
@section('content')

<div class="container mt-4">
  <h3 class="mb-4">Restaurar Base de Datos</h3>
  <form method="POST" action="restore" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
      <label for="server" class="col-sm-3 col-form-label">Servidor Local:</label>
      <div class="col-sm-9">
        <select class="form-control" id="server" name="server">
          <option>127.0.0.1:8000</option>
          <!-- Agregar más servidores si es necesario -->
        </select>
      </div>
    </div>

    <div class="row mb-3">
      <label for="database" class="col-sm-3 col-form-label">Base de Datos:</label>
      <div class="col-sm-9">
        <select class="form-control" id="database" name="database">
          <option value="Biblioteca Virual">Biblioteca Virtual</option>
          <!-- Agregar más bases de datos si es necesario -->
        </select>
      </div>
    </div>

    <div class="row mb-3">
      <label for="backup_file" class="col-sm-3 col-form-label">Directorio:</label>
      <div class="col-sm-9">
        <input type="file" class="form-control" id="backup_file" name="backup_file" accept=".bak">
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <button type="submit" class="btn btn-primary">Restaurar</button>
    </div>
  </form>
</div>

@endsection
