<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
    body {
      position: relative;
      margin: 0;
      height: 100vh;
      background: none;
      overflow: hidden; /* Evita barras de desplazamiento si se generan por animación */
    }

    /* Fondo inicial sin desenfoque */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('{{ asset('asset/imagenes/biblioteca.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      filter: blur(0); /* Sin desenfoque al inicio */
      animation: blurEffect 3s ease-in-out forwards; /* Animación de desenfoque */
      z-index: -1;
    }

    /* Superposición oscura opcional */
    body::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3);
      z-index: -1;
      animation: fadeOverlay 3s ease-in-out forwards; /* Animación para aparecer lentamente */
    }

    /* Animación del desenfoque */
    @keyframes blurEffect {
      0% {
        filter: blur(2px); /* Sin desenfoque */
      }
      100% {
        filter: blur(12px); /* Desenfoque final */
      }
    }

    /* Animación del overlay (oscurecimiento) */
    @keyframes fadeOverlay {
      0% {
        background: rgba(0, 0, 0, 0); /* Comienza transparente */
      }
      100% {
        background: rgba(0, 0, 0, 0.3); /* Oscurecimiento final */
      }
    }

    .content {
      position: relative;
      color: white;
      z-index: 1; /* Asegura que el contenido esté sobre la animación */
      text-align: center;
    }
  </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b style="color: black !important">Biblioteca</b><p style="color: black !important">Infop</p></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <!-- Login Form -->
      <form action="index"  id="loginForm" style="display: block;">
        <p class="login-box-msg">Inicia sesión</p>

        <!-- Email Input -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- Password Input -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
          <div class="col-12">
            <a href="{{url('')}}">
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
            </a>
          </div>
        </div>

        <!-- Switch to Register -->
        <div class="mt-3 text-center">
          <a href="#" onclick="switchForm('registerForm')">¿No tienes cuenta? Regístrate aquí</a>
        </div>
      </form>

      <!-- Register Form -->
      <form action="Validacion" id="registerForm" style="display: none;">
        <p class="login-box-msg">Regístrate</p>

        <!-- Name Input -->
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Nombre completo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!-- Email Input -->
        <div class="input-group mb-3">
            <input type="text" name="DNI" class="form-control" placeholder="DNI" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
        <!-- Email Input -->
        <div class="input-group mb-3">
          <input type="email" name="emails" class="form-control" placeholder="Correo electrónico" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <!-- Password Input -->
        <div class="input-group mb-3">
          <input type="password" name="passwords" class="form-control" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <!-- Password Input -->
        <div class="input-group mb-3">
            <input type="password" name="passwords" class="form-control" placeholder="Confirmar Contraseña" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
        <!-- Submit Button -->
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
          </div>
        </div>

        <!-- Switch to Login -->
        <div class="mt-3 text-center">
          <a href="#" onclick="switchForm('loginForm')">¿Ya tienes cuenta? Inicia sesión aquí</a>
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script>
  // Function to toggle between forms
  function switchForm(formId) {
    document.getElementById('loginForm').style.display = formId === 'loginForm' ? 'block' : 'none';
    document.getElementById('registerForm').style.display = formId === 'registerForm' ? 'block' : 'none';
  }
</script>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
