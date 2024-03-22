<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="form-signin" id="loginForm">
            <h2 class="form-signin-heading">Iniciar Sesión</h2>
            <div id="error" class="alert alert-danger" style="display:none;"></div>
            <label for="usuario" class="sr-only">Usuario</label>
            <input type="text" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <label for="contrasena" class="sr-only">Contraseña</label>
            <input type="password" id="contrasena" class="form-control" placeholder="Contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(event) {
                event.preventDefault();
                var usuario = $("#usuario").val();
                var contrasena = $("#contrasena").val();

                $.ajax({
                    type: "POST",
                    url: "login.php",
                    data: {
                        usuario: usuario,
                        contrasena: contrasena
                    },
                    success: function(response) {
                        if (response == "success") {
                            window.location.href = "pagina_segura.php";
                        } else {
                            $("#error").html(response).show();
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>