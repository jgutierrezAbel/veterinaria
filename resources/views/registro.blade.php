<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/stylo.css">
</head>
<body>

<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Registro de usuario veterinaria</p>
        </div>

        <div class="form-content">
            <form action="/registro" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="{{ old('usuario') }}" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Correo" value="{{ old('email') }}" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" value="" required/>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btnSubmit">Registrar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
