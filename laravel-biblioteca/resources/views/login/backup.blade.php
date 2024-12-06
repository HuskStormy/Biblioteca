@extends('layout.Layout_Main')

@section('TITULO_PAGINA', 'Configuración de Respaldo')
@section('PAG_GRUPO', 'Base de datos')
@section('content')

<div class="container mt-4">
  <h3 class="mb-4">Configuración de la Conexión</h3>
  <form method="POST" action="backup">
    @csrf
    <div class="row mb-3">
      <label for="server" class="col-sm-3 col-form-label">Servidor:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="server" name="server" value="127.0.0.1" required>
      </div>
    </div>

    <div class="row mb-3">
      <label for="database" class="col-sm-3 col-form-label">Base de Datos:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="database" name="database" value="biblioteca virtual" required>
      </div>
    </div>

    <div class="row mb-3">
      <label for="user" class="col-sm-3 col-form-label">Usuario:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="user" name="user" value="root (por defecto)" required>
      </div>
    </div>

    <div class="row mb-3">
      <label for="password" class="col-sm-3 col-form-label">Contraseña:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
    </div>

    <div class="mb-4">
        <button type="button" class="btn btn-success" onclick="testConnection()">Probar Conexión</button>
      </div>

      <!-- Mensajes de conexión -->
      <div id="message" class="mt-3" style="display: none;">
        <div id="successMessage" class="alert alert-success" role="alert" style="display: none;">
          ¡Conexión correcta!
        </div>
        <div id="errorMessage" class="alert alert-danger" role="alert" style="display: none;">
          Hubo un error en la conexión. Intenta nuevamente.
        </div>
      </div>

    <h4>Información de la Base de Datos y Configuración del Respaldo</h4>

    <div class="row mb-3">
        <label for="backup_directory" class="col-sm-3 col-form-label">Respaldar en:</label>
        <div class="col-sm-9">
          <input type="file" id="backup_directory" webkitdirectory style="display: none;" onchange="updateFolderPath()">
          <input type="text" class="form-control" id="selected_folder" placeholder="Seleccione una carpeta" readonly>
          <button type="button" class="btn btn-secondary mt-2" onclick="document.getElementById('backup_directory').click()">Seleccionar Carpeta</button>
        </div>
      </div>



    <div class="row mb-3">
      <label for="backup_name" class="col-sm-3 col-form-label">Nombre del Archivo:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="backup_name" name="backup_name" value="Backup_12-00_12-12-12" required>
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <button type="submit" class="btn btn-primary">Respaldar</button>
      <a href="backup" class="btn btn-secondary">Salir</a>
    </div>
  </form>

  <script>
    function updateFolderPath() {
        const folderInput = document.getElementById('backup_directory');
        const folderPathInput = document.getElementById('selected_folder');
        if (folderInput.files.length > 0) {
            folderPathInput.value = folderInput.files[0].webkitRelativePath.split('/')[0];
        }
    }
        // Función para simular la prueba de conexión
    function testConnection() {
        // Simular que la conexión es correcta o incorrecta
        const isConnectionSuccessful = Math.random() > 0.5; // 50% de probabilidad de éxito o error

        // Mostrar u ocultar los mensajes según el resultado de la conexión
        document.getElementById('message').style.display = 'block';
        if (isConnectionSuccessful) {
        document.getElementById('successMessage').style.display = 'block';
        document.getElementById('errorMessage').style.display = 'none';
        } else {
        document.getElementById('errorMessage').style.display = 'block';
        document.getElementById('successMessage').style.display = 'none';
        }
    }
  </script>


</div>

@endsection
