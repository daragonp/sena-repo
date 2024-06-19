<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login y registro de usuarios</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input name="email" type="email" class="form-control" id="" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input name="password" type="password" class="form-control" id="" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="loginform">Iniciar sesión</button>
                    <a href="register.php">Regístrese</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>