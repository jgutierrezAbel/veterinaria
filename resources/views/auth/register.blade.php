<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <meta charset="UTF-8">
  <title>Bienvenido a la Veterinaria</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #42b983;
      color: white;
      text-align: center;
      padding: 40px 20px;
    }

    main {
      padding: 20px;
    }

    footer {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }
    .alert-success {
      color: #155724;
      background-color: #d4edda;
      border-color: #c3e6cb;
      padding: 10px;
      margin-top: 20px;
      border-radius: 5px;
    }
    .form-group {
      text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 70%;
      margin: 0 auto;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  </style>
  <script>
    function validatePassword() {
      var password = document.getElementById("password");
      var confirmPassword = document.getElementById("confirm-password");

      if (password.value != confirmPassword.value) {
        confirmPassword.setCustomValidity("Las contraseñas no coinciden");
      } else {
        confirmPassword.setCustomValidity('');
      }
    }
  </script>
</head>
<body>
  <header>
    <h1>Bienvenido a la Veterinaria</h1>
    <p>¡Cuidando a tus mascotas como si fueran de la familia!</p>
  </header>

  <main>
    <div class="registration-form">
      <h2>Registro</h2>
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <form method="POST" action="{{ route('register') }}" onsubmit="validatePassword()">
        @csrf

        <div class="form-group">
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">
        </div>

        <div class="form-group">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Correo electrónico">
        </div>

        <div class="form-group">
          <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Contraseña">
        </div>

        <div class="form-group">
          <input id="confirm-password" type="password" name="confirm-password" required onkeyup="validatePassword()" placeholder="Confirmar contraseña">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
          <a href="/login" class="btn btn-danger btn-block mt-3">¿Ya tienes cuenta? Inicia Sesión</a>
          <a href="/" class="btn btn-secundary btn-block mt-3"><i class="fas fa-home"></i> Regresar</a>

        </div>
      </form>
    </div>
  </main>

  <footer>
    <p>Contáctanos para programar una cita: <a>123-456-789</a></p>
    <p>Dirección: 123 Calle Principal, Ciudad</p>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
