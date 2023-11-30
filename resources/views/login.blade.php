<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<body>
    <main class="container aling-center p-5">
        <form method="POST"  action="{{route('inicia-sesion')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id= "emailInput"
                name="email" required >
            </div>
           
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id= "passwordInput"
                name="password" required>
            </div>
           
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id= "rememberCheck" name="remember">
                <label class="form-check-label" for="rememberCheck">Mantener sesion iniciada</label>
            </div>

            
            
            <div>
                <p>¿No tienes cuenta? <a href="{{route('registro')}}">Registrate</a></p> <a href="{{route('registro')}}">Registrate</a>
            </div>
            
            <button type="submit" class="btn btn-primary"> Acceder   </button>

        </form>




















    </main>
</body>
</html>
</body>
</html>