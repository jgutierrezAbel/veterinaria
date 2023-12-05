<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/stylo.css">
    <title>Registro de Usuario</title>
</head>
<body>

<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Registro de usuario veterinaria</p>
        </div>

        <form id="registerForm">
            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="correo" class="form-control" placeholder="Correo" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" value=""/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirmar Contraseña" value=""/>
                        </div>
                    </div>
                </div>
                <button type="button" class="btnSubmit" onclick="registrarUsuario()">Registrar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function registrarUsuario() {
        var formData = $('#registerForm').serialize();

        $.ajax({
            type: 'POST',
            url: '/registro', // Reemplaza esto con la ruta correcta de tu controlador
            data: formData,
            success: function(response) {
                alert('Usuario registrado exitosamente.');
                // Puedes redirigir o realizar otras acciones después del registro
            },
            error: function(error) {
                alert('Error al registrar el usuario.');
                console.log(error);
            }
        });
    }
</script>

</body>
</html>
