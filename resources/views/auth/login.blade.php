<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido a la Veterinaria</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    .alert-danger {
      color: #721c24;
      background-color: #f8d7da;
      border-color: #f5c6cb;
      padding: 10px;
      margin-top: 20px;
      border-radius: 5px;
    }
    form {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    form label {
      font-weight: bold;
      color: #333;
    }

    form input[type="email"],
    form input[type="password"] {
      width: 70%;
      margin: 0 auto;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    form button[type="submit"] {
      background-color: #42b983;
      border: 1px solid #42b983;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    form button[type="submit"]:hover {
      background-color: #2ca873;
    }
  </style>
</head>
<body>
  <header>
    <h1>Bienvenido a la Veterinaria</h1>
    <p>¡Cuidando a tus mascotas como si fueran de la familia!</p>
  </header>

  <main>
    <div class="registration-form">
    </div>

    <div class="login-form">
      <h2>Iniciar Sesión</h2>
      @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
          <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Correo Electrónico">
        </div>

        <div class="form-group">
          <input id="password" type="password" name="password" required placeholder="Contraseña">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
          <a href="/register" class="btn btn-danger btn-block mt-3">¿Aún no tienes cuenta? Regístrate</a>
          <a href="/" class="btn btn-secundary btn-block mt-3"><i class="fas fa-home"></i> Regresar</a>
        </div>

      </form>
    </div>
  </main>

  <footer>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
