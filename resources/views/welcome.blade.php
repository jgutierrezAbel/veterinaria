<!DOCTYPE html>
<html lang="es">
<head>
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

    .about, .services {
      margin-bottom: 30px;
    }

    .about h2, .services h2 {
      color: #42b983;
    }

    footer {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }

    /* Estilos personalizados para los botones */
    .custom-btn {
      color: #fff;
      background-color: #ff5a5f;
      border-color: #ff5a5f;
      padding: 10px 20px;
      text-align: center;
      display: inline-block;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
      background-color: #ff3f43;
    }
  </style>
</head>
<body>
  <header>
    <h1>Bienvenido a la Veterinaria</h1>
    <p>¡Cuidando a tus mascotas como si fueran de la familia!</p>
  </header>

  <main>
    <section class="about">
      <h2>Sobre nosotros</h2>
      <p>Somos un equipo dedicado de veterinarios apasionados por el cuidado de los animales.</p>
      <p>Ofrecemos servicios médicos, vacunaciones, cirugías y más para mantener a tus mascotas saludables y felices.</p>
    </section>

    <section class="services">
      <h2>Nuestros servicios</h2>
      <ul>
        <li>Consultas médicas</li>
        <li>Vacunaciones</li>
        <li>Cirugías</li>
        <li>Análisis clínicos</li>
        <li>Cuidado dental</li>
      </ul>
    </section>

    <div class="mb-3">
      <a href="/login" class="btn btn-success mr-2">Iniciar Sesión</a>
      <a href="/register" class="btn btn-danger">Registrarse</a>
    </div>
  </main>

  <footer>
    <p>Contáctanos para programar una cita: <a href="/portada">123-456-789</a></p>
    <p>Dirección: 123 Calle Principal, Ciudad</p>
  </footer>

  <!-- Scripts de Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
