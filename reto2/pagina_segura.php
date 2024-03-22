<?php
session_start();

// Verificacion si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Contenido de la página segura
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Segura</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Página Segura</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">¡Bienvenido!</h4>
                        <p class="card-text">Solo los usuarios que hayan iniciado sesión correctamente pueden ver esta página.</p>
                        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>