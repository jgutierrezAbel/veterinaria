<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <main class="container aling-center p-5">
        <form method="POST"  action="{{route('validar-registro')}}">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id= "emailInput"
                name="email" required autocomplete="disable">
            </div>
           
            <div class="mb-3">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id= "passwordInput"
                name="password" required>
            </div>
           
            <div class="mb-3">
                <label for="userInput" class="form-label">Nombre</label>
                <input type="text" class="form-control" id= "userInput"
                name="name" required autocomplete="disable">
            </div>

            <button type="submit" class="btn btn-primary"> Registrate  </button>

        </form>




















    </main>
</body>
</html>