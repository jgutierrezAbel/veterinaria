<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="card">
            <h2 class="text-center mb-4">Registro</h2>
            <form method="POST" action="{{ route('validar-registro') }}">
                @csrf
                <div class="form-group">
                    <label for="emailInput">Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="passwordInput">Contraseña</label>
                    <input type="password" class="form-control" id="passwordInput" name="password" required>
                </div>
                <div class="form-group">
                    <label for="userInput">Nombre</label>
                    <input type="text" class="form-control" id="userInput" name="name" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                <a href="/" class="btn btn-danger btn-back">Volver</a>

            </form>
        </div>
    </main>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
